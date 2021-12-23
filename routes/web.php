<?php

use App\ArticleResource;
use App\Patiya;
use App\People;
use App\User;
use Illuminate\Support\Facades\Route;

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

use Illuminate\Support\Facades\Artisan;

Route::get("reboot",function (){
    Artisan::call("route:clear");
    Artisan::call("view:clear");
    Artisan::call("config:cache");
    Artisan::call("migrate");
    dd("Ready to use");
});

Route::get('/', function () {
    return view('website.homePage');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/article', function () {
    return view('website.article');
});

Route::get('/resources', function () {
    return view('website.resource');
});


Route::get('/contact', function () {
    return view('website.contact');
});


Route::get("/details-page/{id}",function ($id) {
    $article = ArticleResource::query()->findOrFail($id);
    return view('website.detail-page')->with(['article' => $article]);
})->name('detailsPage');

Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::view('home','home')->name('home');

    Route::get("/profile/edit/{id}",'HomeController@profileEdit')->name('profile.edit');
    Route::post("/profile/update/{id}",'HomeController@profileUpdate')->name('profile.update');
    Route::get("/change-password",'HomeController@changePassword')->name('profile.changePassword');
    Route::post("/updatePassword",'HomeController@updatePassword')->name('profile.updatePassword');

    Route::prefix("Skill")->name('skill.')->group(function (){
        $category = "SkillController@";
        Route::get('/',$category.'index')->name('add');
        Route::get('/edit/{id}',$category.'edit')->name('edit');
        Route::post('/store',$category.'store')->name('store');
        Route::post('/update/{id}',$category.'update')->name('update');
        Route::post('/destroy/{id}',$category.'destroy')->name('destroy');
        Route::get('/view',$category.'view')->name('view');
    });


    Route::prefix("category")->name('category.')->group(function (){
        $category = "CategoryController@";
        Route::get('/',$category.'index')->name('add');
        Route::get('/edit/{id}',$category.'edit')->name('edit');
        Route::post('/store',$category.'store')->name('store');
        Route::post('/update/{id}',$category.'update')->name('update');
        Route::post('/destroy/{id}',$category.'destroy')->name('destroy');
        Route::get('/view',$category.'view')->name('view');
    });

    Route::prefix("certification")->name('certification.')->group(function (){
        $certification = "CertificationController@";
        Route::get('/',$certification.'index')->name('add');
        Route::get('/edit/{id}',$certification.'edit')->name('edit');
        Route::post('/store',$certification.'store')->name('store');
        Route::post('/update/{id}',$certification.'update')->name('update');
        Route::post('/destroy/{id}',$certification.'destroy')->name('destroy');
        Route::get('/view',$certification.'view')->name('view');
    });


    Route::prefix("graduation")->name('graduation.')->group(function (){
        $graduation = "GraduationController@";
        Route::get('/',$graduation.'index')->name('add');
        Route::get('/edit/{id}',$graduation.'edit')->name('edit');
        Route::post('/store',$graduation.'store')->name('store');
        Route::post('/update/{id}',$graduation.'update')->name('update');
        Route::post('/destroy/{id}',$graduation.'destroy')->name('destroy');
        Route::get('/view',$graduation.'view')->name('view');
    });

    Route::prefix("experience")->name('experience.')->group(function (){
        $experience = "ExperienceController@";
        Route::get('/',$experience.'index')->name('add');
        Route::get('/edit/{id}',$experience.'edit')->name('edit');
        Route::post('/store',$experience.'store')->name('store');
        Route::post('/update/{id}',$experience.'update')->name('update');
        Route::post('/destroy/{id}',$experience.'destroy')->name('destroy');
    });

    Route::prefix("articleResource")->name('article.')->group(function (){
        $articleResource = "ArticleResourceController@";
        Route::get('/',$articleResource.'index')->name('add');
        Route::get('/edit/{id}',$articleResource.'edit')->name('edit');
        Route::post('/store',$articleResource.'store')->name('store');
        Route::post('/update/{id}',$articleResource.'update')->name('update');
        Route::post('/destroy/{id}',$articleResource.'destroy')->name('destroy');
        Route::get('/view',$articleResource.'view')->name('view');
    });

    /* Slider start */
    Route::prefix('Slider')->name('slider.')->group(function(){
        $slider = 'SliderController@';
        Route::get('/view',$slider.'index')->name('add');
        Route::get('/resources',$slider.'viewResource')->name('view');
        Route::get('/edit/{id}',$slider.'edit')->name('edit');
        Route::post('/store-archive',$slider.'store')->name('store');
        Route::post('/update-archive/{id}',$slider.'update')->name('update');
        Route::post('/delete-archive/{id}',$slider.'destroy')->name('destroy');
        Route::post('/download-archive/{id}',$slider.'download')->name('download');
    });
    /* Slider end */

});
