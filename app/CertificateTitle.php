<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificateTitle extends Model
{
    protected $table = 'certificate_titles';
    protected $fillable = ['name'];
}