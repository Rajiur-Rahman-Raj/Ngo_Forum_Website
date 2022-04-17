<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abouutnogform extends Model
{
    protected $fillable = ['about_ngo_image', 'about_ngo_description', 'about_ngo_description_two', 'about_ngo_vision_title', 'about_ngo_vision_bg_image', 'created_at', 'updated_at'];
}
