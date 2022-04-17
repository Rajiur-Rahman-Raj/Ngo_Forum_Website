<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photoclicked extends Model
{
    protected $fillable = ['photo_category_id', 'photoclicked_image', 'created_at', 'updated_at'];
}
