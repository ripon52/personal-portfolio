<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleResource extends Model
{
    protected $table='article_resources';
    protected $fillable = [ 'category_id', 'title', 'slug', 'body', 'datetime', 'isArticle', 'read_time',  'author', 'publisher', 'year', 'doi'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function files(){
        return $this->hasMany(ArticleResourceFile::class,'article_resource_id');
    }

}
