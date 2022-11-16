<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\Media;
use App\Models\MediaCenterBanner;
use App\Models\MediaCenterLibrary;
use App\Models\MediaCenterVideoLibrary;
class MediaController extends Controller
{

    public function MediaBanner(){
        $banner = MediaCenterBanner::Find(1);
        return view('backend.pages.media.banner',compact('banner'));
    }


    public function MediaBannerUpdate(Request $request){
        $img = MediaCenterBanner::Find(1);
        $save_image             = $img->image;
        $save_video             = $img->video;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". "Banner". time() . '.' . $image->extension();
                $location               = public_path('uploads/media/'.$name_gen);
                Image::make($image)->resize(2100,1094)->save($location);
                $save_image = 'uploads/media/'.$name_gen;
        }
        if ( $request->video )

            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();
                $request->video->move(public_path('uploads/media/'), $fileName);
                $save_video             = 'uploads/media/' . $fileName;
            }
        $banner = MediaCenterBanner::findOrFail(1)->update([
            'title'                 => $request->title,
            'default'               => $request->default,
            'image'                 => $save_image,
            'video'                 => $save_video,
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function mediaLibrary(){
        $datas = MediaCenterLibrary::latest()->get();
        return view('backend.pages.media.library',compact('datas'));
    }

    public function mediaLibraryEdit($id){
        $data = MediaCenterLibrary::Find($id);
        return view('backend.pages.media.library-edit',compact('data'));
    }

    public function mediaLibraryStore(Request $request){
        
        $save_image             = null;
        $save_file              = null;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/media/'.$name_gen);
                Image::make($image)->resize(300,400)->save($location);
                $save_image = 'uploads/media/'.$name_gen;
        }

        if ( $request->file ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('file');
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/media/'), $fileName);
                $save_file             = 'uploads/media/' . $fileName;
            }
        $header = MediaCenterLibrary::insertGetId([
            'title'                 => $request->title,
            'image'                 => $save_image,
            'file'                  => $save_file,
            'created_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function mediaLibraryUpdate($id, Request $request){
        $media = MediaCenterLibrary::Find($id);
        $save_image             = $media->image;
        $save_file              = $media->file;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/media/'.$name_gen);
                Image::make($image)->resize(300,400)->save($location);
                $save_image = 'uploads/media/'.$name_gen;
        }

        if ( $request->file ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('file');
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/media/'), $fileName);
                $save_file             = 'uploads/media/' . $fileName;
            }
        $data = MediaCenterLibrary::findOrFail($id)->update([
            'title'                 => $request->title,
            'image'                 => $save_image,
            'file'                  => $save_file,
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function mediaLibraryDelete($id){
        $data = MediaCenterLibrary::Find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function mediaVideoLibrary(){
        $datas = MediaCenterVideoLibrary::latest()->get();
        return view('backend.pages.media.video',compact('datas'));
    }
    public function mediaVideoLibraryStore(Request $request){
        
        $save_image             = null;
        $save_video              = null;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/media/'.$name_gen);
                Image::make($image)->resize(300,400)->save($location);
                $save_image = 'uploads/media/'.$name_gen;
        }

        if ( $request->video ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();
                $request->video->move(public_path('uploads/media/'), $fileName);
                $save_video             = 'uploads/media/' . $fileName;
            }
        $header = MediaCenterVideoLibrary::insertGetId([
            'title'                 => $request->title,
            'image'                 => $save_image,
            'video'                  => $save_video,
            'created_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function mediaVideoLibraryUpdate($id, Request $request){
        $media = MediaCenterVideoLibrary::Find($id);
        $save_image             = $media->image;
        $save_video             = $media->video;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/media/'.$name_gen);
                Image::make($image)->resize(300,400)->save($location);
                $save_image = 'uploads/media/'.$name_gen;
        }

        if ( $request->file ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();
                $request->video->move(public_path('uploads/media/'), $fileName);
                $save_video            = 'uploads/media/' . $fileName;
            }
        $data = MediaCenterVideoLibrary::findOrFail($id)->update([
            'title'                 => $request->title,
            'image'                 => $save_image,
            'video'                  => $save_video,
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function mediaVideoLibraryEdit($id){
        $data = MediaCenterVideoLibrary::Find($id);
        return view('backend.pages.media.video-edit',compact('data'));
    }
    public function mediaVideoLibraryDelete($id){
        $data = MediaCenterVideoLibrary::Find($id);
        $data->delete();
        return redirect()->back();
    }
    public function media(){
        $datas = Media::latest()->get();
        return view('backend.pages.media.media',compact('datas'));
    }
    public function mediaStore(Request $request){
        
       
        $data = Media::insertGetId([
            'title'                     => $request->title,
            'date'                      => $request->date,
            'button_text'               => $request->button_text,
            'button_link'               => $request->button_link,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function mediaEdit($id){
        $data = Media::Find($id);
        return view('backend.pages.media.media-edit',compact('data'));
    }

    public function mediaUpdate($id,Request $request){
        
       
        $data = Media::findOrFail($id)->update([
            'title'                     => $request->title,
            'date'                      => $request->date,
            'button_text'               => $request->button_text,
            'button_link'               => $request->button_link,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->route('media');
    }

    public function mediaDelete($id){
        $data = Media::Find($id);
        $data->delete();
        return redirect()->back();
    }

    
}
