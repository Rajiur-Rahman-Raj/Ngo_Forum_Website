<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class all_programme extends Model
{
    protected $fillable = ['programme_category_id', 'programme_image', 'image_description', 'programme_title', 'ck_description', 'title_description', 'created_at', 'updated_at'];
}
