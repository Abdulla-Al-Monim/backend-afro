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
class ProductController extends Controller
{
    public function ProductCompany(){
        $datas = Company::latest()->get();
        return view('backend.pages.theme.product.company',compact('datas'));

    }

    public function ProductCompanyUpdate(Request $request){
        
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
}
