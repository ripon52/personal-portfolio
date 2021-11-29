<?php 

namespace App\Helpers;
use App\Category;
class PortfolioHelper{

    public static function categories(){
        return Category::query()->orderBy('name')->get();
    }
    
}