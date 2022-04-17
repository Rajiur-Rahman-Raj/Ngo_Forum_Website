<?php

//All frontend Routeing//

Route::get('/', 'FrontendController@welcome');



Auth::routes();

//Who are u Routeing//
Route::get('aboutus','FrontendController@aboutus');
Route::get('policy','FrontendController@policy');
Route::get('network_affiliation','FrontendController@network_affiliation');

//Progeammin Routeing//
Route::get('wash_promotion','FrontendController@wash_promotion');
Route::get('health','FrontendController@health');
Route::get('advocacy','FrontendController@advocacy');
Route::get('humanitarian','FrontendController@humanitarian');
Route::get('environment','FrontendController@environment');
Route::get('research','FrontendController@research');

//Service Routeing//
Route::get('training','FrontendController@training');
Route::get('training/rate', 'FrontendController@trainingrate');
Route::get('wqtl','FrontendController@wqtl');
//coxlab route
Route::get('coxlab','FrontendController@coxlab');
Route::get('microkit','FrontendController@microkit');
Route::get('dhaka/lab','FrontendController@dhakalab');
Route::get('iec','FrontendController@iec');
Route::get('development/metarials','FrontendController@developmentmetarials');

//projects Routeing//
Route::get('all/programme', 'FrontendController@allprogramme');
Route::get('humanitarian', 'FrontendController@humanitarian');
Route::get('category/wise/programme/{category_id}','FrontendController@categorywiseprogramme');
Route::get('category_wise/programme/details/{programme_id}','FrontendController@categorywiseprogrammedetails');
Route::get('existing_projects', 'FrontendController@existing_projects');
Route::get('prev_project', 'FrontendController@prev_project');
Route::get('existing/project/details/{existing_id}', 'FrontendController@existingprojectdetails');
Route::get('implemented/project/details/{implement_id}', 'FrontendController@implementedprojectdetails');




//Resources Routeing//
Route::get('category_wise_resources/{category_id}','FrontendController@categorywiseresources');
Route::get('resources', 'FrontendController@resources');
// Route::get('publication','FrontendController@publication');
Route::get('photo','FrontendController@photo');

//News Midia Routeing//
Route::get('category/wise/news/{category_id}','FrontendController@categorywisenews');
Route::get('category_wise/news/details/{news_id}','FrontendController@category_wisenewsdetails');
Route::get('all/newses', 'FrontendController@allnewses');

Route::get('pressmedia','FrontendController@pressmedia');
Route::get('pressmedia/news/details/{news_id}','FrontendController@pressmedianewsdetails');

//Get Involved Routeing//
Route::get('contact','FrontendController@contact');
Route::get('departments','FrontendController@departments');
Route::get('regional_office','FrontendController@regional_office');
Route::get('project_office','FrontendController@project_office');
Route::get('career','FrontendController@career');

//Mis Portal Routeing//
Route::get('program_status','FrontendController@program_status');
Route::get('at_a_glances','FrontendController@at_a_glances');



//All Backend Routing//
Route::get('/home', 'HomeController@index')->name('home');
Route::get('what/view', 'HomeController@what')->name('what');
Route::post('what/insert', 'HomeController@whatinsert');
Route::post('what/edit/insert', 'HomeController@whateditinsert');
Route::get('what/delete/{what_id}', 'HomeController@whatdelete');

//welcom video Routeing//
Route::get('video', 'HomeController@video');
Route::post('welcome/video/insert', 'HomeController@welcomevideoinsert');
Route::post('welcome/video/edit/insert', 'HomeController@welcomevideoeditinsert');
Route::get('welcome/video/delete/{welcome_video_id}', 'HomeController@welcomevideodelete');

//welcom photo_category Routeing//
Route::get('photo_category','HomeController@aboutcategory');
Route::post('category/photo/insert', 'HomeController@categoryphotoinsert');
Route::get('category/photo/delete/{category_id}', 'HomeController@categoryphotodelete');
Route::post('category/photo/edit/insert', 'HomeController@categoryphotoeditinsert');

//welcom photo_clicked Routeing//
Route::get('photo_clicked','HomeController@photoclicked');
Route::post('photo/clicked/insert', 'HomeController@photoclickedinsert');
Route::post('photo_clicked/edit/insert', 'HomeController@photoclickededitinsert');
Route::get('photo_clicked/delete/{photo_clicked_id}', 'HomeController@photoclickeddelete');

