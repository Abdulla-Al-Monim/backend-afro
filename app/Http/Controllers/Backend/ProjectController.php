<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\Project;
use App\Models\Company;
use App\Models\Region;
use App\Models\ProjectCountry;
use App\Models\CompanyLocation;
Use Alert;
class ProjectController extends Controller
{
    public function productCompany(){
        $datas = Company::latest()->get();
        return view('backend.pages.theme.product.company',compact('datas'));

    }

    public function productCompanyStore(Request $request){
        
         $save_image             = null;
        if ($request->Icon) {
            $image = $request->file('Icon');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/about/'.$name_gen);
            Image::make($image)->resize(200,40)->save($location);
            $save_image = 'uploads/about/'.$name_gen;
        }
        $data = Company::insertGetId([
            'name'                         => $request->name,
            'address'                      => $request->address,
            'logo'                         => $save_image,
            'created_at'                   => Carbon::now(),
        ]);
        $location = CompanyLocation::insertGetId([
            'company_id'               => $data,
            'longitude'                => $request->longitude,
            'latitude'                 => $request->latitude,
            'created_at'               => Carbon::now(),
        ]);
        return redirect()->back();
    }
    public function productCompanyEdit($id){
        $data = Company::where('id',$id)->with('companyLocation')->first();
        return view('backend.pages.theme.product.company-edit',compact('data'));

    }
    public function productCompanyUpdate($id,Request $request){
        $data = Company::Find($id);
        $save_image             = $data->logo;
        if ($request->Icon) {
            $image = $request->file('Icon');
            $name_gen = "afro". time() . '.' . $image->extension();
            $location               = public_path('uploads/about/'.$name_gen);
            Image::make($image)->resize(200,40)->save($location);
            $save_image = 'uploads/about/'.$name_gen;
        }
        $data = Company::findOrFail($id)->update([
            'name'                          => $request->name,
            'logo'                          => $save_image,
            'updated_at'                    => Carbon::now(),
        ]);

        $location = CompanyLocation::where('company_id',$id)->first();
        $lo = CompanyLocation::findOrFail($location->id)->update([
            'longitude'                     => $request->longitude,
            'latitude'                      => $request->latitude,
            'updated_at'                    => Carbon::now(),
        ]);
       
        return redirect()->back();
    }
    
    public function companyDelete($id){
        $data = Company::findOrFail($id)->delete();
        $location = CompanyLocation::where('company_id',$id)->first();
        $location = CompanyLocation::findOrFail($location->id)->delete();
        return redirect()->back();
    }



    public function region(){
        $datas = ProjectCountry::latest()->get();
        return view('backend.pages.theme.product.region',compact('datas'));

    }

    public function productRegionStore(Request $request){
        
        $data = ProjectCountry::insertGetId([
            'name'                              => $request->name,
            'created_at'                        => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function regionEdit($id){
        $data = ProjectCountry::Find($id);
        return view('backend.pages.theme.product.region-edit',compact('data'));

    }

    public function productRegionUpdate($id,Request $request){

        
        $data = ProjectCountry::findOrFail($id)->update([
            'name'                              => $request->name,
            'updated_at'                        => Carbon::now(),
        ]);
        return redirect()->route('theme.project.region');
    }

    public function portfolioProject(){
        $datas = Project::latest()->with('company','region','contactCountry','indexReviewSlider')->get();
        return view('backend.pages.theme.product.project',compact('datas'));

    }

    public function portfolioProjectStore(Request $request){
        $save_image             = null;
        $save_icon              = null;
        $d_image                = null;
        // if ($request->icon) {
        //         $icon = $request->file('icon');
        //         $name_gen = "afro".  time() . '.' . $icon->extension();
        //         $location               = public_path('uploads/theme/'.$name_gen);
        //         Image::make($icon)->resize(90,90)->save($location);
        //         $save_icon = 'uploads/theme/'.$name_gen;
        // }
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/theme/'.$name_gen);
                Image::make($image)->resize(535,289)->save($location);
                $save_image = 'uploads/theme/'.$name_gen;
        }

        if ($request->d_image) {

            
                $image = $request->file('d_image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/theme/'.$name_gen);
                Image::make($image)->resize(2100,1094)->save($location);
                $d_image = 'uploads/theme/'.$name_gen;
        }

        $data = Project::insertGetId([
            
            'company_id'                    => $request->company_id,
            'contact_country_id'            => $request->contact_country_id,
            'index_review_slider_id'        => $request->index_review_slider_id,
            'location'                      => $request->location,
            'title'                         => $request->title,
            'client_name'                   => $request->client_name,
            'starting_date'                 => $request->starting_date,
            'end_date'                      => $request->end_date,
            'description'                   => $request->description,
            'key_achievement'               => $request->key_achievement,
            'image'                         => $save_image,
            'd_image'                       => $d_image,
            'created_at'                    => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function portfolioProjectEdit($id){
        $data = Project::where('id',$id)->with('region')->first();
        return view('backend.pages.theme.product.project-edit',compact('data'));

    }

    public function portfolioProjectUpdate($id,Request $request){
        $data = Project::Find($id);
        $save_image              = $data->image;
        $d_image                = $data->d_image;
        
        if ($request->image) {

            
                $image = $request->file('image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/theme/'.$name_gen);
                Image::make($image)->resize(535,289)->save($location);
                $save_image = 'uploads/theme/'.$name_gen;
        }

        if ($request->d_image) {

            
                $image = $request->file('d_image');
                $name_gen = "afro".  time() . '.' . $image->extension();
                $location               = public_path('uploads/theme/'.$name_gen);
                Image::make($image)->resize(2100,1094)->save($location);
                $d_image = 'uploads/theme/'.$name_gen;
        }

        $data = Project::findOrFail($id)->update([
            'contact_country_id'            => $request->contact_country_id,
            'company_id'                    => $request->company_id,
            'location'                      => $request->location,
            'title'                         => $request->title,
            'client_name'                   => $request->client_name,
            'starting_date'                 => $request->starting_date,
            'end_date'                      => $request->end_date,
            'description'                   => $request->description,
            'key_achievement'               => $request->key_achievement,
            
            'image'                         => $save_image,
            'd_image'                       => $d_image,
            'updated_at'                    => Carbon::now(),
        ]);
        toast('Update successfully','success');
        return redirect()->route('theme.porfolio.project');
    }
    public function portfolioProjectAjaxRegion($id){
        $data = Region::where('company_id',$id)->get();
        return response()->json($data);
    }

    public function portfolioProjectDelete($id){
        $data = Project::Find($id);
        
        // if ($data->image) {
        //     unlink($data->image);
        // }
        // if ($data->icon) {
        //     unlink($data->icon);
        // }
        $data->delete();
        return redirect()->back();
    }

}
