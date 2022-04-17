<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photocategory extends Model
{
    protected $fillable = ['category_name','created_at', 'updated_at'];
}
