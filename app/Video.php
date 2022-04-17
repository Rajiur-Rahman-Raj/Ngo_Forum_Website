<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['video_link', 'bg_image', 'created_at', 'updated_at'];
}
