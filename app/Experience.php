<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table='experiences';
    protected $fillable = ['position', 'organization', 'body', 'designation', 'join_date', 'left_date', 'website'];
}