//Global & National Events Routeing //
Route::get('global','HomeController@global');
Route::post('global/insert', 'HomeController@globalinsert');
Route::post('global/edit/insert', 'HomeController@globaleditinsert');
Route::get('global/delete/{global_id}', 'HomeController@globaldelete');

//Founding Agencies Routeing //
Route::get('founding/agency','HomeController@foundingagency');
Route::post('founding/agency/insert', 'HomeController@foundingagencyinsert');
Route::post('agency/edit/insert', 'HomeController@agencyeditinsert');
Route::get('agency/delete/{agency_id}', 'HomeController@agencydelete');




// all custom routing for programme start
Route::get('/manual/page/view','FrontendController@manualPage');
Route::get('/training/courses/view','FrontendController@trainingCourses');
Route::get('/nrc/page/view','FrontendController@nrcPageView');
Route::get('/monitoring/evaluation/page','FrontendController@monitoringPageView');
// all custom rputing for programme end


//video gallery
Route::get('/video/gallery','FrontendController@videoGallery');


// All Backend routing
Route::group(['middleware' => 'auth'], function () {

  // Banner Category
  Route::get('add/banner', 'BannerController@banner');
  Route::post('banner/category/insert', 'BannerController@bannercategoryinsert');
  Route::post('banner/category/edit/insert', 'BannerController@bannercategoryeditinsert');
  Route::get('banner/category/delete/{banner_id}', 'BannerController@bannercategorydelete');

  Route::post('banner/image/insert', 'BannerController@bannerimageinsert');
  Route::post('banner/image/edit/insert', 'BannerController@bannerimageeditinsert');
  Route::get('banner/image/delete/{banner_id}', 'BannerController@bannerimagedelete');



    //video routes start
    Route::get('/video/gallery/page','BannerController@videoGalleryPage');
    Route::post('/add/new/video/to/gallery','BannerController@addNewVideoToGallery');
    Route::get('/delete/video/from/gallery/{id}','BannerController@deleteVideoFromGallery');



  //Who are u Routeing//
  Route::get('about/view','WhoweareController@aboutview');
  Route::post('about_ngo/insert', 'WhoweareController@aboutngoinsert');
  Route::post('about_ngo/edit/insert', 'WhoweareController@aboutngoeditinsert');
  Route::get('about_ngo/delete/{about_ngo_id}', 'WhoweareController@aboutngodelete');

  //Who are u Routeing Category//
  Route::get('about_category','WhoweareController@aboutcategory');
  Route::post('category/about/insert', 'WhoweareController@categoryaboutinsert');
  Route::get('category/about/delete/{category_id}', 'WhoweareController@categoryaboutdelete');
  Route::post('category/about/edit/insert', 'WhoweareController@categoryabouteditinsert');

  //Who are u Routeing All//
  Route::get('all_about','WhoweareController@Allabout');
  Route::post('all/about/insert', 'WhoweareController@allaboutinsert');
  Route::post('all/about/edit/insert', 'WhoweareController@allabouteditinsert');
  Route::get('all/about/delete/{about_id}', 'WhoweareController@allaboutdelete');

  //Who are u Routeing All Policy//
  Route::get('policy/view','WhoweareController@policyview');
  Route::post('policy/insert', 'WhoweareController@policyinsert');
  Route::post('policy/edit/insert', 'WhoweareController@policyeditinsert');
  Route::get('policy/delete/{policy_id}', 'WhoweareController@policydelete');

  //Who are u Routeing general_mamber//
  Route::get('general_mamber','WhoweareController@generalmamber');
  Route::post('general/insert', 'WhoweareController@generalinsert');
  Route::post('general/edit/insert', 'WhoweareController@generaleditinsert');
  Route::get('general/delete/{general_id}', 'WhoweareController@generaldelete');
  Route::get('network/add/view','WhoweareController@networkaddview');
  Route::post('network/insert', 'WhoweareController@networkinsert');
  Route::post('network/edit/insert', 'WhoweareController@networkeditinsert');
  Route::get('network/delete/{network_id}', 'WhoweareController@networkdelete');



  //Progeammin Routeing//
  Route::get('All_Programme_Category','ProgrammeController@All_Programme_Category');
  Route::get('All_Programme','ProgrammeCategoryController@AllProgramme');
  Route::post('all/programme/insert', 'ProgrammeController@allprogrammeinsert');
  Route::post('all/programme/edit/insert', 'ProgrammeController@categoryprogrammeeditinsert');
  Route::get('all/programme/delete/{programme_id}', 'ProgrammeController@allprogrammedelete');
  Route::get('add/programme/category', 'ProgrammeCategoryController@addprogrammecategory');
  Route::post('category/programme/insert', 'ProgrammeCategoryController@categoryprogrammeinsert');
  Route::get('category/programme/delete/{category_id}', 'ProgrammeCategoryController@categoryprogrammedelete');
  Route::post('category/programme/edit/insert', 'ProgrammeCategoryController@categoryprogrammeeditinsert');

  Route::post('update/human/insert', 'ProgrammeCategoryController@updatehumaninsert');
  Route::post('human/project/insert','ProgrammeCategoryController@humanprojectinsert');
  Route::post('human/project/edit/insert','ProgrammeCategoryController@humanprojecteditinsert');
  Route::get('human/project/delete/{human_id}','ProgrammeCategoryController@humanprojectdelete');

  //Service Routeing//
  Route::get('training/view','ServiceController@trainingview');
  Route::post('training/insert', 'ServiceController@traininginsert');
  Route::post('training/edit/insert', 'ServiceController@trainingeditinsert');
  Route::get('training/delete/{training_id}', 'ServiceController@trainingdelete');

  //Training Centers Routing//
  Route::get('center/view', 'ServiceController@centerview');
  Route::post('center/insert', 'ServiceController@centerinsert');
  Route::post('center/edit/insert', 'ServiceController@centereditinsert');
  Route::get('center/delete/{center_id}', 'ServiceController@centerdelete');
  // Training center details
  Route::get('center/view/details', 'ServiceController@centerviewdetails');
  Route::post('training_center_detail/insert', 'ServiceController@training_center_detailinsert');
  Route::post('center_detail/edit/insert', 'ServiceController@center_detaileditinsert');
  Route::get('center_details/delete/{center_id}', 'ServiceController@center_detailsdelete');

  // catering service rate routes\
  Route::get('catering/service/category', 'ServiceController@cateringservicecategory');
  Route::post('category/service/insert', 'ServiceController@categoryserviceinsert');
  Route::get('category/service/delete/{category_id}', 'ServiceController@categoryservicedelete');
  Route::post('category/service/edit/insert', 'ServiceController@categoryserviceeditinsert');
  Route::get('all/service','ServiceController@Allservice');
  Route::post('all/service/insert', 'ServiceController@allserviceinsert');
  Route::post('all/service/edit/insert', 'ServiceController@allserviceeditinsert');
  Route::get('all/service/delete/{service_id}', 'ServiceController@allservicedelete');
  //development metarials routes
  Route::get('development/metarials/category', 'ServiceController@developmentmetarialscategory');
  Route::post('development/category/insert', 'ServiceController@developmentcategoryinsert');
  Route::post('metarials/category/edit/insert', 'ServiceController@metarialscategoryeditinsert');
  Route::get('metarial/category/delete/{metarials_id}', 'ServiceController@metarialcategorydelete');

  Route::get('all/development/metarials', 'ServiceController@alldevelopmentmetarials');
  Route::post('categorywise/metarials/insert', 'ServiceController@developmentmetarialscategoryinsert');
  Route::post('metarials/details/edit/insert', 'ServiceController@developmentmetarialscategoryeditinsert');
  Route::get('metarial/details/delete/{metarials_id}', 'ServiceController@developmentmetarialcategorydelete');



//wqtl route
  Route::get('wqtl_home/add/view','ServiceController@wqtl_homeaddview');
  Route::post('update/wqtl_home/insert', 'ServiceController@updatewqtl_homeinsert');

  Route::get('wqtl/add/view','ServiceController@wqtladdview');
  Route::post('update/wqtl/insert', 'ServiceController@updatewqtlinsert');
// coxlab route
  Route::get('coxlab/add/view','ServiceController@coxlabaddview');
  Route::post('update/coxlab/insert', 'ServiceController@updatecoxlabinsert');
// Microkit route
  Route::get('microkit/add/view','ServiceController@microkitaddview');
  Route::post('update/microkit/insert', 'ServiceController@updatemicrokitinsert');


  //wqtl test rate route
  Route::post('test/rate/category/insert', 'ServiceController@testratecategoryinsert');
  Route::post('testrate/edit/insert', 'ServiceController@testrateeditinsert');
  Route::get('testrate/delete/{testrate_id}', 'ServiceController@testratedelete');

  Route::post('wqtl_test_rate/insert', 'ServiceController@wqtl_test_rateinsert');
  Route::post('wqtl_test_rate_content/edit/insert', 'ServiceController@wqtl_test_rate_contenteditinsert');
  Route::get('wqtl_test_rate_content/delete/{testrate_id}', 'ServiceController@wqtl_test_rate_contentdelete');

  //coxlab test rate route
  Route::post('coxlab_test_rate/insert', 'ServiceController@coxlab_test_rateinsert');
  Route::post('coxlab_test_rate_content/edit/insert', 'ServiceController@coxlab_test_rate_contenteditinsert');
  Route::get('coxlab_test_rate_content/delete/{testrate_id}', 'ServiceController@coxlab_test_rate_contentdelete');

  //wqtl home image route
  Route::post('wqtl/homeimage/insert', 'ServiceController@wqtlhomeimageinsert');
  Route::post('wqtlhomeimage/edit/insert', 'ServiceController@wqtlhomeimageeditinsert');
  Route::get('wqtl_home_image/delete/{homeimage_id}', 'ServiceController@wqtl_home_imagedelete');

  //video microkit route
  Route::post('video/insert', 'ServiceController@videoinsert');
  Route::post('video/edit/insert', 'ServiceController@videoeditinsert');
  Route::get('video/delete/{video_id}', 'ServiceController@videodelete');

//coxlab other service
  Route::post('coxlab/other/service/insert', 'ServiceController@coxlabotherserviceinsert');
  Route::get('coxlab_test_rate_content/delete/{testrate_id}', 'ServiceController@coxlab_test_rate_service_contentdelete');



  //special packeg wqtl
  Route::post('packege/insert', 'ServiceController@packegeinsert');
  Route::post('packege/edit/insert', 'ServiceController@packegeeditinsert');
  Route::get('packege/delete/{packege_id}', 'ServiceController@packegedelete');


  Route::get('ice/view','ServiceController@iceview');
  Route::post('ice/insert', 'ServiceController@iceinsert');
  Route::post('ice/edit/insert', 'ServiceController@iceeditinsert');
  Route::get('ice/delete/{ice_id}', 'ServiceController@icedelete');

  //projects Routeing//
  Route::get('existing/project', 'ProjectController@exising_project');
  Route::post('existing/project/insert', 'ProjectController@existingprojectinsert');
  Route::post('existing/project/edit/insert', 'ProjectController@existingprojecteditinsert');
  Route::get('existing/project/delete/{existing_id}', 'ProjectController@existingprojectdelete');
  Route::get('implemented/view','ProjectController@implementedview');
  Route::post('implemented/insert','ProjectController@implementedinsert');
  Route::post('implemented/edit/insert','ProjectController@implementededit');
  Route::get('implemented/delete/{implemented_id}','ProjectController@implementeddelete');


  //Resources Routeing//

  Route::get('resources/category', 'resourcesCategoryController@resourcescategory');
  Route::post('category/resources/insert', 'resourcesCategoryController@categoryresourcesinsert');
  Route::get('category/resources/delete/{category_id}', 'resourcesCategoryController@categoryresourcesdelete');
  Route::post('category/resources/edit/insert', 'resourcesCategoryController@categoryresourceseditinsert');
  Route::get('all_resources', 'AllresourcesController@allresources');
  Route::post('all/resources/insert', 'AllresourcesController@allresourcesinsert');
  Route::post('single/resources/edit/insert', 'AllresourcesController@singleresourceseditinsert');
  Route::get('resources/delete/{resources_id}', 'AllresourcesController@resourcesdelete');

  //News and  Midia Routeing//

  Route::get('latest/news', 'NewsController@latestnews');
  Route::post('latest/news/insert', 'NewsController@latestnewsinsert');
  Route::get('latest/news/delete/{news_id}', 'NewsController@latestnewsdelete');
  Route::post('latest/news/edit/insert', 'NewsController@latestnewseditinsert');
  Route::get('press-media/news', 'PressmediaController@pressmedianews');
  Route::post('pressmedia/news/insert', 'PressmediaController@pressmedianewsinsert');
  Route::get('pressmedia/news/delete/{news_id}', 'PressmediaController@pressmedianewsdelete');
  Route::post('pressmedia/news/edit/insert', 'PressmediaController@pressmedianewseditinsert');


  // new news media routing
  Route::get('add/news/category', 'NewsCategoryController@addnewscategory');
  Route::post('category/news/insert', 'NewsCategoryController@categorynewsinsert');
  Route::get('category/news/delete/{category_id}', 'NewsCategoryController@categorynewsdelete');
  Route::post('category/news/edit/insert', 'NewsCategoryController@categorynewseditinsert');
  //add newses route
  Route::get('add/all/newses', 'AllnewsController@addallnewses');
  Route::post('all/news/insert', 'AllnewsController@allnewsinsert');
  Route::post('single/news/edit/insert', 'AllnewsController@singlenewseditinsert');
  Route::get('news/delete/{news_id}', 'AllnewsController@newsdelete');
  //Active deactive news routes
  Route::get('news/deactive/{news_id}', 'AllnewsController@newsdeactive');
  Route::get('news/active/{news_id}', 'AllnewsController@newsactive');



  //Get Involved Routeing//
  Route::get('contact/view','GetinvolvedController@contactview');
  Route::get('call/view','GetinvolvedController@callview');
  Route::post('cells_department/insert','GetinvolvedController@cellsdepartmentinsert');
  Route::post('celldepartment/edit/insert','GetinvolvedController@celldepartmenteditinsert');
  Route::get('celldepartment/delete/{celldepartment_id}','GetinvolvedController@celldepartmentdelete');

  Route::get('regional/view','GetinvolvedController@regionalview');
  Route::post('regional/insert','GetinvolvedController@regionalinsert');
  Route::post('regionaloffice/edit/insert','GetinvolvedController@regionalofficeeditinsert');
  Route::get('regionaloffice/delete/{regionaloffice_id}','GetinvolvedController@regionalofficedelete');


  Route::get('project/view','GetinvolvedController@projectview');
  Route::post('project/office/insert', 'GetinvolvedController@projectinsert');
  Route::post('project/office/edit/insert', 'GetinvolvedController@projectofficeeditinsert');
  Route::get('project/delete/{project_id}','GetinvolvedController@projectdelete');


  Route::get('career/view','GetinvolvedController@careerview');
  Route::post('career/insert','GetinvolvedController@careerinsert');
  Route::post('career/edit/insert','GetinvolvedController@careereditinsert');
  Route::get('career/delete/{career_id}','GetinvolvedController@careerdelete');
  //contact routes
  Route::post('add/contact/insert','GetinvolvedController@addcontactinsert');
  Route::post('update/contact/insert','GetinvolvedController@updatecontactinsert');


  //Mis Portal Routeing//
  Route::get('add/programme_status','ProgrameststusController@addprogramme_status');
  Route::post('add/programme_status/insert','ProgrameststusController@addprogramme_statusinsert');
  Route::post('programme_status/edit/insert','ProgrameststusController@programme_statuseditinsert');
  Route::get('addprogramme_status/delete/{programe_id}','ProgrameststusController@addprogramme_statusdelete');

  Route::get('at_a_glance_category', 'AtaglancecategoryController@ataglancecategory');
  Route::post('at_a_glance_category/insert', 'AtaglancecategoryController@ataglancecategoryinsert');
  Route::get('at_a_glance_category/delete/{category_id}', 'AtaglancecategoryController@ataglancecategorydelete');
  Route::post('at_a_glance_category/edit/insert', 'AtaglancecategoryController@ataglancecategoryeditinsert');

  Route::get('at_a_glance', 'AtaglanceController@ataglance');
  Route::post('all/at_a_glance/insert', 'AtaglanceController@allataglanceinsert');
  Route::post('at_a_glance/edit/insert', 'AtaglanceController@ataglanceeditinsert');
  Route::get('at_a_glance/delete/{at_a_glance_id}', 'AtaglanceController@ataglancedelete');

  });

  // admin registration routes
  Route::get('admin/register', 'AdminregisterController@adminregister');
