<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coxlab extends Model
{
    protected $fillable = ['logo', 'title', 'description', 'name', 'designation', 'phone', 'email', 'location', 'focal_name', 'focal_designation', 'focal_phone', 'focal_email', 'focal_location', 'created_at', 'updated_at'];
}
