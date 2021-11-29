<?php
namespace App\Traits;

use Illuminate\Support\Facades\Request;
use  Image;
use Illuminate\Support\Str;

trait StoreImageTrait{

    public function resumeStore($file,$path){
        $fileName = 'Portfolio_resume_'.Date('Y').'_'.Str::random(10).".".$file->getClientOriginalExtension();
        $file->move($path,$fileName);
        return $fileName;
    }

    public function imageFileImageStore($file,$path,$height,$width){

        $fileName ='Portfolio_'.substr(md5(time()),0,16)  .'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path($path);
        $img = Image::make($file->path());
        $img->resize($width,$height, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$fileName);
        return $fileName;
    }

    public function unlinkImage($path){
        @unlink($path);
    }

}