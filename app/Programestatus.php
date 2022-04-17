<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programestatus extends Model
{
    protected $fillable = ['title', 'description', 'image', 'created_at', 'updated_at'];
}
