<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Cohensive\Embed\Facades\Embed;
use App\Models\AboutBanner;
use App\Models\AboutOverviewDo;
use App\Models\AboutOverviewAsset;
use App\Models\AboutOverviewCustomer;
use App\Models\AboutOverviewPeople;
use App\Models\AboutStrategy;
use App\Models\AboutBusinessmodelBanner;
use App\Models\AboutBusinessModelMarketOpportunity;
use App\Models\AboutBusinessOperation;
use App\Models\AboutBusinessStrategy;
use App\Models\AboutBusinessStakeHolder;
use App\Models\Leader;
use App\Models\AboutManagementTeam;
use App\Models\AboutApproachBanner;
use App\Models\AboutApproachIntegrity;
use App\Models\AboutApproachPartnership;
use App\Models\AboutApproachExcellence;
use App\Models\AboutGovernmanceBanner;
use App\Models\AboutGovernmancePolicie;
use App\Models\AboutReport;
use App\Models\PresentationReport;
use App\Models\GovermentRole;

class AboutController extends Controller
{
    public function banner(){
        $banner = AboutBanner::Find(1);
        return view('backend.pages.about.banner',compact('banner'));
    }

    public function bannerUpdate(Request $request){
        $img = AboutBanner::Find(1);
        $save_image             = $img->image;
        $save_video             = $img->video;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro".  "Banner". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(2100,1094)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        if ( $request->video ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('video');
                $fileName = time().'.'.$request->video->extension();
                $request->video->move(public_path('uploads/about/'), $fileName);
                $save_video             = 'uploads/about/' . $fileName;
            }
        $banner = AboutBanner::findOrFail(1)->update([
            'title'                 => $request->title,
            'default'               => $request->default,
            'image'                 => $save_image,
            'video'                 => $save_video,
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function do(){
        $do = AboutOverviewDo::Find(1);
        return view('backend.pages.about.overview.do',compact('do'));
    }

    public function doUpdate(Request $request){
       
        $do = AboutOverviewDo::findOrFail(1)->update([
            'heading'                                   => $request->heading,
            'title'                                     => $request->title,
            'description'                               => $request->description,
            'tenancy_title_one'                         => $request->tenancy_title_one,
            'tenancy_percentage_one'                    => $request->tenancy_percentage_one,
            'tenancy_title_two'                         => $request->tenancy_title_two,
            'tenancy_percentage_two'                    => $request->tenancy_percentage_two,
            'tenancy_title_three'                       => $request->tenancy_title_three,
            'tenancy_percentage_three'                  => $request->tenancy_percentage_three,
            'button_text'                               => $request->button_text,
            'button_link'                               => $request->button_link,
            'updated_at'                                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function assert(){
        $data = AboutOverviewAsset::Find(1);
        return view('backend.pages.about.overview.asset',compact('data'));
    }

    public function assetUpdate(Request $request){
       
        $data = AboutOverviewAsset::findOrFail(1)->update([
            'title'                                     => $request->title,
            'text'                                      => $request->text,
            'site_one'                                  => $request->site_one,
            'site_percentage_one'                       => $request->site_percentage_one,
            'site_two'                                  => $request->site_two,
            'site_percentage_two'                       => $request->site_percentage_two,
            'site_three'                                => $request->site_three,
            'site_percentage_three'                     => $request->site_percentage_three,
            'button_text'                               => $request->button_text,
            'button_link'                               => $request->button_link,
            'updated_at'                                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function customer(){
        $data = AboutOverviewCustomer::Find(1);
        return view('backend.pages.about.overview.customer',compact('data'));
    }

    public function customerUpdate(Request $request){
       
        $data = AboutOverviewCustomer::findOrFail(1)->update([
            'heading'                                               => $request->heading,
            'text'                                                  => $request->text,
            'title'                                                 => $request->title,
            'multinational_one'                                     => $request->multinational_one,
            'multinational_percentage_one'                          => $request->multinational_percentage_one,
            'multinational_two'                                     => $request->multinational_two,
            'multinational_percentage_two'                          => $request->multinational_percentage_two,
            'button_text'                                           => $request->button_text,
            'button_link'                                           => $request->button_link,
            'updated_at'                                            => Carbon::now(),
        ]);
        return redirect()->back();
    }


    

    public function people(){
        $data = AboutOverviewPeople::Find(1);
        return view('backend.pages.about.overview.people',compact('data'));
    }

    public function peopleUpdate(Request $request){
        $img = AboutOverviewPeople::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro".  "Banner". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(630,730)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        $data = AboutOverviewPeople::findOrFail(1)->update([
            'title'                         => $request->title,
            'description'                   => $request->description,
            'footer'                        => $request->footer,
            'image'                         => $save_image,
            'updated_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function strategy(){
        $data = AboutStrategy::Find(1);
        return view('backend.pages.about.strategy',compact('data'));
    }

    public function strategyUpdate(Request $request){
        $img = AboutStrategy::Find(1);
        $image_one             = $img->image_one;
        $image_two             = $img->image_two;
        if ($request->image_one) {

            // if ($img->image_one) {
            //      unlink($img->image_one);
            // }
                $image_one = $request->file('image_one');
                $name_gen = "afro". time() . '.' . $image_one->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image_one)->resize(860,410)->save($location);
                $image_one = 'uploads/about/'.$name_gen;
        }
        if ($request->image_two) {

            // if ($img->image_two) {
            //      unlink($img->image_two);
            // }
                $image_two = $request->file('image_two');
                $name_gen = "afro". time() . '.' . $image_two->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image_two)->resize(420,344)->save($location);
                $image_two = 'uploads/about/'.$name_gen;
        }
        $data = AboutStrategy::findOrFail(1)->update([
            'title_one'                         => $request->title_one,
            'description_one'                   => $request->description_one,
            'image_one'                         => $image_one,
            'title_two'                         => $request->title_two,
            'description_two'                   => $request->description_two,
            'image_two'                         => $image_two,
            'button_one_text'                   => $request->button_one_text,
            'button_link_one'                   => $request->button_link_one,
            'button_two_text'                   => $request->button_two_text,
            'button_link_two'                   => $request->button_link_two,
            'footer'                            => $request->footer,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function businessBanner(){
        $data = AboutBusinessmodelBanner::Find(1);
        return view('backend.pages.about.business.banner',compact('data'));
    }

    public function businessBannerUpdate(Request $request){
        $img = AboutBusinessmodelBanner::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro".  "Banner". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(960,400)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        $banner = AboutBusinessmodelBanner::findOrFail(1)->update([
            'description'                 => $request->description,
            'image'                 => $save_image,
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function businessMarket(){
        $datas = AboutBusinessModelMarketOpportunity::latest()->get();
        return view('backend.pages.about.business.market-opportunity',compact('datas'));

    }

    public function businessMarketStore(Request $request){
        
        $save_image             = null;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/about/'.$name_gen);
            Image::make($image)->resize(80,80)->save($location);
            $save_image = 'uploads/about/'.$name_gen;
        }
        $header = AboutBusinessModelMarketOpportunity::insertGetId([
            'title'                         => $request->title,
            'description'                   => $request->description,
            'image'                         => $save_image,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function businessMarketEdit($id){
        $data = AboutBusinessModelMarketOpportunity::Find($id);

        return view('backend.pages.about.business.market-opportunity-edit',compact('data'));

    }

    public function businessMarketUpdate($id,Request $request){
        $date = AboutBusinessModelMarketOpportunity::Find($id);
        $save_image             = $date->image;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/about/'.$name_gen);
            Image::make($image)->resize(80,80)->save($location);
            $save_image = 'uploads/about/'.$name_gen;
        }
        $header = AboutBusinessModelMarketOpportunity::findOrFail($id)->update([
            'title'                         => $request->title,
            'description'                   => $request->description,
            'image'                         => $save_image,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->route('about.business.market');
    }



    public function businessMarketDelete($id){
        $data = AboutBusinessModelMarketOpportunity::Find($id);
        
        // if ($data->image) {
        //     unlink($data->image);
        // }
        $data->delete();
        return redirect()->back();
    }


    public function businessOperation(){
        $datas = AboutBusinessOperation::latest()->get();
        return view('backend.pages.about.business.operation',compact('datas'));

    }

    public function businessOperationStore(Request $request){
        
        $save_image             = null;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/about/'.$name_gen);
            Image::make($image)->resize(781,333)->save($location);
            $save_image = 'uploads/about/'.$name_gen;
        }
        $header = AboutBusinessOperation::insertGetId([
            'title'                         => $request->title,
            'image'                         => $save_image,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function businessOperationEdit($id){
        $data = AboutBusinessOperation::Find($id);
        return view('backend.pages.about.business.operation-edit',compact('data'));

    }
    public function businessOperationUpdate($id,Request $request){
        $data = AboutBusinessOperation::Find($id);

        $save_image             = $data->image;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/about/'.$name_gen);
            Image::make($image)->resize(781,333)->save($location);
            $save_image = 'uploads/about/'.$name_gen;
        }
        $header = AboutBusinessOperation::findOrFail($id)->update([
            'title'                         => $request->title,
            'image'                         => $save_image,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->route('about.business.operation');
    }
    public function businessOperationDelete($id){
        $data = AboutBusinessOperation::Find($id);
        
        // if ($data->image) {
        //     unlink($data->image);
        // }
        $data->delete();
        return redirect()->back();
    }

    public function businessDriven(){
        $data = AboutBusinessStrategy::Find(1);
        return view('backend.pages.about.business.strategy',compact('data'));
    }

    public function businessDrivenBannerUpdate(Request $request){
        $img = AboutBusinessStrategy::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            /*if ($img->image) {
                 unlink($img->image);
            }*/
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(659,750)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        $banner = AboutBusinessStrategy::findOrFail(1)->update([
            'title'                 => $request->title,
            'image'                 => $save_image,
            'updated_at'            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    
    public function businessStakeholder(){
        $count = AboutBusinessStakeHolder::get()->count();
        $datas = AboutBusinessStakeHolder::latest()->get();
        
        return view('backend.pages.about.business.stakeholder',compact('datas','count'));

    }


    

    public function businessStakeholderEdit($id){
       
        $data = AboutBusinessStakeHolder::Find($id);
        
        return view('backend.pages.about.business.stakeholder-edit',compact('data'));

    }
    public function businessStakeholderStore(Request $request){
       
        $image             = null;
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(77,134)->save($location);
                $image = 'uploads/about/'.$name_gen;
        }
        
        $data = AboutBusinessStakeHolder::insertGetId([
            'title'                                 => $request->title,
            'text'                                  => $request->text,
            'description'                           => $request->description,
            'image'                                 => $image,
            'created_at'                            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function businessStakeholderUpdate($id,Request $request){
       $data = AboutBusinessStakeHolder::Find($id);
        $image             = $data->image;
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(77,134)->save($location);
                $image = 'uploads/about/'.$name_gen;
        }
        
        $data = AboutBusinessStakeHolder::findOrFail($id)->update([
            'title'                                 => $request->title,
            'text'                                  => $request->text,
            'description'                           => $request->description,
            'image'                                 => $image,
            'updated_at'                            => Carbon::now(),
        ]);
        return redirect()->route('about.business.stakeholder');
    }

    public function businessStakeholderDelete($id){
         $data = AboutBusinessStakeHolder::Find($id);
         // if ($data->image) {
         //         unlink($data->image);
         //    }
            $data->delete();
            return redirect()->back();
    }

    public function aboutLeader(){
        $datas = Leader::latest()->get();
        return view('backend.pages.about.leader',compact('datas'));
    }


    public function aboutLeaderStore(Request $request){
        
        $save_image             = null;
        $qr_image             = null;
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(300,350)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        if ($request->qr) {

            
                $image = $request->file('qr');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(100,100)->save($location);
                $qr_image = 'uploads/about/'.$name_gen;
        }
        $data = Leader::insertGetId([
            'name'                                      => $request->name,
            'designation'                               => $request->designation,
            'join_date'                                 => $request->join_date,
            'committe'                                  => $request->committe,
            'skill_xperience'                           => $request->skill_xperience,
            'other'                                     => $request->other,
            'appointment'                               => $request->appointment,
            'email'                                     => $request->email,
            'image'                                     => $save_image,
            'qr'                                        => $qr_image,
            'fb'                                        => $request->fb,
            'linkenin'                                  => $request->linkenin,
            'twitter'                                   => $request->twitter,
            'instra'                                    => $request->instra,
            'youtube'                                   => $request->youtube,
            'created_at'                                => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function aboutLeaderEdit($id){
        $data = Leader::Find($id);
        return view('backend.pages.about.leader-edit',compact('data'));
    }

    public function aboutLeaderUpdate($id,Request $request){
        $img = Leader::Find($id);
        $save_image             = $img->image;
        $qr_image             =  $img->qr;
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(300,350)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        if ($request->qr) {

            
                $image = $request->file('qr');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(100,100)->save($location);
                $qr_image = 'uploads/about/'.$name_gen;
        }
        $data = Leader::findOrFail($id)->update([
            'name'                                      => $request->name,
            'designation'                               => $request->designation,
            'join_date'                                 => $request->join_date,
            'committe'                                  => $request->committe,
            'skill_xperience'                           => $request->skill_xperience,
            'other'                                     => $request->other,
            'appointment'                               => $request->appointment,
            'email'                                     => $request->email,
            'image'                                     => $save_image,
            'qr'                                        => $qr_image,
            'fb'                                        => $request->fb,
            'linkenin'                                  => $request->linkenin,
            'twitter'                                   => $request->twitter,
            'instra'                                    => $request->instra,
            'youtube'                                   => $request->youtube,
            'created_at'                                => Carbon::now(),
        ]);
        return redirect()->route('about.leader');
    }
    public function aboutLeaderDelete($id){
        $data = Leader::Find($id);
        // if ($data->image) {
        //      unlink($data->image);
        // }
        $data->delete();
        return redirect()->back();
    }
    public function aboutManamgement(){
        $datas = AboutManagementTeam::latest()->get();
        return view('backend.pages.about.management',compact('datas'));
    }
    public function aboutManageStore(Request $request){
        
       
        $save_image             = null;
        $qr_image             =  null;
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(300,350)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        if ($request->qr) {

            
                $image = $request->file('qr');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(100,100)->save($location);
                $qr_image = 'uploads/about/'.$name_gen;
        }
        $data = AboutManagementTeam::insertGetId([
            'name'                                      => $request->name,
            'designation'                               => $request->designation,
            'join_date'                                 => $request->join_date,
            'committe'                                  => $request->committe,
            'skill_xperience'                           => $request->skill_xperience,
            'other'                                     => $request->other,
            'appointment'                               => $request->appointment,
            'email'                                     => $request->email,
            'image'                                     => $save_image,
            'qr'                                        => $qr_image,
            'fb'                                        => $request->fb,
            'linkenin'                                  => $request->linkenin,
            'twitter'                                   => $request->twitter,
            'instra'                                    => $request->instra,
            'youtube'                                   => $request->youtube,
            'created_at'                                => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function aboutManageEdit($id){
        $data = AboutManagementTeam::Find($id);
        return view('backend.pages.about.management-edit',compact('data'));
    }
    public function aboutManamgementUpdate($id,Request $request){
        $img = AboutManagementTeam::Find($id);
        $save_image             = $img->image;
        $qr_image             =  $img->qr;
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(300,350)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        if ($request->qr) {

            
                $image = $request->file('qr');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(100,100)->save($location);
                $qr_image = 'uploads/about/'.$name_gen;
        }
        $data = AboutManagementTeam::findOrFail($id)->update([
            'name'                                      => $request->name,
            'designation'                               => $request->designation,
            'join_date'                                 => $request->join_date,
            'committe'                                  => $request->committe,
            'skill_xperience'                           => $request->skill_xperience,
            'other'                                     => $request->other,
            'appointment'                               => $request->appointment,
            'email'                                     => $request->email,
            'image'                                     => $save_image,
            'qr'                                        => $qr_image,
            'fb'                                        => $request->fb,
            'linkenin'                                  => $request->linkenin,
            'twitter'                                   => $request->twitter,
            'instra'                                    => $request->instra,
            'youtube'                                   => $request->youtube,
            'created_at'                                => Carbon::now(),
        ]);
        return redirect()->route('about.management');
    }

    public function aboutManagementDelete($id){
        $data = AboutManagementTeam::Find($id);
        // if ($data->image) {
        //      unlink($data->image);
        // }
        $data->delete();
        return redirect()->back();
    }
    


    public function approachBanner(){
        $data = AboutApproachBanner::Find(1);
        return view('backend.pages.about.approach.banner',compact('data'));
    }

    public function approachBannerUpdate(Request $request){
        $img = AboutApproachBanner::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(960,450)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        $data = AboutApproachBanner::findOrFail(1)->update([
            'title'                                      => $request->title,
            'description'                               => $request->description,
            'image'                                     => $save_image,
            'updated_at'                                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function approacIntegrity(){
        $data = AboutApproachIntegrity::Find(1);
        return view('backend.pages.about.approach.integrity',compact('data'));
    }

    public function approachIntegrityUpdate(Request $request){
        $img = AboutApproachIntegrity::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(142,142)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        $data = AboutApproachIntegrity::findOrFail(1)->update([
            'title'                                             => $request->title,
            'heading'                                           => $request->heading,
            
            'description'                                       => $request->description,
            'image'                                             => $save_image,
            'updated_at'                                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function approacPartnership(){
        $data = AboutApproachPartnership::Find(1);
        return view('backend.pages.about.approach.partnership',compact('data'));
    }

    public function approachPartnershipUpdate(Request $request){
        $img = AboutApproachPartnership::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(142,142)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        $data = AboutApproachPartnership::findOrFail(1)->update([
            'title'                                             => $request->title,
            'heading'                                           => $request->heading,
            
            'description'                                       => $request->description,
            'image'                                             => $save_image,
            'updated_at'                                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function approacExcellence(){
        $data = AboutApproachExcellence::Find(1);
        return view('backend.pages.about.approach.excellence',compact('data'));
    }

    public function approachExcellenceUpdate(Request $request){
        $img = AboutApproachExcellence::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(142,142)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        $data = AboutApproachExcellence::findOrFail(1)->update([
            'title'                                             => $request->title,
            'heading'                                           => $request->heading,
            
            'description'                                       => $request->description,
            'image'                                             => $save_image,
            'updated_at'                                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function aboutGovermanceBanner(){
        $data = AboutGovernmanceBanner::Find(1);
        return view('backend.pages.about.governance.banner',compact('data'));
    }

    public function aboutGovermanceUpdate(Request $request){
        $img = AboutGovernmanceBanner::Find(1);
        $save_image             = $img->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(947,394)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        $data = AboutGovernmanceBanner::findOrFail(1)->update([
            'title'                                                     => $request->title,
            'description'                                               => $request->description,
            'button_text_one'                                           => $request->button_text_one,
            'button_link_one'                                           => $request->button_link_one,
            'button_text_two'                                           => $request->button_text_two,
            'button_link_two'                                           => $request->button_link_two,
            'button_text_three'                                         => $request->button_text_three,
            'button_link_three'                                         => $request->button_link_three,
            'button_text_four'                                          => $request->button_text_four,
            'button_link_four'                                          => $request->button_link_four,
            'image'                                                     => $save_image,
            'updated_at'                                                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function aboutGovermancePoliciesBanner(){
        $datas = AboutGovernmancePolicie::latest()->get();
        return view('backend.pages.about.governance.policies',compact('datas'));
    }

    public function aboutGovermancePoliciesStore(Request $request){
        
        $save_image             = null;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(50,45)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        
        $data = AboutGovernmancePolicie::insertGetId([
            'about'                     => $request->home,
            'title'                     => $request->title,
            'image'                     => $save_image,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();    
    }

    public function aboutGovermancePoliciesEdit($id){
        $data = AboutGovernmancePolicie::Find($id);
        return view('backend.pages.about.governance.policies-edit',compact('data'));
    }

    public function aboutGovermancePoliciesUpdate($id,Request $request){
        $data = AboutGovernmancePolicie::Find($id);
        $save_image             = $data->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(50,45)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        
        $data = AboutGovernmancePolicie::findOrFail($id)->update([
            'about'                     => $request->home,
            'title'                     => $request->title,
            'image'                     => $save_image,
            'updated_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }


    public function aboutGovermancePoliciesDelete($id){
        
        $data = AboutGovernmancePolicie::Find($id);
        $data->delete();
        $roles = GovermentRole::where('about_governmance_policie_id',$id)->get();
        if ($roles != null) {
            foreach($roles as $role){
                $d = GovermentRole::Find($role->id);
                $d->delete();
            }
        }
        return redirect()->back();
    }


    public function aboutPolicies($id){
        $p_id = $id;
        $datas = GovermentRole::where('about_governmance_policie_id',$id)->get();
        return view('backend.pages.about.governance.roles',compact('datas','p_id'));
    }

    public function aboutPoliciesStore(Request $request){

        $save_image             = null;
        $save_file             = null;
        if ($request->image) {
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(287,270)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        if ( $request->file ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('file');
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/about/'), $fileName);
                $save_file             = 'uploads/about/' . $fileName;
            }
        $data = GovermentRole::insertGetId([
            'about_governmance_policie_id'          => $request->about_governmance_policie_id,
            'heading'                               => $request->heading,
            'title'                                 => $request->title,
            'description'                           => $request->description,
            'image'                                 => $save_image,
            'file'                                  => $save_file,
            'created_at'                            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function aboutPoliciesUpdate($id,Request $request){
        $data = GovermentRole::Find($id);
        $save_image             = $data->image;
        $save_file             = $data->file;
        if ($request->image) {
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(287,270)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        if ( $request->file ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('file');
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/about/'), $fileName);
                $save_file             = 'uploads/about/' . $fileName;
            }
        $data = GovermentRole::findOrFail($id)->update([
           
            'heading'                               => $request->heading,
            'title'                                 => $request->title,
            'description'                           => $request->description,
            'image'                                 => $save_image,
            'file'                                  => $save_file,
            'updated_at'                            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function aboutPoliciesEdit($id){
        
        $data = GovermentRole::Find($id);
        return view('backend.pages.about.governance.roles-edit',compact('data'));
    }

    public function aboutPoliciesDelete($id){
        
        $data = GovermentRole::Find($id);
        $data->delete();
        return redirect()->back();
    }



    public function aboutReports(){
        $datas = AboutReport::latest()->get();
        return view('backend.pages.about.report.reports',compact('datas'));
    }

    public function aboutReportsEdit($id){
        $data = AboutReport::Find($id);
        return view('backend.pages.about.report.reports-edit',compact('data'));
    }


    public function aboutReportsStore(Request $request){

        $save_image             = null;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(50,45)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        
        $data = AboutReport::insertGetId([
            'about'                     => $request->home,
            'title'                     => $request->title,
            'image'                     => $save_image,
            'created_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function aboutReportsUpdate($id,Request $request){
        $data = AboutReport::Find($id);
        $save_image             = $data->image;
        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(50,45)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        
        $data = AboutReport::findOrFail($id)->update([
            'about'                     => $request->home,
            'title'                     => $request->title,
            'image'                     => $save_image,
            'updated_at'                => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function aboutReportsDelete($id){
        
        $data = AboutReport::Find($id);
        $data->delete();
        $roles = PresentationReport::where('about_report_id',$id)->get();
        if ($roles != null) {
            foreach($roles as $role){
                $d = PresentationReport::Find($role->id);
                $d->delete();
            }
        }
        return redirect()->back();
    }
    public function aboutPresentation($id){
        $p_id = $id;
        $datas = PresentationReport::where('about_report_id',$id)->get();
        return view('backend.pages.about.report.presentation',compact('datas','p_id'));
    }

    public function aboutPresentationStore(Request $request){

        $save_image             = null;
        $save_file             = null;
        if ($request->image) {
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(287,270)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        if ( $request->file ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('file');
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/about/'), $fileName);
                $save_file             = 'uploads/about/' . $fileName;
            }
        $data = PresentationReport::insertGetId([
            'about_report_id'                       => $request->about_report_id,
            'heading'                               => $request->heading,
            'title'                                 => $request->title,
            'description'                           => $request->description,
            'image'                                 => $save_image,
            'file'                                  => $save_file,
            'created_at'                            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function aboutPresentationUpdate($id,Request $request){
        $data = PresentationReport::Find($id);
        $save_image             = $data->image;
        $save_file             = $data->file;
        if ($request->image) {
                $image = $request->file('image');
                $name_gen = "afro". time() . '.' . $image->extension();
                $location               = public_path('uploads/about/'.$name_gen);
                Image::make($image)->resize(287,270)->save($location);
                $save_image = 'uploads/about/'.$name_gen;
        }
        if ( $request->file ) 
            {
                // if ($img->video) {
                //  unlink($img->video);
                // }
                $file                   = $request->file('file');
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/about/'), $fileName);
                $save_file             = 'uploads/about/' . $fileName;
            }
        $data = PresentationReport::findOrFail($id)->update([
           
            'heading'                               => $request->heading,
            'title'                                 => $request->title,
            'description'                           => $request->description,
            'image'                                 => $save_image,
            'file'                                  => $save_file,
            'updated_at'                            => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function aboutPresentationEdit($id){
        
        $data = PresentationReport::Find($id);
        return view('backend.pages.about.report.presentation-edit',compact('data'));
    }

    public function aboutPresentationDelete($id){
        
        $data = PresentationReport::Find($id);
        $data->delete();
        return redirect()->back();
    }

}
