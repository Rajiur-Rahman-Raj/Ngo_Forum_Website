<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    protected $fillable = ['description', 'image', 'ck_description','created_at', 'updated_at'];
}
