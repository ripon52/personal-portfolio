<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table='profiles';
    protected $fillable= [ 'picture', 'about', 'nid', 'dob', 'work_office', 'facebook', 'gmail', 'linkedin', 'twitter', 'office_id', 'current_address', 'permanent_address', 'phone', 'website', 'degreee'];
}