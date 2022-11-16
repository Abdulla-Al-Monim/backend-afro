<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\ThemeController;
use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\WhereWorkController;
use App\Http\Controllers\Backend\SolutionController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\SustainabilityController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::get('/',[AuthenticatedSessionController::class,'create'])->name('user.login');


Route::group(['prefix'=>'admin','middleware' =>['admin','auth']], function(){
   Route::get('Dashboard',[IndexController::class,'home'])->name('home');
    Route::group(['prefix'=>'theme'],function(){
        Route::get('logo',[ThemeController::class,'logo'])->name('theme.logo');
        Route::post('logo-update',[ThemeController::class,'logoUpdate'])->name('theme.logo.update');
        Route::get('footer',[ThemeController::class,'footer'])->name('theme.footer');
        Route::post('footer-update',[ThemeController::class,'footerUpdate'])->name('theme.footer.update');
        Route::get('footer-contact',[ThemeController::class,'contact'])->name('theme.contact');
        Route::post('footer-contact-update',[ThemeController::class,'contactUpdate'])->name('theme.contact.update');
        Route::get('social-media',[ThemeController::class,'socialmedia'])->name('theme.social');
        Route::post('social-media-update',[ThemeController::class,'socialmediaUpdate'])->name('theme.social.update');

        Route::get('media-center',[MediaController::class,'media'])->name('theme.media');
        Route::get('media-center-delete/{id}',[MediaController::class,'mediaDelete'])->name('theme.media.delete');
        Route::post('media-store',[MediaController::class,'mediaStore'])->name('theme.social.store');

        Route::group(['prefix'=>'media-center'],function(){
            Route::get('banner',[MediaController::class,'MediaBanner'])->name('media.banner');
            Route::post('banner-update',[MediaController::class,'MediaBannerUpdate'])->name('media.banner.update');

            Route::get('library',[MediaController::class,'mediaLibrary'])->name('media.library');
            Route::get('library-edit/{id}',[MediaController::class,'mediaLibraryEdit'])->name('media.library.edit');
            Route::get('library-delete/{id}',[MediaController::class,'mediaLibraryDelete'])->name('media.library.delete');
            Route::post('library-store',[MediaController::class,'mediaLibraryStore'])->name('media.library.store');
            Route::post('library-update/{id}',[MediaController::class,'mediaLibraryUpdate'])->name('media.library.update');

            Route::get('video-library',[MediaController::class,'mediaVideoLibrary'])->name('media.video.library');
            Route::get('video-library-edit/{id}',[MediaController::class,'mediaVideoLibraryEdit'])->name('media.video.library.edit');
            Route::get('video-library-delete/{id}',[MediaController::class,'mediaVideoLibraryDelete'])->name('media.video.library.delete');
            Route::post('video-library-store',[MediaController::class,'mediaVideoLibraryStore'])->name('media.video.library.store');
            Route::post('video-library-update/{id}',[MediaController::class,'mediaVideoLibraryUpdate'])->name('media.video.library.update');

            Route::get('media',[MediaController::class,'media'])->name('media');
            Route::get('media-edit/{id}',[MediaController::class,'mediaEdit'])->name('media.edit');
            Route::get('media-delete/{id}',[MediaController::class,'mediaDelete'])->name('media.delete');
            Route::post('media-store',[MediaController::class,'mediaStore'])->name('media.store');
            Route::post('media-update/{id}',[MediaController::class,'mediaUpdate'])->name('media.update');
            
            
        });

        Route::group(['prefix'=>'contact'],function(){
            Route::get('country',[ContactController::class,'country'])->name('contact.country');
            Route::post('country-store',[ContactController::class,'countryStore'])->name('contact.country.store');
            Route::get('country-edit/{id}',[ContactController::class,'countryEdit'])->name('contact.country.edit');
            Route::get('country-delete/{id}',[ContactController::class,'countryDelete'])->name('contact.country.delete');
            Route::post('country-update/{id}',[ContactController::class,'countryUpdate'])->name('contact.country.update');
            Route::get('country-delete/{id}',[ContactController::class,'countryDelete'])->name('contact.country.delete');
        });
        
        
        
           

        Route::group(['prefix'=>'project'],function(){
            Route::get('company',[ProjectController::class,'productCompany'])->name('theme.project.company');
            Route::get('company-delete/{id}',[ProjectController::class,'companyDelete'])->name('theme.project.company.delete');
            Route::get('company-edit/{id}',[ProjectController::class,'productCompanyEdit'])->name('theme.project.company.edit');
            Route::post('company-store',[ProjectController::class,'productCompanyStore'])->name('theme.project.community.store');
            Route::post('company-update/{id}',[ProjectController::class,'productCompanyUpdate'])->name('theme.project.community.update');
            Route::get('country',[ProjectController::class,'region'])->name('theme.project.region');
            Route::get('country-edit/{id}',[ProjectController::class,'regionEdit'])->name('theme.project.region.edit');
            Route::post('country-store',[ProjectController::class,'productRegionStore'])->name('theme.project.region.store');
            Route::post('country-update/{id}',[ProjectController::class,'productRegionUpdate'])->name('theme.project.region.update');

            Route::get('portfolio',[ProjectController::class,'portfolioProject'])->name('theme.porfolio.project');
            Route::get('portfolio-edit/{id}',[ProjectController::class,'portfolioProjectEdit'])->name('theme.porfolio.project.edit');
            Route::get('region-ajax/{id}',[ProjectController::class,'portfolioProjectAjaxRegion']);
            Route::get('country-delete/{id}',[ProjectController::class,'portfolioProjectDelete'])->name('theme.porfolio.project.delete');
            Route::post('portfolio-store',[ProjectController::class,'portfolioProjectStore'])->name('theme.porfolio.project.store');
            Route::post('portfolio-update/{id}',[ProjectController::class,'portfolioProjectUpdate'])->name('theme.porfolio.project.update');
            
        });
    });

    Route::group(['prefix'=>'home'],function(){

        Route::get('header',[IndexController::class,'header'])->name('index.header');
        Route::post('header/update',[IndexController::class,'headerUpdate'])->name('index.header.update');
        Route::get('header-button',[IndexController::class,'headerButton'])->name('index.header.buttton');
        Route::post('header-button/update',[IndexController::class,'headerButtonUpdate'])->name('index.header.button.update');
        Route::get('solution',[IndexController::class,'solution'])->name('index.solution');
        Route::post('solition/update',[IndexController::class,'solutionUpdate'])->name('index.solution.update');
        Route::get('servie',[IndexController::class,'service'])->name('index.service');
        Route::post('servie/update',[IndexController::class,'servieUpdate'])->name('index.servie.update');
        Route::get('service-slider',[IndexController::class,'serviceSlider'])->name('index.service.slider');
        Route::post('service-slider/add',[IndexController::class,'serviceSliderAdd'])->name('index.service.slider.add');
        Route::get('service-edit/{id}',[IndexController::class,'serviceSliderEdit'])->name('index.service.slider.edit');
        Route::post('service-update/{id}',[IndexController::class,'serviceSliderUpdate'])->name('index.service.slider.update');
        Route::get('service-slider-delete/{id}',[IndexController::class,'serviceSliderDelete'])->name('index.service.slider.delete');
        Route::get('approach',[IndexController::class,'approach'])->name('index.approach');
        Route::post('approach-update',[IndexController::class,'approachUpdate'])->name('index.approach.update');
        Route::get('review',[IndexController::class,'review'])->name('index.review');
        Route::post('review-update',[IndexController::class,'revireUpdate'])->name('index.review.update');
        Route::get('review-slider',[IndexController::class,'reviewSlider'])->name('index.review.slider');
        Route::get('review-slider-edit/{id}',[IndexController::class,'reviewSliderEdit'])->name('index.review.slider.edit');
        Route::get('review-slider-delete/{id}',[IndexController::class,'reviewSliderDelete'])->name('index.review.slider.delete');
        Route::post('review-slider-add',[IndexController::class,'reviewSliderAdd'])->name('index.review.slider.add');
        Route::post('review-slider-update/{id}',[IndexController::class,'reviewSliderUpdate'])->name('index.review.slider.update');
        Route::get('academy',[IndexController::class,'academy'])->name('index.academy');
        Route::post('academy-update',[IndexController::class,'academyUpdate'])->name('index.academy.update');
        Route::get('partner',[IndexController::class,'partner'])->name('index.partner');
        Route::post('partner-update',[IndexController::class,'partnerUpdate'])->name('index.partner.update');

        Route::get('award',[IndexController::class,'award'])->name('index.award');
        Route::get('edit/{id}',[IndexController::class,'awardEdit'])->name('index.award.edit');
        Route::post('award-add',[IndexController::class,'awardStore'])->name('index.award.store');
        Route::post('award-update/{id}',[IndexController::class,'awardUpdate'])->name('index.award.update');

        Route::get('magazine',[IndexController::class,'magazine'])->name('index.magazine');
        Route::get('magazine-edit/{id}',[IndexController::class,'magazineEdit'])->name('index.magazine.edit');
        Route::post('magazine-update/{id}',[IndexController::class,'magazineUpdate'])->name('index.magazine.update');
        Route::get('magazine-delete/{id}',[IndexController::class,'magazineDelete'])->name('index.magazine.delete');
        Route::post('magazine-store',[IndexController::class,'magazineStore'])->name('index.magazine.store');
    });

    Route::group(['prefix'=>'about'],function(){

        Route::get('banner',[AboutController::class,'banner'])->name('about.banner');
        Route::post('banner-update',[AboutController::class,'bannerUpdate'])->name('about.banner.update');

        Route::group(['prefix'=>'overview'],function(){
            Route::get('what-we-do',[AboutController::class,'do'])->name('about.do');
            Route::post('what-we-do-update',[AboutController::class,'doUpdate'])->name('about.do.update');

            Route::get('our-asset',[AboutController::class,'assert'])->name('about.assert');
            Route::post('our-asset-update',[AboutController::class,'assetUpdate'])->name('about.assert.update');

            Route::get('our-customer',[AboutController::class,'customer'])->name('about.customer');
            Route::post('our-customer-update',[AboutController::class,'customerUpdate'])->name('about.customer.update');

            Route::get('our-people',[AboutController::class,'people'])->name('about.people');
            Route::post('our-people',[AboutController::class,'peopleUpdate'])->name('about.people.update');

        });

        Route::get('strategy',[AboutController::class,'strategy'])->name('about.strategy');
        Route::post('strategy-update',[AboutController::class,'strategyUpdate'])->name('about.strategy.update');

        Route::group(['prefix'=>'business-model'],function(){
            Route::get('banner',[AboutController::class,'businessBanner'])->name('about.business.banner');
            Route::post('banner-update',[AboutController::class,'businessBannerUpdate'])->name('about.business.update');

            Route::get('our-strengths-and-market-opportunities',[AboutController::class,'businessMarket'])->name('about.business.market');
            Route::post('our-strengths-and-market-opportunities-store',[AboutController::class,'businessMarketStore'])->name('about.business.market.store');
            Route::post('our-strengths-and-market-opportunities-update/{id}',[AboutController::class,'businessMarketUpdate'])->name('about.business.market.update');
            Route::get('our-strengths-and-market-opportunities-edit/{id}',[AboutController::class,'businessMarketEdit'])->name('about.business.market.edit');
            Route::get('our-strengths-and-market-opportunities-delete/{id}',[AboutController::class,'businessMarketDelete'])->name('about.business.market.delete');

            Route::get('our-operation-platform',[AboutController::class,'businessOperation'])->name('about.business.operation');
            Route::get('our-operation-platform-edit/{id}',[AboutController::class,'businessOperationEdit'])->name('about.business.operation.edit');
            Route::post('our-operation-platform-store',[AboutController::class,'businessOperationStore'])->name('about.business.operation.store');
            Route::post('our-operation-platform-update/{id}',[AboutController::class,'businessOperationUpdate'])->name('about.business.operation.update');
            Route::get('our-operation-platform-delete/{id}',[AboutController::class,'businessOperationDelete'])->name('about.business.operation.delete');

            Route::get('driven-by-our-sustainable-business-strategy',[AboutController::class,'businessDriven'])->name('about.business.driven');
            Route::post('driven-by-our-sustainable-business-strategy-update',[AboutController::class,'businessDrivenBannerUpdate'])->name('about.driven.update');
            
            Route::get('creating-value-for-our-stakeholders',[AboutController::class,'businessStakeholder'])->name('about.business.stakeholder');
            Route::get('creating-value-for-our-stakeholders-edit/{id}',[AboutController::class,'businessStakeholderEdit'])->name('about.business.stakeholder.edit');

            Route::get('creating-value-for-our-stakeholders-delete/{id}',[AboutController::class,'businessStakeholderDelete'])->name('about.business.stakeholder.delete');
            Route::post('creating-value-for-our-stakeholders-update/{id}',[AboutController::class,'businessStakeholderUpdate'])->name('about.stakeholder.update');
            Route::post('creating-value-for-our-stakeholders-store',[AboutController::class,'businessStakeholderStore'])->name('about.stakeholder.store');

        });

        Route::get('leader',[AboutController::class,'aboutLeader'])->name('about.leader');
        Route::get('leader-edit/{id}',[AboutController::class,'aboutLeaderEdit'])->name('about.leader.edit');
        Route::post('leader-update/{id}',[AboutController::class,'aboutLeaderUpdate'])->name('about.leader.update');
        Route::get('leader-delete/{id}',[AboutController::class,'aboutLeaderDelete'])->name('about.leader.delete');
        Route::post('leader-store',[AboutController::class,'aboutLeaderStore'])->name('about.leader.store');
        Route::get('leader-delete/{id}',[AboutController::class,'aboutLeaderDelete'])->name('about.leader.delete');

        Route::get('management-team',[AboutController::class,'aboutManamgement'])->name('about.management');
        Route::get('management-team-edit/{id}',[AboutController::class,'aboutManageEdit'])->name('about.management.edit');
        Route::get('management-team-delete/{id}',[AboutController::class,'aboutManagementDelete'])->name('about.management.delete');
        Route::post('management-team-store',[AboutController::class,'aboutManageStore'])->name('about.management.store');
        Route::post('management-team-update/{id}',[AboutController::class,'aboutManamgementUpdate'])->name('about.management.update');

        Route::group(['prefix'=>'our-value-and-approach'],function(){
            Route::get('banner',[AboutController::class,'approachBanner'])->name('about.approach.banner');
            Route::post('banner-update',[AboutController::class,'approachBannerUpdate'])->name('about.approach.banner.update');

            Route::get('integrity',[AboutController::class,'approacIntegrity'])->name('about.approach.integrity');
            Route::post('integrity-update',[AboutController::class,'approachIntegrityUpdate'])->name('about.approach.integrity.update');

            Route::get('partnership',[AboutController::class,'approacPartnership'])->name('about.approach.partnership');
            Route::post('partnership-update',[AboutController::class,'approachPartnershipUpdate'])->name('about.approach.partnership.update');

            Route::get('excellence',[AboutController::class,'approacExcellence'])->name('about.approach.excellence');
            Route::post('excellence-update',[AboutController::class,'approachExcellenceUpdate'])->name('about.approach.excellence.update');

        });


        Route::group(['prefix'=>'Governance-&-Policies'],function(){
            Route::get('banner',[AboutController::class,'aboutGovermanceBanner'])->name('about.govermance.banner');
            Route::post('banner-update',[AboutController::class,'aboutGovermanceUpdate'])->name('about.govermance.banner.update');

            Route::get('governance',[AboutController::class,'aboutGovermancePoliciesBanner'])->name('about.govermance.policies');
            Route::get('governance-edit/{id}',[AboutController::class,'aboutGovermancePoliciesEdit'])->name('about.govermance.policies.edit');
            Route::get('governance-delete/{id}',[AboutController::class,'aboutGovermancePoliciesDelete'])->name('about.govermance.policies.delete');
            Route::post('governance-store',[AboutController::class,'aboutGovermancePoliciesStore'])->name('about.govermance.policies.store');
            Route::post('governance-update/{id}',[AboutController::class,'aboutGovermancePoliciesUpdate'])->name('about.govermance.policies.update');

            Route::get('policies/{id}',[AboutController::class,'aboutPolicies'])->name('about.policies');
            Route::get('policies-edit/{id}',[AboutController::class,'aboutPoliciesEdit'])->name('about.policies.edit');
            Route::get('policies-delete/{id}',[AboutController::class,'aboutPoliciesDelete'])->name('about.policies.delete');
            Route::post('policies-store',[AboutController::class,'aboutPoliciesStore'])->name('about.policies.store');
            Route::post('policies-update/{id}',[AboutController::class,'aboutPoliciesUpdate'])->name('about.policies.update');

            Route::get('presentation-&-reports',[AboutController::class,'aboutReports'])->name('about.reports');
            Route::get('presentation-&-reports-delete/{id}',[AboutController::class,'aboutReportsDelete'])->name('about.reports.delete');
            Route::get('presentation-&-reports-edit/{id}',[AboutController::class,'aboutReportsEdit'])->name('about.reports.edit');
            Route::post('presentation-&-reports-store',[AboutController::class,'aboutReportsStore'])->name('about.reports.store');
            Route::post('presentation-&-reports-update/{id}',[AboutController::class,'aboutReportsUpdate'])->name('about.reports.update');

            Route::get('presentation/{id}',[AboutController::class,'aboutPresentation'])->name('about.presentation');
            Route::get('presentation-edit/{id}',[AboutController::class,'aboutPresentationEdit'])->name('about.presentation.edit');
            Route::get('presentation-delete/{id}',[AboutController::class,'aboutPresentationDelete'])->name('about.presentation.delete');
            Route::post('presentation-store',[AboutController::class,'aboutPresentationStore'])->name('about.presentation.store');
            Route::post('presentation-update/{id}',[AboutController::class,'aboutPresentationUpdate'])->name('about.presentation.update');

        });

    });


    Route::group(['prefix'=>'where-we-work'],function(){

        Route::get('banner',[WhereWorkController::class,'banner'])->name('where.banner');
        Route::post('banner-update',[WhereWorkController::class,'bannerUpdate'])->name('where.banner.update');
        Route::get('video',[WhereWorkController::class,'video'])->name('where.video');
        Route::post('video-update',[WhereWorkController::class,'videoUpdate'])->name('where.video.update');
        Route::get('over-view',[WhereWorkController::class,'overview'])->name('where.overview');
        Route::post('over-view-update',[WhereWorkController::class,'overviewUpdate'])->name('where.overview.update');
        Route::get('KPIs',[WhereWorkController::class,'kpis'])->name('where.kpis');
        Route::get('KPIs-edit/{id}',[WhereWorkController::class,'kpisEdit'])->name('where.kpis.edit');
        Route::post('KPIs-update/{id}',[WhereWorkController::class,'kpisUpdate'])->name('where.kpis.update');
        Route::post('KPIs-store',[WhereWorkController::class,'kpisStore'])->name('where.kpis.store');
        Route::get('KPIs-delete/{id}',[WhereWorkController::class,'kpisDelete'])->name('where.kpis.delete');
        
    });

    Route::group(['prefix'=>'solution'],function(){

        Route::get('banner',[SolutionController::class,'banner'])->name('solution.banner');
        Route::post('banner-update',[SolutionController::class,'bannerUpdate'])->name('solution.banner.update');
        Route::get('colocation',[SolutionController::class,'colocation'])->name('solution.colocation');
        Route::post('colocation-update',[SolutionController::class,'colocationUpdate'])->name('solution.colocation.update');

        Route::get('build-to-suit',[SolutionController::class,'build'])->name('solution.build');
        Route::post('build-to-suit-update',[SolutionController::class,'buildUpdate'])->name('solution.build.update');

        Route::get('sale-and-leaseback',[SolutionController::class,'sale'])->name('solution.sale');
        Route::post('sale-and-leaseback-update',[SolutionController::class,'saleUpdate'])->name('solution.sale.update');

        Route::get('managed-services',[SolutionController::class,'services'])->name('solution.services');
        Route::post('managed-services-update',[SolutionController::class,'servicesUpdate'])->name('solution.services.update');

        Route::get('in-building-solutions',[SolutionController::class,'solutionInBuildingSolution'])->name('solution.solutionInBuildingSolution');
        Route::post('in-building-solutions-update',[SolutionController::class,'solutionInBuildingSolutionUpdate'])->name('solution.solutionInBuildingSolution.update');

        Route::get('products',[SolutionController::class,'solutionProduct'])->name('solution.product');
        Route::post('products-update',[SolutionController::class,'solutionProductUpdate'])->name('solution.product.update');

        Route::get('product',[SolutionController::class,'solutionPr'])->name('solution.pr');
        Route::get('product-edit/{id}',[SolutionController::class,'solutionPrEdit'])->name('solution.pr.edit');
        Route::post('product-update/{id}',[SolutionController::class,'solutionPrUpdate'])->name('solution.pr.update');
        Route::get('product-delete/{id}',[SolutionController::class,'solutionPrDl'])->name('solution.pr.dl');
        Route::post('product-store',[SolutionController::class,'solutionPrStore'])->name('solution.pr.store');
    });

    Route::group(['prefix'=>'partners'],function(){

        Route::get('banner',[PartnerController::class,'partnerBanner'])->name('partner.banner');
        Route::post('banner-update',[PartnerController::class,'partnerBannerUpdate'])->name('partner.banner.update');

        Route::get('workforce',[PartnerController::class,'partnerWorkforce'])->name('partner.workforce');
        Route::post('workforce-update',[PartnerController::class,'partnerWorkforceUpdate'])->name('partner.workforce.update');

        Route::get('customers',[PartnerController::class,'partnerCustomers'])->name('partner.customers');
        Route::post('customers-update',[PartnerController::class,'partnerCustomersUpdate'])->name('partner.customers.update');

        Route::get('supplier-partners',[PartnerController::class,'partnerSupplier'])->name('partner.supplier');
        Route::post('supplier-partners-update',[PartnerController::class,'partnerSuppliersUpdate'])->name('partner.supplier.update');

        Route::get('investors',[PartnerController::class,'partnerInvestors'])->name('partner.investors');
        Route::post('investors-update',[PartnerController::class,'partnerInvestorsUpdate'])->name('partner.investors.update');

        Route::get('community',[PartnerController::class,'partnerCommunity'])->name('partner.community');
        Route::post('community-update',[PartnerController::class,'partnerCommunityUpdate'])->name('partner.community.update');

        Route::get('environment',[PartnerController::class,'partnerEnvironment'])->name('partner.environment');
        Route::post('environment-update',[PartnerController::class,'partnerEnvironmentUpdate'])->name('partner.environment.update');

        
    });

    Route::group(['prefix'=>'sustainability'],function(){

        Route::get('banner',[SustainabilityController::class,'sustainabilityBanner'])->name('sustainability.banner');
        Route::post('banner-update',[SustainabilityController::class,'sustainabilityBannerUpdate'])->name('sustainability.banner.update');

        Route::get('image',[SustainabilityController::class,'sustainabilityImage'])->name('sustainability.image');
        Route::post('image-update',[SustainabilityController::class,'sustainabilityImageUpdate'])->name('sustainability.image.update');

        Route::get('our-proposition',[SustainabilityController::class,'sustainabilityProposition'])->name('sustainability.proposition');
        Route::post('our-proposition-update',[SustainabilityController::class,'sustainabilityPropositionUpdate'])->name('sustainability.proposition.update');

        Route::get('key-company-material',[SustainabilityController::class,'sustainabilityMaterial'])->name('sustainability.material');
        Route::get('key-company-material-delete/{id}',[SustainabilityController::class,'sustainabilityMaterialDelete'])->name('sustainability.material.delete');
        Route::get('key-company-material-edit/{id}',[SustainabilityController::class,'sustainabilityMaterialEdit'])->name('sustainability.material.edit');
        Route::post('key-company-material-store',[SustainabilityController::class,'sustainabilityMaterialStore'])->name('sustainability.material.store');
        Route::post('key-company-material-update/{id}',[SustainabilityController::class,'sustainabilityMaterialUpdate'])->name('sustainability.material.update');


        Route::get('key-material/{id}',[SustainabilityController::class,'sustainabilityKeyMaterial'])->name('sustainability.key.material');
            Route::get('key-material-edit/{id}',[SustainabilityController::class,'sustainabilityKeyMaterialEdit'])->name('sustainability.key.material.edit');
            Route::get('key-material-delete/{id}',[SustainabilityController::class,'sustainabilityKeyMaterialDelete'])->name('sustainability.key.material.delete');
            Route::post('key-material-store',[SustainabilityController::class,'sustainabilityKeyMaterialStore'])->name('sustainability.key.material.store');
            Route::post('key-material-update/{id}',[SustainabilityController::class,'sustainabilityKeyMaterialUpdate'])->name('sustainability.key.material.update');


        Route::get('driving-business-excellence-and-efficiency',[SustainabilityController::class,'sustainabilityDriving'])->name('sustainability.driving');
        Route::post('driving-business-excellence-and-efficiency-update',[SustainabilityController::class,'sustainabilityDrivingUpdate'])->name('sustainability.driving.update');

        Route::get('creating-sustainable-value',[SustainabilityController::class,'sustainabilitySustainable'])->name('sustainability.sustainable');
        Route::post('creating-sustainable-value-update',[SustainabilityController::class,'sustainabilitySustainableUpdate'])->name('sustainability.sustainable.update');

        Route::get('governance-value',[SustainabilityController::class,'sustainabilityGovernance'])->name('sustainability.governance');
        Route::post('governance-update',[SustainabilityController::class,'sustainabilityGovernanceUpdate'])->name('sustainability.governance.update');

        
    });
});



require __DIR__.'/auth.php';
