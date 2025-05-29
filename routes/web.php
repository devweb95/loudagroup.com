<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MultipagesController;
use App\Http\Controllers\OnePageController;


//sRoute::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/', [HomeController::class, 'index_six'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
//Route::get('/objectif', [HomeController::class, 'objectif'])->name('objectif-principes');
Route::get('/service-details', [HomeController::class, 'service_details'])->name('service-details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-col-1', [HomeController::class, 'blog_col_1'])->name('blog-col-1');
Route::get('/blog-col-2', [HomeController::class, 'blog_col_2'])->name('blog-col-2');
Route::get('/blog-details', [HomeController::class, 'blog_details'])->name('blog-details');
Route::get('/blog-details-2', [HomeController::class, 'blog_details_2'])->name('blog-details-2');
Route::get('/team-1', [HomeController::class, 'team_1'])->name('team-1');
Route::get('/team-2', [HomeController::class, 'team_2'])->name('team-2');
Route::get('/team-details', [HomeController::class, 'team_details'])->name('team-details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


// Pages
Route::prefix('pages/')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('appoinment','appoinment')->name('appoinment');
        Route::get('faq','faq')->name('faq');
        Route::get('notFound','notFound')->name('notFound');
        Route::get('pricing','pricing')->name('pricing');
        Route::get('project-mesonary-v2','project_mesonary_v2')->name('project-mesonary-v2');
        Route::get('project-mesonary','project_mesonary')->name('project-mesonary');
        Route::get('project-slider','project_slider')->name('project-slider');
        Route::get('project','project')->name('project');
        Route::get('projects-details-2','projects_details_2')->name('projects-details-2');
        Route::get('projects-details','projects_details')->name('projects-details');
        Route::get('team-2','team_2')->name('team-2');
        Route::get('team-details','team_details')->name('team-details');
        Route::get('team','team')->name('team');
        Route::get('objectif','objectif')->name('objectif-principes');
        Route::get('objectif_bf','objectif_bf')->name('objectif_bf');
        Route::get('objectif_ci','objectif_ci')->name('objectif_ci');
        Route::get('entreprise','entreprise')->name('nos-entreprise');
        Route::get('notre_group','notre_group')->name('notre_group');
        Route::get('notre_group_bf','notre_group_bf')->name('notre_group_bf');
        Route::get('notre_group_ci','notre_group_ci')->name('notre_group_ci');
        Route::get('direction','direction')->name('direction');
        Route::get('direction_bf','direction_bf')->name('direction_bf');
        Route::get('direction_ci','direction_ci')->name('direction_ci');
        Route::get('offre_emploie','offre_emploie')->name('offre_emploie');
        Route::get('offre_emploie_bf','offre_emploie_bf')->name('offre_emploie_bf');
        Route::get('offre_emploie_ci','offre_emploie_ci')->name('offre_emploie_ci');
        Route::get('conseil_admin','conseil_admin')->name('conseil_admin');
        Route::get('conseil_admin_bf','conseil_admin_bf')->name('conseil_admin_bf');
        Route::get('louda_chimical','louda_chimical')->name('louda_chimical');
        Route::get('louda_chimical_bf','louda_chimical_bf')->name('louda_chimical_bf');
        Route::get('louda_chimical_ci','louda_chimical_ci')->name('louda_chimical_ci');
        Route::get('louda_industry','louda_industry')->name('louda_industry');
        Route::get('louda_industry_bf','louda_industry_bf')->name('louda_industry_bf');
        Route::get('louda_industry_ci','louda_industry_ci')->name('louda_industry_ci');
        Route::get('louda_srvice','louda_service')->name('louda_service');
        Route::get('louda_srvice_bf','louda_service_bf')->name('louda_service_bf');
        Route::get('louda_srvice_ci','louda_service_ci')->name('louda_service_ci');
        Route::get('actualite','actualite')->name('actualite');
        Route::get('actualite_bf','actualite_bf')->name('actualite_bf');
        Route::get('actualite_ci','actualite_ci')->name('actualite_ci');
        Route::get('contact_bf','contact_bf')->name('contact_bf');
        Route::get('contact_ci','contact_ci')->name('contact_ci');
        Route::get('acceul_bf','acceul_bf')->name('acceul_bf');
        Route::get('acceul_ci','acceul_ci')->name('acceul_ci');
        Route::get('rse','rse')->name('rse');
    });
});

// OnePage
Route::prefix('onepage/')->group(function () {
    Route::controller(OnePageController::class)->group(function () {
        Route::get('onepage-one','onePage_one')->name('onepage-one');
        Route::get('onepage-two','onePage_two')->name('onepage-two');
        Route::get('onepage-three','onePage_three')->name('onepage-three');
        Route::get('onepage-four','onePage_four')->name('onepage-four');
        Route::get('onepage-five','onePage_five')->name('onepage-five');
        Route::get('onepage-six','onePage_six')->name('onepage-six');
        Route::get('onepage-seven','onePage_seven')->name('onepage-seven');
        Route::get('onepage-eight','onePage_eight')->name('onepage-eight');
    });
});


// Multipages
Route::prefix('multipages/')->group(function () {
    Route::controller(MultipagesController::class)->group(function () {
        Route::get('index-two','index_two')->name('index-two');
        Route::get('index-three','index_three')->name('index-three');
        Route::get('index-four','index_four')->name('index-four');
        Route::get('index-five','index_five')->name('index-five');
        Route::get('index-six','index_six')->name('index-six');
        Route::get('index-seven','index_seven')->name('index-seven');
        Route::get('index-eight','index_eight')->name('index-eight');
    });
});