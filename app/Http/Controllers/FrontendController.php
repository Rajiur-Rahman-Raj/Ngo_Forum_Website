<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExistingProjects;
use App\LatestNews;
use App\Implemented;
use App\PressMedia;
use App\CellsDepartments;
use App\all_programme;
use App\Regionaloffice;
use App\Career;
use App\Projectoffice;
use App\AllNews;
use App\Allresources;
use App\Bannercategory;
use App\Programestatus;
use App\Ataglance;
use App\Ataglancecategory;
use App\Abouutnogform;
use App\Allabout;
use App\Aboutcategory;
use App\Allpolicy;
use App\Allgeneral;
use App\Aboutnetwork;
use App\Foundingagency;
use App\Training;
use App\Center;
use App\Centerdetail;
use App\Allservice;
use App\Servicecategory;
use App\ICE;
use App\Metarialscategory;
use App\Allmetarials;
use App\Contactoffice;
use App\Wqtl;
use App\Wqtltestrate;
use App\Specialpackege;
use App\Coxlab;
use App\Coxlabtestrate;
use App\Coxlabservice;
use App\Microkit;
use App\Microkitvideo;
use App\Wqtlhome;
use App\Wqtlhomeimage;
use App\What;
use App\Video;
use App\Globalevent;
use App\Photocategory;
use App\Photoclicked;
use App\Banner;
use App\Human;
use App\Humanproject;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller

