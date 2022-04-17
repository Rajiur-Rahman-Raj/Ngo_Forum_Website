<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metarialscategory extends Model
{
    protected $fillable = ['category_name', 'category_description', 'created_at', 'updated_at'];
}
