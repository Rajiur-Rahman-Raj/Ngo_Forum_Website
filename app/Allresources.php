<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allresources extends Model
{
    protected $fillable = ['resources_category_id', 'resources_image', 'image_title', 'file_download', 'ck_description', 'created_at', 'updated_at'];
}
