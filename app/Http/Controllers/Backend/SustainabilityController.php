<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Cohensive\Embed\Facades\Embed;
use App\Models\SustainabilityBanner;
use App\Models\SustainabilityImage;
use App\Models\SustainabilityProposition;
use App\Models\SustainabilityMaterial;
use App\Models\SustainabilityDriving;
use App\Models\SustainabilitySustainable;
use App\Models\SustainabilityGovernance;
use App\Models\KeyMaterial;
class SustainabilityController extends Controller
{
    public function sustainabilityBanner(){
        $data = SustainabilityBanner::Find(1);
        return view('backend.pages.sustainability.banner',compact('data'));
    }

    public function sustainabilityBannerUpdate(Request $request){
        $img = SustainabilityBanner::Find(1);
        $save_image             = $img->image;

        $save_video             = $img->video;
       
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". "Banner". time() . '.' . $image->extension();
                $location               = public_path('uploads/sustainability/'.$name_gen);
                Image::make($image)->resize(2100,1094)->save($location);
                $save_image = 'uploads/sustainability/'.$name_gen;
        }

        if ( $request->video )

            {
                if ($img->video) {
                 unlink($img->video);
                }
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();
                $request->video->move(public_path('uploads/sustainability/'), $fileName);
                $save_video             = 'uploads/sustainability/' . $fileName;
            }
        $banner = SustainabilityBanner::findOrFail(1)->update([
            'title'                     => $request->title,
            'default'               => $request->default,
            'image'                 => $save_image,
            'video'                 => $save_video,
            'updated_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function sustainabilityImage(){
        $data = SustainabilityImage::Find(1);
        return view('backend.pages.sustainability.image',compact('data'));
    }

    public function sustainabilityImageUpdate(Request $request){
        $img = SustainabilityImage::Find(1);
        $save_image             = $img->image;
       
        if ($request->image) {

            /*if ($img->image) {
                 unlink($img->image);
            }*/
                $image = $request->file('image');
                $name_gen = "afro". "Banner". time() . '.' . $image->extension();
                $location               = public_path('uploads/sustainability/'.$name_gen);
                Image::make($image)->resize(960,410)->save($location);
                $save_image = 'uploads/sustainability/'.$name_gen;
        }
        $banner = SustainabilityImage::findOrFail(1)->update([
            'image'                     => $save_image,
            'updated_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function sustainabilityProposition(){
        $data = SustainabilityProposition::Find(1);
        return view('backend.pages.sustainability.proposition',compact('data'));
    }
    public function sustainabilityPropositionUpdate(Request $request){
        $img = SustainabilityProposition::Find(1);
        $save_image             = $img->image;
        
        if ($request->image) {

            if ($img->image) {
                 unlink($img->image);
            }
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/sustainability/'.$name_gen);
                Image::make($image)->resize(420,344)->save($location);
                $save_image = 'uploads/sustainability/'.$name_gen;
        }
        $banner = SustainabilityProposition::findOrFail(1)->update([
            'title'                             => $request->title,
            'description'                       => $request->description,
            'image'                             => $save_image,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function sustainabilityDriving(){
        $data = SustainabilityDriving::Find(1);
        return view('backend.pages.sustainability.driving',compact('data'));
    }

    public function sustainabilityDrivingUpdate(Request $request){
        
        $data = SustainabilityDriving::findOrFail(1)->update([
            'title_heading'                                             => $request->title_heading,
            'title_one'                                                 => $request->title_one,
            'description_one'                                           => $request->description_one,
            'title_two'                                                 => $request->title_two,
            'description_two'                                           => $request->description_two,
            'updated_at'                                                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function sustainabilitySustainable(){
        $data = SustainabilitySustainable::Find(1);
        return view('backend.pages.sustainability.sustainable',compact('data'));
    }

    public function sustainabilitySustainableUpdate(Request $request){
        
        $data = SustainabilitySustainable::findOrFail(1)->update([
            'title_heading'                                             => $request->title_heading,
            'title_one'                                                 => $request->title_one,
            'description_one'                                           => $request->description_one,
            'title_two'                                                 => $request->title_two,
            'description_two'                                           => $request->description_two,
            'updated_at'                                                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function sustainabilityGovernance(){
        $data = SustainabilityGovernance::Find(1);
        return view('backend.pages.sustainability.governance',compact('data'));
    }

    public function sustainabilityGovernanceUpdate(Request $request){
        
        $data = SustainabilityGovernance::findOrFail(1)->update([
            'title_heading'                                             => $request->title_heading,
            'title_one'                                                 => $request->title_one,
            'description_one'                                           => $request->description_one,
            'title_two'                                                 => $request->title_two,
            'description_two'                                           => $request->description_two,
            'updated_at'                                                => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function sustainabilityMaterial(){
        $datas = SustainabilityMaterial::latest()->get();
        return view('backend.pages.sustainability.material',compact('datas'));
    }

    public function sustainabilityMaterialEdit($id){
        $data = SustainabilityMaterial::Find($id);
        return view('backend.pages.sustainability.material-edit',compact('data'));
    }


    public function sustainabilityMaterialStore(Request $request){

        $save_image             = null;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/sustainability/'.$name_gen);
                Image::make($image)->resize(50,45)->save($location);
                $save_image = 'uploads/sustainability/'.$name_gen;
        }
        
        $data = SustainabilityMaterial::insertGetId([
            'sustainability'            => $request->home,
            'title'                     => $request->title,
            'image'                     => $save_image,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function sustainabilityMaterialUpdate($id,Request $request){
        $data = SustainabilityMaterial::Find($id);
        $save_image             = $data->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/sustainability/'.$name_gen);
                Image::make($image)->resize(50,45)->save($location);
                $save_image = 'uploads/sustainability/'.$name_gen;
        }
        
        $data = SustainabilityMaterial::findOrFail($id)->update([
            'sustainability'            => $request->home,
            'title'                     => $request->title,
            'image'                     => $save_image,
            'updated_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function sustainabilityMaterialDelete($id){
        
        $data = SustainabilityMaterial::Find($id);
        $data->delete();
        $roles = KeyMaterial::where('sustainability_material_id',$id)->get();
        if ($roles != null) {
            foreach($roles as $role){
                $d = KeyMaterial::Find($role->id);
                $d->delete();
            }
        }
        return redirect()->back();
    }


    public function sustainabilityKeyMaterial($id){
        $p_id = $id;
        $datas = KeyMaterial::where('sustainability_material_id',$id)->get();
    
        return view('backend.pages.sustainability.key-material',compact('datas','p_id'));
    }

    public function sustainabilityKeyMaterialStore(Request $request){

        $save_image             = null;
        $save_file             = null;
        if ($request->image) {
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/sustainability/'.$name_gen);
                Image::make($image)->resize(287,270)->save($location);
                $save_image = 'uploads/sustainability/'.$name_gen;
        }
        if ( $request->file ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('file');
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/sustainability/'), $fileName);
                $save_file             = 'uploads/sustainability/' . $fileName;
            }
        $data = KeyMaterial::insertGetId([
            'sustainability_material_id'                       => $request->sustainability_material_id,
            'heading'                               => $request->heading,
            'title'                                 => $request->title,
            'description'                           => $request->description,
            'image'                                 => $save_image,
            'file'                                  => $save_file,
            'created_at'                            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function sustainabilityKeyMaterialUpdate($id,Request $request){
        $data = KeyMaterial::Find($id);
        $save_image             = $data->image;
        $save_file             = $data->file;
        if ($request->image) {
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/sustainability/'.$name_gen);
                Image::make($image)->resize(287,270)->save($location);
                $save_image = 'uploads/sustainability/'.$name_gen;
        }
        if ( $request->file ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('file');
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/sustainability/'), $fileName);
                $save_file             = 'uploads/sustainability/' . $fileName;
            }
        $data = KeyMaterial::findOrFail($id)->update([
           
            'heading'                               => $request->heading,
            'title'                                 => $request->title,
            'description'                           => $request->description,
            'image'                                 => $save_image,
            'file'                                  => $save_file,
            'updated_at'                            => Carbon::now(),
        ]);
        return redirect()->back();
    }


    
    
    public function sustainabilityKeyMaterialEdit($id){
        
        $data = KeyMaterial::Find($id);
        return view('backend.pages.sustainability.key-material-edit',compact('data'));
    }

    public function sustainabilityKeyMaterialDelete($id){
        
        $data = KeyMaterial::Find($id);
        $data->delete();
        return redirect()->back();
    }


}
