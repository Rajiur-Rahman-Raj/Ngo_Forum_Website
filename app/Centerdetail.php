<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centerdetail extends Model
{
    protected $fillable = ['category_name', 'description', 'capacity', 'rates', 'created_at', 'updated_at'];
}
