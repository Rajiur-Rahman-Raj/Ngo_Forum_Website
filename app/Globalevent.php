<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Globalevent extends Model
{
    protected $fillable = ['date', 'manth', 'title', 'description', 'created_at', 'updated_at'];
}
