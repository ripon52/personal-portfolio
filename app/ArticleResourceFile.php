<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleResourceFile extends Model
{
    protected $tableName = 'ArticleResourceFile';
    protected $fillable = ['article_resource_id','name']; 

    public function article(){
        return $this->belongsTo(ArticleResource::class,'article_resource_id');
    }
}