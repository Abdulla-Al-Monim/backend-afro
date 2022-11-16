<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Home;
use App\Models\IndexHeader;
use App\Models\IndexSubscribe;
use App\Models\Contact;
use App\Models\About;
use App\Models\WhereWeWork;
use App\Models\Solution;
use App\Models\Partner;
use App\Models\Sustainability;
use App\Models\Theme;
use App\Models\Project;
use App\Models\Company;
use App\Models\Region;
use App\Models\ServiceSlider;
use App\Models\Magazine;
use App\Models\Media;
use App\Models\MediaCenterLibrary;
use App\Models\MediaCenterVideoLibrary;
use App\Models\MediaCenter;
use App\Models\IndexReviewSlider;
use App\Models\ContactCountry;
use App\Models\PresentationReport;
use App\Models\GovermentRole;
use App\Models\KeyMaterial;
use App\Models\Cv;
use File;
use Intervention\Image\Facades\Image;
class IndexController extends Controller
{

    public function home(){
        $home = Home::where('id',1)->with('indexAcademy','indexApproach','indexHeaderButton','indexHeader','IndexPartnerSliders','indexReview','indexReviewSliders','indexService','serviceSlider','serviceSlider.serviceCountry','indexSolution','indexAward','magazine','indexPartner')->first();
        return response()->json([
            'home' => $home,
            'success' => true,
            
        ], 201);
    }
    public function banner(){
        $home = IndexHeader::where('id',1)->first();
        return response()->json([
            'banner' => $home,
            'success' => true,
            
        ], 201);
    }
    public function service($id){
        $service = ServiceSlider::where('id',$id)->with('serviceCountry')->first();
        return response()->json([
            'service' => $service,
            'success' => true,
            
        ], 201);
    }
    public function about(){
        $about = About::where('id',1)->with('aboutApproachBanner','aboutApproachIntegrity','aboutApproachExcellence','aboutApproachPartnership','aboutBanner','aboutBusinessmodelBanner','aboutBusinessModelMarketOpportunity','aboutBusinessOperation','aboutBusinessStakeHolder','aboutBusinessStrategy','aboutGovernmanceBanner','aboutGovernmancePolicie','aboutGovernmancePolicie.govermentRole','aboutManagementTeam','aboutOverviewAsset','aboutOverviewCustomer','aboutOverviewDo','aboutOverviewPeople','aboutReport','aboutReport.presentationReport','aboutStrategy','leader')->first();
        return response()->json([
            'about' => $about,
            'success' => true,
            
        ], 201);
    }

    public function where(){
        $where = WhereWeWork::where('id',1)->with('whereWorkBanner','whereWorkKps','whereWorkOverview','whereWorkVideo')->first();
        return response()->json([
            'where' => $where,
            'success' => true,
            
        ], 201);
    }
    public function solution(){
        $solution = Solution::where('id',1)->with('solutionBanner','solutionProduct','SolutionProductSlider','solutionBuild','solutionColocation','solutionInBuildingSolution','solutionSale','solutionService')->first();
        return response()->json([
            'solution' => $solution,
            'success' => true,
            
        ], 201);
    }
    public function partner(){
        $partner = Partner::where('id',1)->with('partnerBanner','partnerCommunity','partnerCustomer','partnerEnvironment','partnerInvestor','partnerWorkforce')->first();
        return response()->json([
            'partner' => $partner,
            'success' => true,
            
        ], 201);
    }

    public function sustainability(){
        $sustainability = Sustainability::where('id',1)->with('sustainabilityBanner','sustainabilityDriving','sustainabilityGovernance','sustainabilityImage','sustainabilityMaterial','sustainabilityMaterial.keyMaterial','sustainabilityProposition','sustainabilitySustainable')->first();
        return response()->json([
            'sustainability' => $sustainability,
            'success' => true,
            
        ], 201);
    }

    public function theme(){
        $theme = Theme::where('id',1)->with('themeContact','themeFooter','themeLogo','themeSocialmedia')->first();
        return response()->json([
            'theme' => $theme,
            'success' => true,
            
        ], 201);
    }
    public function newsletter(Request $request){
        $subscribe = IndexSubscribe::insertGetId([
            'email'                     => $request->email,
            'ip'                        => $request->ip,
            'created_at'                => Carbon::now(),
        ]);
        return response()->json([
            'subscribe' => $subscribe,
            'success' => true,
            
        ], 201);
    }


    public function contact(Request $request){
        $subscribe = Contact::insertGetId([
            'name'                      => $request->name,
            'email'                     => $request->email,
            'contact_county'            => $request->contact_county,
            'subject'                   => $request->subject,
            'phone'                     => $request->phone,
            'message'                   => $request->message,
            'created_at'                => Carbon::now(),
        ]);
        return response()->json([
            'contact' => $subscribe,
            'success' => true,
            
        ], 201);
    }
    public function allCompany(){
        $allCompany = Company::latest()->with('companyLocation')->get();
        return response()->json([
            'allCompany' => $allCompany,
            'success' => true,
            
        ], 201);
    }

