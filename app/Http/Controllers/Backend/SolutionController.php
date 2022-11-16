<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cohensive\Embed\Facades\Embed;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\SolutionBanner;
use App\Models\SolutionColocation;
use App\Models\SolutionBuild;
use App\Models\SolutionInBuildingSolution;
use App\Models\SolutionService;
use App\Models\SolutionSale;
use App\Models\SolutionProduct;
use App\Models\SolutionProductSlider;
class SolutionController extends Controller
{
    public function banner(){
        $banner = SolutionBanner::Find(1);
        return view('backend.pages.solution.banner',compact('banner'));
    }

    public function bannerUpdate(Request $request){
        $img = SolutionBanner::Find(1);
        $save_image             = $img->image;
        $save_video             = $img->video;
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
                $name_gen = "afro". "Banner". time() . '.' . $image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($image)->resize(2100,1094)->save($location);
                $save_image = 'uploads/solution/'.$name_gen;
        }
        if ( $request->video )

            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();
                $request->video->move(public_path('uploads/solution/'), $fileName);
                $save_video             = 'uploads/solution/' . $fileName;
            }
        $banner = SolutionBanner::findOrFail(1)->update([
            'title'                     => $request->title,
            'default'               => $request->default,
            'image'                 => $save_image,
            'video'                 => $save_video,
            'link'                 => $request->link,
            'embedded'                 =>$embed,
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function colocation(){
        $colocation = SolutionColocation::Find(1);
        return view('backend.pages.solution.colocation',compact('colocation'));
    }

    public function colocationUpdate(Request $request){

        $img = SolutionColocation::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". "Colocation". time() . '.' . $image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($image)->resize(630,730)->save($location);
                $save_image = 'uploads/solution/'.$name_gen;
        }
        $banner = SolutionColocation::findOrFail(1)->update([
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function services(){
        $service = SolutionService::Find(1);
        return view('backend.pages.solution.service',compact('service'));
    }

    public function servicesUpdate(Request $request){
        
        $img = SolutionService::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". "Colocation". time() . '.' . $image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($image)->resize(630,730)->save($location);
                $save_image = 'uploads/solution/'.$name_gen;
        }
        $banner = SolutionService::findOrFail(1)->update([
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function build(){
        $build = SolutionBuild::Find(1);
        return view('backend.pages.solution.build',compact('build'));
    }

    public function buildUpdate(Request $request){
        
        $img = SolutionBuild::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". "Colocation". time() . '.' . $image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($image)->resize(630,730)->save($location);
                $save_image = 'uploads/solution/'.$name_gen;
        }
        $banner = SolutionBuild::findOrFail(1)->update([
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function solutionInBuildingSolution(){
        $solutionInBuildingSolution = SolutionInBuildingSolution::Find(1);
        return view('backend.pages.solution.solutionIn-building-solution',compact('solutionInBuildingSolution'));
    }

    public function solutionInBuildingSolutionUpdate(Request $request){
        
        $img = SolutionInBuildingSolution::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            if ($img->image) {
                 unlink($img->image);
            }
                $image = $request->file('image');
                $name_gen = "afro". "Colocation". time() . '.' . $image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($image)->resize(630,730)->save($location);
                $save_image = 'uploads/solution/'.$name_gen;
        }
        $banner = SolutionInBuildingSolution::findOrFail(1)->update([
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function sale(){
        $sale = SolutionSale::Find(1);
        return view('backend.pages.solution.sale',compact('sale'));
    }

    public function saleUpdate(Request $request){
        
        $img = SolutionSale::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". "Colocation". time() . '.' . $image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($image)->resize(630,730)->save($location);
                $save_image = 'uploads/solution/'.$name_gen;
        }
        $banner = SolutionSale::findOrFail(1)->update([
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function solutionProduct(){
        $data = SolutionProduct::Find(1);
        return view('backend.pages.solution.products',compact('data'));
    }

    public function solutionProductUpdate(Request $request){
       
        
        $banner = SolutionProduct::findOrFail(1)->update([
            'title'                       => $request->title,
            'description'                 => $request->description,
            'updated_at'                  => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function solutionPr(){
        $datas = SolutionProductSlider::latest()->get();
        return view('backend.pages.solution.product',compact('datas'));
    }

    public function solutionPrStore(Request $request){
       
        $save_image             = null;
        
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($image)->resize(130,127)->save($location);
                $save_image = 'uploads/solution/'.$name_gen;
        }
        $banner = SolutionProductSlider::insertGetId([
            'title'                       => $request->title,
            'description'                 => $request->description,
            'image'                       => $save_image,
            'updated_at'                  => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function solutionPrEdit($id){
        $data = SolutionProductSlider::Find($id);
        return view('backend.pages.solution.product-edit',compact('data'));
    }

    public function solutionPrUpdate($id,Request $request){
       $data = SolutionProductSlider::Find($id);
        $save_image             = $data->image;
        
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($image)->resize(130,127)->save($location);
                $save_image = 'uploads/solution/'.$name_gen;
        }
        $data = SolutionProductSlider::findOrFail($id)->update([
            'title'                       => $request->title,
            'description'                 => $request->description,
            'image'                       => $save_image,
            'updated_at'                  => Carbon::now(),
        ]);
        return redirect()->route('solution.pr');
    }

    public function solutionPrDl($id){
        $data = SolutionProductSlider::Find($id);
        $data->delete();
        return redirect()->back();
    }
}
