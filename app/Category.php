<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=['name'];

    public function articles(){
        return $this->hasMany(ArticleResource::class, 'category_id')->where('isArticle',1);
    }

    public function resources(){
        return $this->hasMany(ArticleResource::class, 'category_id')->where('isArticle','!=',1);
    }

}