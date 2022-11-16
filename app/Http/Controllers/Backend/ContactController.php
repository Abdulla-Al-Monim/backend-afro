<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ContactCountry;
Use Alert;
use File;
use Intervention\Image\Facades\Image;

class ContactController extends Controller
{
    public function country(){
        $datas = ContactCountry::latest()->get();
        return view('backend.pages.theme.contact.country',compact('datas'));
    }

    public function countryStore(Request $request){
       $save_icon             = null;
        if ($request->Icon) {
            $image = $request->file('Icon');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/about/'.$name_gen);
            Image::make($image)->resize(30,20)->save($location);
            $save_icon = 'uploads/about/'.$name_gen;
        }

        $save_file             = null;
        if ($request->image) {
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(287,170)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }


        $data = ContactCountry::insertGetId([
            'name'                                      => $request->name,
            'email'                                     => $request->email,
            'registation_name'                          => $request->registation_name,
            'address'                                   => $request->address,
            'phone'                                     => $request->phone,
            'country_manager'                           => $request->country_manager,
            'longitude'                                 => $request->longitude,
            'latitude'                                  => $request->latitude,
            'icon'                                      => $save_icon,
            'image'                                     => $save_image,
            'created_at'                                => Carbon::now(),
        ]);
        
        return redirect()->back();
    }

    public function countryEdit($id){
        $data = ContactCountry::Find($id);
        return view('backend.pages.theme.contact.country-edit',compact('data'));
    }

    public function countryUpdate($id,Request $request){
        $file = ContactCountry::Find($id);
       $save_icon             = $file->icon;
       
        if ($request->Icon) {
            $image = $request->file('Icon');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/about/'.$name_gen);
            Image::make($image)->resize(30,20)->save($location);
            $save_icon = 'uploads/about/'.$name_gen;
        }

        $save_image             = $file->image;
        if ($request->image) {
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(287,170)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        $data = ContactCountry::findOrFail($id)->update([
            'name'                                      => $request->name,
            'email'                                     => $request->email,
            'registation_name'                          => $request->registation_name,
            'address'                                   => $request->address,
            'phone'                                     => $request->phone,
            'country_manager'                           => $request->country_manager,
            'longitude'                                 => $request->longitude,
            'latitude'                                  => $request->latitude,
            'icon'                                      => $save_icon,
            'image'                                     => $save_image,
            'updated_at'                                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function countryDelete($id){
       
        $data = ContactCountry::findOrFail($id)->delete();
        Alert::warning('Are you sure Delete Country', 'Warning Message');
        return redirect()->back();
    }
}
