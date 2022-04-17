<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allabout extends Model
{
    protected $fillable = ['about_category_id', 'bg_image', 'description', 'ck_description', 'created_at', 'updated_at'];
}
