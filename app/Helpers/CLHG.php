<?php

use App\ArticleResource;
use App\Slider;
    use App\User;

    use App\Category;
use App\CertificateTitle;
use App\Graduation;
use App\Profile;
use App\SKill;
use Illuminate\Support\Facades\DB;

    function categories() {
        return Category::query()->orderBy('name')->get() ?? null;
    }

    
    function certifications() {
        return CertificateTitle::query()->orderBy('name')->get() ?? null;
    }

    function certification_pluck() {
        return CertificateTitle::query()->orderBy('name')->pluck('name','id') ?? null;
    }
    

    function category_pluck() {
        return Category::query()->orderBy('name')->pluck('name','id') ?? null;
    }
    

    
    function graduations() {
        return Graduation::query()->orderBy('title')->get() ?? null;
    }

    function articles() {
        return ArticleResource::query()->orderBy('title')->get() ?? null;
    }

    function user(){
        return User::query()->first();
    }

    function profile(){
        return Profile::query()->first();
    }

    function skills(){
        return SKill::query()->orderBy('name')->get() ?? null;
    }

    function myArticles(){
        return ArticleResource::query()->where('isArticle',1)->orderBy('title')->get();
    }

    function myResources(){
        return ArticleResource::query()->where('isArticle',2)->orderBy('title')->get();
    }

    function articleCategories(){
        return Category::query()->whereHas('articles')->get();
    }
    
    function resourceCategories(){
        return Category::query()->whereHas('resources')->get();
       // return ArticleResource::query()->with('category')->where('isArticle',2)->groupBy('category_id')->get();
    }

    