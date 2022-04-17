<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allservice extends Model
{
    protected $fillable = ['service_category_id', 'meals', 'rates', 'food', 'created_at', 'updated_at'];
}
