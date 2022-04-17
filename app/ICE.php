<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ICE extends Model
{
    protected $fillable = ['description_one', 'name', 'designation', 'phone', 'email', 'ice_image', 'description_two', 'description_three', 'created_at', 'updated_at'];
}
