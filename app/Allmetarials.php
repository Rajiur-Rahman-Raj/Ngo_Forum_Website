<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allmetarials extends Model
{
    protected $fillable = ['metarials_category_id', 'metarials_title', 'image', 'created_at', 'updated_at'];
}