{
  function welcome()
  {
    $welcome_about_ngo = Abouutnogform::all();
    $welcome_news_infos = AllNews::orderBy('created_at','desc')->limit(12)->get();
    $welcome_resource_infos = Allresources::orderBy('id','desc')->take(10)->get();
    $welcome_existing_project_infoes =  ExistingProjects::orderBy('id','desc')->get();
    $welcome_whats =  What::all();
    $welcome_videos =  Video::all();
    $welcome_globalevent =  Globalevent::all();
    $photo_categories =  Photocategory::all();
    $all_photos =  Photoclicked::all();
    $all_founding_agencies = Foundingagency::all();
    $banner_images = Banner::all();
    return view('welcome', compact('welcome_about_ngo', 'welcome_news_infos', 'welcome_resource_infos', 'welcome_existing_project_infoes', 'welcome_whats', 'welcome_videos', 'welcome_globalevent', 'photo_categories', 'all_photos', 'all_founding_agencies', 'banner_images'));
  }
    function aboutus()
    {
      $banner_categories = Bannercategory::all();
      $about_ngos = Abouutnogform::all();
      $all_cat_infos = Aboutcategory::all();
      return view('aboutus', compact('about_ngos', 'all_cat_infos', 'banner_categories'));
    }
    function policy()
    {
      $all_policy_infos = Allpolicy::all();
      $general_info = Allgeneral::all();
      return view('policy', compact('all_policy_infos','general_info'));
    }
    function network_affiliation()
    {
      $network_infos = Aboutnetwork::all();
      return view('network_affiliation', compact('network_infos'));
    }
    function allprogramme(){

      $all_programme_infos = all_programme::all();
      return view('all_newses', compact('all_programme_infos'));
    }

    function categorywiseprogramme($category_id){

      $category_wise_programme =  all_programme::where('programme_category_id', $category_id)->where('id','!=',32)->get();
      return view('category_wise_programme', compact('category_wise_programme', 'category_id'));
    }

    function categorywiseprogrammedetails($programme_id){
      $single_category_programme_details = all_programme::findOrFail($programme_id);
      $need_category_name = all_programme::find($programme_id)->programme_category_id;
      return view('category_wise_programe_details', compact('single_category_programme_details', 'need_category_name'));
    }

    function training()
    {
      $training_infos = Training::all();
      $center_infos = Center::all();
      return view('training', compact('training_infos', 'center_infos'));
    }

    function trainingrate(){
      $center_infos = Center::take(3)->get();
      $service_infos = Allservice::all();
      $all_service_infos = Servicecategory::all();
      // $training_rate_infos = Centerdetail::all();
      return view('training_rate', compact('center_infos', 'service_infos', 'all_service_infos'));
    }

    function wqtl()
    {
      $wqtlhome_infos_des = Wqtlhome::all();
      $wqtl_infos = Wqtl::all();
      $coxlab_infos = Coxlab::all();
      $Wqtlhomeimage_infos = Wqtlhomeimage::all();
      return view('wqtl', compact('wqtlhome_infos_des', 'Wqtlhomeimage_infos', 'wqtl_infos', 'coxlab_infos'));
    }

    function dhakalab(){
      $wqtl_infos = Wqtl::all();
      $all_wqtl_testrates = Wqtltestrate::all();
      $all_packeges = Specialpackege::all();
      return view('dhakalab', compact('wqtl_infos', 'all_wqtl_testrates', 'all_packeges'));
    }

    function coxlab()
    {
      $coxlab_infos = Coxlab::all();
      $coxlab_test_rates = Coxlabtestrate::all();
      $coxlab_other_services = Coxlabservice::all();
      return view('coxlab', compact('coxlab_infos', 'coxlab_test_rates', 'coxlab_other_services'));
    }
    function microkit()
    {
      $microkit_infos = Microkit::all();
      $microkit_videos = Microkitvideo::all();
      return view('microkit', compact('microkit_infos', 'microkit_videos'));
    }

    function iec()
    {
      $ice_infos = ICE::all();
      return view('iec', compact('ice_infos'));
    }

    function existing_projects()
    {
      $all_existing_project_infoes =  ExistingProjects::orderBy('sl_no','desc')->get();
      return view('existing_projects', compact('all_existing_project_infoes'));
    }

    function existingprojectdetails($existing_id){

      $single_existing_project_details = ExistingProjects::findOrFail($existing_id);
      return view('existing_projects_details', compact('single_existing_project_details'));
    }

    function prev_project()
    {
      $implemented_infos = DB::table('implementeds')->orderBy('id','desc')->get();
      return view('prev_project', compact('implemented_infos'));
    }
    function implementedprojectdetails($implemented_id)
    {
      $single_implemented_details_info = Implemented::find($implemented_id);
      return view('project_details', compact('single_implemented_details_info'));
    }
    function resources(){
      $all_resource_infos = Allresources::orderBy('id','desc')->get();
      return view('resources', compact('all_resource_infos'));
    }

    function categorywiseresources($category_id ){
       // $all_resources_infos = Allresources::all();
      $category_wise_resources =  Allresources::where('resources_category_id', $category_id)->orderBy('id','desc')->get();
      return view('category_wise_resources', compact('category_wise_resources', 'category_id'));
    }
    function photo()
    {
      return view('photo');
    }

    function allnewses(){

      $all_news_infos = AllNews::orderBy('created_at','desc')->get();
      return view('all_newses', compact('all_news_infos'));
    }

    function categorywisenews($category_id){

      $category_wise_newses =  AllNews::where('news_category_id', $category_id)->orderBy('created_at','desc')->get();
      return view('category_wise_news', compact('category_wise_newses', 'category_id'));
    }

    function category_wisenewsdetails($news_id){
      $single_category_news_details = AllNews::findOrFail($news_id);
      $need_category_name = AllNews::find($news_id)->news_category_id;
      return view('category_wise_news_details', compact('single_category_news_details', 'need_category_name'));
    }

    function contact()
    {
      $contact_infos = Contactoffice::orderBy('id', 'DESC')->limit(1)->get();
      return view('contact', compact('contact_infos'));
    }
    function departments()
    {
      $CellsDepartments_infos = CellsDepartments::all();
      return view('departments', compact('CellsDepartments_infos'));
    }
    function regional_office()
    {
      $regionaloffice_infos = Regionaloffice::all();
      return view('regional_office', compact('regionaloffice_infos'));
    }
    function project_office()
    {
      $all_project_office =  Projectoffice::all();
      return view('project_office', compact('all_project_office'));
    }
    function career()
    {
      $career_info = Career::all();
      return view('career', compact('career_info'));
    }
    function program_status()
    {
      $addprogramme_status_details = Programestatus::all();
      return view('program_status', compact('addprogramme_status_details'));
    }
    function at_a_glances()
    {
      $ataglancecategories = Ataglancecategory::all();
      return view('at_a_glances', compact('ataglancecategories'));
    }

    function developmentmetarials(){
      $metarials_categories = Metarialscategory::all();
      return view('developmentmetarials', compact('metarials_categories'));
    }

    function humanitarian(){
      $human_infos = Human::where('id',1)->first();
      $human_project_infos = Humanproject::all();
      return view('humanitarian', compact('human_infos', 'human_project_infos'));
    }




    // my function for programme
    public function manualPage(){
        return view('manual');
    }
    public function trainingCourses(){
        return view('training_courses');
    }
    public function nrcPageView(){
        return view('nrc');
    }
    public function monitoringPageView(){
        return view('monitoring');
    }

    //video gallery
    public function videoGallery(){
        $videos = DB::table('video_gallery')->orderBy('id','desc')->get();
        return view('video_gallery',compact('videos'));
    }
}
