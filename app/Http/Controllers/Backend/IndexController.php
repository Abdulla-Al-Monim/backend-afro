<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\IndexHeader;
use App\Models\IndexHeaderButton;
use App\Models\IndexSolution;
use App\Models\IndexService;
use App\Models\ServiceSlider;
use App\Models\SCountry;
use App\Models\IndexApproach;
use App\Models\IndexReview;
use App\Models\IndexReviewSlider;
use App\Models\IndexAcademy;
use App\Models\IndexAward;
use App\Models\Magazine;
use App\Models\IndexPartnerSlider;
use App\Models\IndexPartner;
use App\Models\ServiceCountry;
use Cohensive\Embed\Facades\Embed;
class IndexController extends Controller
{
    public function home(){
        return view('backend.index');
    }
    public function header(){
        $header = IndexHeader::Find(1);
        return view('backend.pages.index.header',compact('header'));
    }

    public function headerUpdate(Request $request){
        $img = IndexHeader::Find(1);
        $save_image             = $img->image;
        $save_video             = $img->video;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($image)->resize(2100,1094)->save($location);
                $save_image = 'uploads/index/'.$name_gen;
        }

        if ( $request->video ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();
                $request->video->move(public_path('uploads/index/'), $fileName);
                $save_video             = 'uploads/index/' . $fileName;
            }
        $header = IndexHeader::findOrFail(1)->update([
            'title'                 => $request->title,
            'heading'               => $request->heading,
            'default'               => $request->default,
            'description'           => $request->description,
            'image'                 => $save_image,
            'video'                 => $save_video,
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    //header button

    public function headerButton(){
        $headerButtton = IndexHeaderButton::Find(1);
        return view('backend.pages.index.header-button',compact('headerButtton'));
    }

    public function headerButtonUpdate(Request $request){
       
        $header = IndexHeaderButton::findOrFail(1)->update([
            'text_one'                      => $request->text_one,
            'link_one'                      => $request->link_one,
            'text_two'                      => $request->text_two,
            'link_two'                      => $request->link_two,
            'text_three'                    => $request->text_three,
            'link_three'                    => $request->link_three,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    //solution section
    public function solution(){
        $solution = IndexSolution::Find(1);
        return view('backend.pages.index.solution',compact('solution'));
    }

    public function solutionUpdate(Request $request){
        $img = IndexSolution::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($image)->resize(535,74)->save($location);
                $save_image = 'uploads/index/'.$name_gen;
        }
        $header = IndexSolution::findOrFail(1)->update([
            'heading'                   => $request->heading,
            'description'               => $request->description,
            'text_one'                  => $request->text_one,
            'text_two'                  => $request->text_two,
            'text_three'                => $request->text_three,
            'text_four'                 => $request->text_four,
            'text_five'                 => $request->text_five,
            'text_six'                  => $request->text_six,
            'image'                     => $save_image,
            'updated_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    //service section
    public function service(){
        $service = IndexService::Find(1);
        return view('backend.pages.index.service',compact('service'));
    }

    public function servieUpdate(Request $request){
        $img = IndexService::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            if ($img->image) {
                 unlink($img->image);
            }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($image)->resize(535,74)->save($location);
                $save_image = 'uploads/index/'.$name_gen;
        }
        $header = IndexService::findOrFail(1)->update([
            'heading'                   => $request->heading,
            'image'                     => $save_image,
            'updated_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function serviceSlider(){
        $sliders = ServiceSlider::latest()->get();
        return view('backend.pages.index.service-slider',compact('sliders'));
    }

    
    public function serviceSliderAdd(Request $request){
        
        $save_image             = null;
        $d_image             = null;
        if ($request->image) {
            
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image)->resize(535,350)->save($location);
            $save_image = 'uploads/index/'.$name_gen;
        }
        if ($request->d_image) {
            
            $image = $request->file('d_image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image)->resize(2100,1094)->save($location);
            $d_image = 'uploads/index/'.$name_gen;
        }
        $sl = ServiceSlider::insertGetId([
            'title'                     => $request->title,
            'site'                 => $request->site,
            'short_description'                 => $request->short_description,
            'description'                 => $request->description,
            
            'image'                     => $save_image,
            'd_image'                   => $d_image,
            'created_at'                => Carbon::now(),
        ]);

        foreach($request->countries as $country){
            $cn = ServiceCountry::insertGetId([
            'service_slider_id'                     => $sl,
            'name'                     => $country,
            'created_at'                => Carbon::now(),
        ]);
        $sCountry = SCountry::where('name',$country)->first();
        if($sCountry == null){
                SCountry::insert([
                'name'              => $country,
                'created_at'            => Carbon::now(),
            ]);
        }    
        }
        return redirect()->back();
    }
    public function serviceSliderEdit($id){
        $data = ServiceSlider::Find($id);
        return view('backend.pages.index.service-slider-edit',compact('data'));
    }
    public function serviceSliderUpdate($id,Request $request){

        $data = ServiceSlider::Find($id);
        $save_image             = $data->image;
        $d_image                = $data->d_image;
        if ($request->image) {
            
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image)->resize(535,350)->save($location);
            $save_image = 'uploads/index/'.$name_gen;
        }
        if ($request->d_image) {
            
            $image = $request->file('d_image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image)->resize(2100,1094)->save($location);
            $d_image = 'uploads/index/'.$name_gen;
        }
        $sl = ServiceSlider::findOrFail($id)->update([
            'title'                     => $request->title,
            'site'                 => $request->site,
            'short_description'                 => $request->short_description,
            'description'                 => $request->description,
            
            'image'                     => $save_image,
            'd_image'                   => $d_image,
            'created_at'                => Carbon::now(),
        ]);
        $cn = ServiceCountry::where('service_slider_id',$id)->get();
            foreach($cn as $i){
                $t = ServiceCountry::findOrFail($i->id)->delete();
            }
        foreach($request->countries as $country){
            $cn = ServiceCountry::insertGetId([
            'service_slider_id'                     => $id,
            'name'                     => $country,
            'created_at'                => Carbon::now(),
        ]);
        $sCountry = SCountry::where('name',$country)->first();
        if($sCountry == null){
                SCountry::insert([
                'name'              => $country,
                'created_at'            => Carbon::now(),
            ]);
        }    
        }
        return redirect()->route('index.service.slider');
    }
    public function serviceSliderDelete($id){
        $slider = ServiceSlider::Find($id);
        
        // if ($slider->image) {
        //     unlink($slider->image);
        // }
        // if ($slider->d_image) {
        //     unlink($slider->d_image);
        // }
        $slider->delete();
        return redirect()->route('index.service.slider');
    }

    //approach
    public function approach(){
        $approach = IndexApproach::Find(1); 
         return view('backend.pages.index.approach',compact('approach'));
    }

    public function approachUpdate (Request $request){
        $img = IndexApproach::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($image)->resize(630,730)->save($location);
                $save_image = 'uploads/index/'.$name_gen;
        }
        $header = IndexApproach::findOrFail(1)->update([
            'title'                         => $request->title,
            'description'                   => $request->description,
            'button_text'                   => $request->button_text,
            'button_link'                   => $request->button_link,
            'image'                         => $save_image,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    //review
    public function review(){
        $review = IndexReview::Find(1); 
         return view('backend.pages.index.review',compact('review'));
    }

    public function revireUpdate (Request $request){
        $img = IndexReview::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($image)->resize(415,74)->save($location);
                $save_image = 'uploads/index/'.$name_gen;
        }
        $header = IndexReview::findOrFail(1)->update([
            'title'                         => $request->title,
            'image'                         => $save_image,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function reviewSlider(){
        $reviews = IndexReviewSlider::latest()->get();
        return view('backend.pages.index.review-slider',compact('reviews'));
    }
    public function reviewSliderAdd(Request $request){
        
        $save_image             = null;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image)->resize(150,150)->save($location);
            $save_image = 'uploads/index/'.$name_gen;
        }
        $header = IndexReviewSlider::insertGetId([
            'home'                      =>$request->home,
            'title'                     => $request->title,
            'rating'                    => $request->rating,
            'description'               => $request->description,
            'image'                     => $save_image,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->route('index.review.slider');
    }

    public function reviewSliderEdit($id){
        $data = IndexReviewSlider::Find($id);
        return view('backend.pages.index.review-slider-edit',compact('data'));
    }

    public function reviewSliderUpdate($id,Request $request){
        $data = IndexReviewSlider::Find($id);
        $save_image             = $data->image;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image)->resize(150,150)->save($location);
            $save_image = 'uploads/index/'.$name_gen;
        }
        $header = IndexReviewSlider::findOrFail($id)->update([
            'home'                      =>$request->home,
            'title'                     => $request->title,
            'rating'                    => $request->rating,
            'description'               => $request->description,
            'image'                     => $save_image,
            'updated_at'                => Carbon::now(),
        ]);
        return redirect()->route('index.review.slider');
    }

    public function reviewSliderDelete($id){
        $slider = IndexReviewSlider::Find($id);
        
        // if ($slider->image) {
        //     // unlink($slider->image);
        // }
        $slider->delete();
        return redirect()->route('index.review.slider');
    }

    public function academy(){
        $academy = IndexAcademy::Find(1);
        return view('backend.pages.index.academy',compact('academy'));
    }

    public function academyUpdate (Request $request){
        $img = IndexAcademy::Find(1);
        $save_image             = $img->image;
        $icon_one             = $img->icon_one;
        $icon_two             = $img->icon_two;
        $icon_three             = $img->icon_three;
        $icon_four             = $img->icon_four;
        $embed                = $img->embedded;
        if ($request->link) {
            $embed = Embed::make($request->link)->parseUrl();
            $embed = $embed->getHtml();
        }
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($image)->resize(24,24)->save($location);
                $save_image = 'uploads/index/'.$name_gen;
        }

        if ($request->icon_one) {

            // if ($img->icon_one) {
            //      unlink($img->icon_one);
            // }
                $icon_one = $request->file('icon_one');
                $name_gen = "afro". time() . '.' . $icon_one->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($icon_one)->resize(24,24)->save($location);
                $icon_one = 'uploads/index/'.$name_gen;
        }
        if ($request->icon_two) {

            // if ($img->icon_two) {
            //      unlink($img->icon_two);
            // }
                $icon_two = $request->file('icon_two');
                $name_gen = "afro". time() . '.' . $icon_two->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($icon_two)->resize(24,24)->save($location);
                $icon_two = 'uploads/index/'.$name_gen;
        }
        if ($request->icon_three) {

            // if ($img->icon_three) {
            //      unlink($img->icon_three);
            // }
                $icon_three = $request->file('icon_three');
                $name_gen = "afro". time() . '.' . $icon_three->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($icon_three)->resize(24,24)->save($location);
                $icon_three = 'uploads/index/'.$name_gen;
        }
        if ($request->icon_four) {

            // if ($img->icon_four) {
            //      unlink($img->icon_four);
            // }
                $icon_four = $request->file('icon_four');
                $name_gen = "afro". time() . '.' . $icon_four->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($icon_four)->resize(24,24)->save($location);
                $icon_four = 'uploads/index/'.$name_gen;
        }
        $header = IndexAcademy::findOrFail(1)->update([
            'title'                         => $request->title,
            'icon_one'                      => $icon_one,
            'text_one'                      => $request->text_one,
            'icon_two'                      => $icon_two,
            'text_two'                      => $request->text_two,
            'icon_three'                    => $icon_three,
            'text_three'                    => $request->text_three,
            'icon_four'                     => $icon_four,
            'text_four'                     => $request->text_four,
            'link'                          => $request->link,
            'embedded'                      => $embed,
            'image'                         => $save_image,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function award(){
        $datas = IndexAward::latest()->get();
        return view('backend.pages.index.award',compact('datas'));
    }

    public function awardStore(Request $request){
        // dd($request->image);
        $save_image = null;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($image)->resize(780,520)->save($location);
                $save_image = 'uploads/index/'.$name_gen;
        }

        $data = IndexAward::insertGetId([
            'home'                  => $request->home,
            'title'                 => $request->title,
            'description'           => $request->description,
            'image'                 => $save_image,
            'created_at'            => Carbon::now(),

        ]);
        return redirect()->back();
    }

    public function awardEdit($id){
        $data = IndexAward::Find($id);
        return view('backend.pages.index.award-edit',compact('data'));
    }
    public function awardUpdate($id,Request $request){
        // dd($request->image);
        $data = IndexAward::Find($id);
        $save_image = $data->image;
        if ($request->image) {

                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/index/'.$name_gen);
                Image::make($image)->resize(780,520)->save($location);
                $save_image = 'uploads/index/'.$name_gen;
        }


        $data = IndexAward::findOrFail($id)->update([
            'home'                  => $request->home,
            'title'                 => $request->title,
            'description'           => $request->description,
            'image'                 => $save_image,
            'updated_at'            => Carbon::now(),

        ]);
        return redirect()->back();
    }


    public function magazine(){
        $datas = Magazine::latest()->get();
        return view('backend.pages.index.magazine',compact('datas'));

    }

    public function magazineStore(Request $request){
        
        $save_image             = null;
        $d_image             = null;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image)->resize(535,350)->save($location);
            $save_image = 'uploads/index/'.$name_gen;
        }
        if ($request->image_banner) {
            $image_banner = $request->file('image_banner');
            $name_gen = "afro". time() . '.' . $image_banner->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image_banner)->resize(2100,1094)->save($location);
            $d_image = 'uploads/index/'.$name_gen;
        }
        $header = Magazine::insertGetId([
            'home'                                  =>$request->home,
            'heading'                               => $request->heading,
            'title'                                 => $request->title,
            'sort_description'                      => $request->sort_description,
            'description'                           => $request->description,
            'button_link'                           => $request->button_link,
            'image'                                 => $save_image,
            'image_banner'                          => $d_image,
            'created_at'                            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function magazineEdit($id){
        $data = Magazine::Find($id);
        return view('backend.pages.index.magazine-edit',compact('data'));

    }
    public function magazineUpdate($id,Request $request){
        $data = Magazine::Find($id);
        $save_image             = $data->image;
        $d_image                = $data->image_banner;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image)->resize(535,350)->save($location);
            $save_image = 'uploads/index/'.$name_gen;
        }
        if ($request->image_banner) {
            $image_banner = $request->file('image_banner');
            $name_gen = "afro". time() . '.' . $image_banner->extension();
            $location               = public_path('uploads/index/'.$name_gen);
            Image::make($image_banner)->resize(2100,1094)->save($location);
            $d_image = 'uploads/index/'.$name_gen;
        }
        $header = Magazine::findOrFail($id)->update([
            'home'                                  =>$request->home,
            'heading'                               => $request->heading,
            'title'                                 => $request->title,
            'sort_description'                      => $request->sort_description,
            'description'                           => $request->description,
            'button_link'                           => $request->button_link,
            'image'                                 => $save_image,
            'image_banner'                          => $d_image,
            'updated_at'                            => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function magazineDelete($id){
        $data = Magazine::Find($id);
        
        // if ($data->image) {
        //     unlink($data->image);
        // }
        $data->delete();
        return redirect()->back();
    }

    public function partner(){
        $data = IndexPartner::where('id',1)->first();
        return view('backend.pages.index.partner',compact('data'));
    }
    public function partnerUpdate(Request $request){
        $data = IndexPartner::findOrFail(1)->update([
            'heading'                                       => $request->heading,
            'description'                                   => $request->description,
            'created_at'                                    => Carbon::now(),
        ]);
        return redirect()->back();
    }
}