    public function allRegin($id = null){
        // $com = Company::orderBy('id','asc')->take(1)->first();
        if ($id == NULL) {
            $com = Company::orderBy('id','asc')->take(1)->first();
            $region = Region::latest()->where('company_id',$com->id)->with(['project','project.region','project.company'])->get();
            return response()->json([
                'region' => $region,
                'success' => true,
                
            ], 201);
        }
        else{

            $region = Region::latest()->where('company_id',$id)->with(['project','project.region','project.company'])->get();
            return response()->json([
                'region' => $region,
                'success' => true,
                
            ], 201);
        }
        
    }


    public function projectDetails($id){
        $project = Project::where('id',$id)->with('region','company')->first();
        return response()->json([
                'project' => $project,
                'success' => true,
                
            ], 201);
    }
    public function allProject($id = null){
        if ($id == NULL) {
            $project = Project::with('region','company')->get();
            return response()->json([
                'projects' => $project,
                'success' => true,
                
            ], 201);
        }
        else{
                $project = Project::where('company_id',$id)->with('region','company')->get();
                    return response()->json([
                    'projects' => $project,
                    'success' => true,
                
                ], 201);
            
            }
    }
    public function magazine(){
        $magazine = Magazine::latest()->get();
        return response()->json([
            'magazine' => $magazine,
            'success' => true,
            
        ], 201);
    }
    public function magazineDetails($id){
        $magazine = Magazine::where('id',$id)->first();
        return response()->json([
            'magazine' => $magazine,
            'success' => true,
            
        ], 201);
    }

    public function media($year = null){
        if ($year != null) {
            $medias = Media::latest()->where('date','like','%'.$year.'%')->get();
            return response()->json([
            'medias' => $medias,
            'success' => true,
            
        ], 201);
        }else{
            $medias = Media::latest()->get();
                return response()->json([
                    'medias' => $medias,
                    'success' => true,
                    
            ], 201);
        }
        
    }
    public function mediaDetails($id){
        $media = Media::where('id',$id)->first();
        return response()->json([
            'media' => $media,
            'success' => true,
            
        ], 201);
    }

    public function libraryDownload($id){
        $media = MediaCenterLibrary::where('id',$id)->first();
        return response()->download(public_path($media->file));
    }

    public function libraryVideoDownload($id){
        $media = MediaCenterVideoLibrary::where('id',$id)->first();
        return response()->download(public_path($media->video));
    }
    public function serviceSliderDetails($id){
        $service = ServiceSlider::where('id',$id)->with('serviceCountry')->first();
        return response()->json([
            'service' => $service,
            'success' => true,
            
        ], 201);
    }

    public function mediaCenter(){
        $mediaCenter = MediaCenter::where('id',1)->with('mediaCenterBanner','mediaCenterLibrary','mediaCenterVideoLibrary','media')->first();
        return response()->json([
            'mediaCenter' => $mediaCenter,
            'success' => true,
            
        ], 201);
    }

    public function reviews(){
        $reviews = IndexReviewSlider::latest()->get();
        return response()->json([
            'reviews' => $reviews,
            'success' => true,
            
        ], 201);
    }

    public function allContactCountry(){
        $countries = ContactCountry::latest()->get();
        return response()->json([
            'countries' => $countries,
            'success' => true,
            
        ], 201);

    }
    public function aboutPresentationDownload($id){
        $file = PresentationReport::where('id',$id)->first();
        return response()->download(public_path($file->file));
    }
    public function aboutGovernmentReportDownload($id){
        $file = GovermentRole::where('id',$id)->first();
        return response()->download(public_path($file->file));
    }
    public function sustainabilityKeymaterialDownload($id){
        $file = KeyMaterial::where('id',$id)->first();
        return response()->download(public_path($file->file));
    }
    public function contactCountry($id){
        $country = ContactCountry::where('id',$id)->first();
        return response()->json([
            'country' => $country,
            'success' => true,
            
        ], 201);
    }
    
    public function serviceSlider(){
        $sliders = ServiceSlider::latest()->get();
        return response()->json([
            'sliders' => $sliders,
            'success' => true,
            
        ], 201);
    }

    public function reviewProject($id){
        $projects = Project::latest()->where('index_review_slider_id',$id)->with('contactCountry','indexReviewSlider')->get();
        return response()->json([
            'projects' => $projects,
            'success' => true,
            
        ], 201);
    }

    public function countryProject($id){
        $projects = Project::latest()->where('contact_country_id',$id)->with('contactCountry','indexReviewSlider')->get();
        return response()->json([
            'projects' => $projects,
            'success' => true,
            
        ], 201);
    }

    public function cvStore(Request $request){
        $save_file = null;
        if ( $request->file ) 
            {
                
                $file                   = $request->file('file');
                $fileName = time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/cv/'), $fileName);
                $save_file             = 'uploads/cv/' . $fileName;
            }
        $data = Cv::insertGetId([
            'f_name'                => $request->f_name,
            'l_name'                => $request->l_name,
            'email'                 => $request->email,
            'phone_no'              => $request->phone_no,
            'b_date'                => $request->b_date,
            'about_us'              => $request->about_us,
            'b_date'                => $request->b_date,
            'file'                  => $save_file,
            'created_at'            => Carbon::now(),
        ]);

        return response()->json([
            'data' => $data,
            'success' => true,
            
        ], 201);
    }
}
