<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Cohensive\Embed\Facades\Embed;
use App\Models\PartnerBanner;
use App\Models\PartnerCommunity;
use App\Models\PartnerCustomer;
use App\Models\PartnerEnvironment;
use App\Models\PartnerInvestor;
use App\Models\PartnerSupplier;
use App\Models\PartnerWorkforce;
class PartnerController extends Controller
{
    public function partnerBanner(){
        $data = PartnerBanner::Find(1);
        return view('backend.pages.partner.banner',compact('data'));
    }

    public function partnerBannerUpdate(Request $request){
        $img = PartnerBanner::Find(1);
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
                $location               = public_path('uploads/partner/'.$name_gen);
                Image::make($image)->resize(2100,1094)->save($location);
                $save_image = 'uploads/partner/'.$name_gen;
        }
        if ( $request->video )

            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();
                $request->video->move(public_path('uploads/partner/'), $fileName);
                $save_video             = 'uploads/partner/' . $fileName;
            }
        $banner = PartnerBanner::findOrFail(1)->update([
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


    public function partnerWorkforce(){
        $data = PartnerWorkforce::Find(1);
        return view('backend.pages.partner.workforce',compact('data'));
    }
    public function partnerWorkforceUpdate(Request $request){
        $img = PartnerWorkforce::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/partner/'.$name_gen);
                Image::make($image)->resize(320,500)->save($location);
                $save_image = 'uploads/partner/'.$name_gen;
        }
        $banner = PartnerWorkforce::findOrFail(1)->update([
            'title'                             => $request->title,
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function partnerCustomers(){
        $data = PartnerCustomer::Find(1);
        return view('backend.pages.partner.customer',compact('data'));
    }
    public function partnerCustomersUpdate(Request $request){
        $img = PartnerCustomer::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/partner/'.$name_gen);
                Image::make($image)->resize(320,500)->save($location);
                $save_image = 'uploads/partner/'.$name_gen;
        }
        $banner = PartnerCustomer::findOrFail(1)->update([
            'title'                             => $request->title,
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function partnerSupplier(){
        $data = PartnerSupplier::Find(1);
        return view('backend.pages.partner.supplier',compact('data'));
    }
    public function partnerSuppliersUpdate(Request $request){
        $img = PartnerSupplier::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/partner/'.$name_gen);
                Image::make($image)->resize(320,500)->save($location);
                $save_image = 'uploads/partner/'.$name_gen;
        }
        $banner = PartnerSupplier::findOrFail(1)->update([
            'title'                             => $request->title,
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function partnerInvestors(){
        $data = PartnerInvestor::Find(1);
        return view('backend.pages.partner.investor',compact('data'));
    }
    public function partnerInvestorsUpdate(Request $request){
        $img = PartnerInvestor::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/partner/'.$name_gen);
                Image::make($image)->resize(320,500)->save($location);
                $save_image = 'uploads/partner/'.$name_gen;
        }
        $banner = PartnerInvestor::findOrFail(1)->update([
            'title'                             => $request->title,
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function partnerCommunity(){
        $data = PartnerCommunity::Find(1);
        return view('backend.pages.partner.community',compact('data'));
    }
    public function partnerCommunityUpdate(Request $request){
        $img = PartnerCommunity::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/partner/'.$name_gen);
                Image::make($image)->resize(320,500)->save($location);
                $save_image = 'uploads/partner/'.$name_gen;
        }
        $banner = PartnerCommunity::findOrFail(1)->update([
            'title'                             => $request->title,
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function partnerEnvironment(){
        $data = PartnerEnvironment::Find(1);
        return view('backend.pages.partner.invironment',compact('data'));
    }
    public function partnerEnvironmentUpdate(Request $request){
        $img = PartnerEnvironment::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/partner/'.$name_gen);
                Image::make($image)->resize(320,500)->save($location);
                $save_image = 'uploads/partner/'.$name_gen;
        }
        $banner = PartnerEnvironment::findOrFail(1)->update([
            'title'                             => $request->title,
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }
}
