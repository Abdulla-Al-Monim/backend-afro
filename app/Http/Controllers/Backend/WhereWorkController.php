<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cohensive\Embed\Facades\Embed;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\WhereWorkBanner;
use App\Models\WhereWorkVideo;
use App\Models\WhereWorkOverview;
use App\Models\WhereWorkKps;
class WhereWorkController extends Controller
{
    public function banner(){
        $banner = WhereWorkBanner::Find(1);
        return view('backend.pages.where-work.banner',compact('banner'));
    }

    public function bannerUpdate(Request $request){
        $img = WhereWorkBanner::Find(1);
        $save_image             = $img->image;
        $save_video             = $img->video;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". "Banner". time() . '.' . $image->extension();
                $location               = public_path('uploads/where-we-work/'.$name_gen);
                Image::make($image)->resize(2100,1094)->save($location);
                $save_image = 'uploads/where-we-work/'.$name_gen;
        }
        if ( $request->video )

            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();
                $request->video->move(public_path('uploads/where-we-work/'), $fileName);
                $save_video             = 'uploads/where-we-work/' . $fileName;
            }
        $banner = WhereWorkBanner::findOrFail(1)->update([
            'title'                 => $request->title,
            'default'               => $request->default,
            'image'                 => $save_image,
            'video'                 => $save_video,
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function video(){
        $video = WhereWorkVideo::Find(1);
        return view('backend.pages.where-work.video',compact('video'));
    }

    public function videoUpdate(Request $request){
        $img = WhereWorkVideo::Find(1);
        $embed                = $img->embedded;
        if ($request->link) {
            $embed = Embed::make($request->link)->parseUrl();
            $embed = $embed->getHtml();
        }
        $video = WhereWorkVideo::findOrFail(1)->update([
            'link'                      => $request->link,
            'embedded'                  => $embed,
            'updated_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function overview(){
        $overview = WhereWorkOverview::Find(1);
        return view('backend.pages.where-work.over-view',compact('overview'));
    }

    public function overviewUpdate(Request $request){
        $img = WhereWorkOverview::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". "Over-view". time() . '.' . $image->extension();
                $location               = public_path('uploads/where-we-work/'.$name_gen);
                Image::make($image)->resize(960,400)->save($location);
                $save_image = 'uploads/where-we-work/'.$name_gen;
        }
        $whereWorkOverview = WhereWorkOverview::findOrFail(1)->update([
            'description'                   => $request->description,
            'image'                         => $save_image,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function kpis(){
        $kpises = WhereWorkKps::latest()->get();
        return view('backend.pages.where-work.kpis',compact('kpises'));
    }

    public function kpisStore(Request $request){
        $kpis = WhereWorkKps::insertGetId([
            
            'country'                           => $request->country,
            'tenancy_ratio'                     => $request->tenancy_ratio,
            'sites'                             => $request->sites,
            'tenants'                           => $request->tenants,
            'created_at'                        => Carbon::now(),
        ]);
        return redirect()->route('where.kpis');
    }
    public function kpisEdit($id){
        $data = WhereWorkKps::Find($id);
        return view('backend.pages.where-work.kpis-edit',compact('data'));
    }
    public function kpisUpdate($id, Request $request){

        $kpis = WhereWorkKps::findOrFail($id)->update([
            
            'country'                           => $request->country,
            'tenancy_ratio'                     => $request->tenancy_ratio,
            'sites'                             => $request->sites,
            'tenants'                           => $request->tenants,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->route('where.kpis');
    }
    public function kpisDelete($id){
        $whereWorkKps = WhereWorkKps::Find($id);
        
        
        $whereWorkKps->delete();
        return redirect()->route('where.kpis');
    }
}
