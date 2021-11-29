<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduation extends Model
{
    protected $table='graduations';
    protected $fillable=[ 'certificate_title_id', 'title', 'institute', 'session', 'passing_year', 'achievement_title', 'notes', 'isActive'];

    public function certificate(){
        return $this->belongsTo(CertificateTitle::class,'certificate_title_id');
    }
}