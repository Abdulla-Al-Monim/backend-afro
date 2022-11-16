<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\ThemeLogo;
use App\Models\ThemeFooter;
use App\Models\ThemeContact;
use App\Models\ThemeSocialmedia;
class ThemeController extends Controller
{
    public function logo()
    {   $data = ThemeLogo::Find(1);
        return  view('backend.pages.theme.logo',compact('data'));
    }
    public function logoUpdate(Request $request){
        $img = ThemeLogo::Find(1);
        $header_logo             = $img->header_logo;
        $footer_logo             = $img->footer_logo;
        $admin_logo             = $img->admin_logo;
        $fav_icon             = $img->fav_icon;
        if ($request->header_logo) {

            // if ($img->header_logo) {
            //      unlink($img->header_logo);
            // }
                $header_logo = $request->file('header_logo');
                $name_gen = "afro". time() . '.' . $header_logo->extension();
                $location               = public_path('uploads/theme/'.$name_gen);
                Image::make($header_logo)->resize(170,42)->save($location);
                $header_logo = 'uploads/theme/'.$name_gen;
        }
        if ($request->footer_logo) {

            // if ($img->footer_logo) {
            //      unlink($img->admin_logo);
            // }
                $footer_logo = $request->file('footer_logo');
                $name_gen = "afro". time() . '.' . $footer_logo->extension();
                $location               = public_path('uploads/theme/'.$name_gen);
                Image::make($footer_logo)->resize(132,41)->save($location);
                $footer_logo = 'uploads/theme/'.$name_gen;
        }

        if ($request->admin_logo) {

            // if ($img->admin_logo) {
            //      unlink($img->admin_logo);
            // }
                $admin_logo = $request->file('admin_logo');
                $name_gen = "afro". time() . '.' . $admin_logo->extension();
                $location               = public_path('uploads/theme/'.$name_gen);
                Image::make($admin_logo)->resize(40,40)->save($location);
                $admin_logo = 'uploads/theme/'.$name_gen;
        }

        if ($request->fav_icon) {

            // if ($img->fav_icon) {
            //      unlink($img->fav_icon);
            // }
                $fav_icon = $request->file('fav_icon');
                $name_gen = "afro". time() . '.' . $fav_icon->extension();
                $location               = public_path('uploads/theme/'.$name_gen);
                Image::make($fav_icon)->resize(90,90)->save($location);
                $fav_icon = 'uploads/theme/'.$name_gen;
        }

        $logo = ThemeLogo::findOrFail(1)->update([
            
            'header_logo'                   => $header_logo,
            'footer_logo'                   => $footer_logo,
            'admin_logo'                    => $admin_logo,
            'fav_icon'                      => $fav_icon,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function footer(){
        $data = ThemeFooter::Find(1);
        return  view('backend.pages.theme.footer',compact('data'));
    }
    public function footerUpdate(Request $request){
        $data = ThemeFooter::findOrFail(1)->update([
            
            'description'                   => $request->description,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function contact(){
        $data = ThemeContact::Find(1);
        return  view('backend.pages.theme.contact',compact('data'));
    }
    public function contactUpdate(Request $request){
        $data = ThemeContact::findOrFail(1)->update([
            
            'address'                       => $request->address,
            'phone'                         => $request->phone,
            'email'                         => $request->email,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function socialmedia(){
        $data = ThemeSocialmedia::Find(1);
        return  view('backend.pages.theme.socialmedia',compact('data'));
    }
    public function socialmediaUpdate(Request $request){
        $data = ThemeSocialmedia::findOrFail(1)->update([
            
            'facebook'                       => $request->facebook,
            'twitter'                         => $request->twitter,
            'instra'                         => $request->instra,
            'youtube'                         => $request->youtube,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }
}
