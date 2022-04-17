<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Microkit extends Model
{
    protected $fillable = ['logo', 'description', 'qualitative', 'origin', 'location', 'created_at', 'updated_at'];
}
