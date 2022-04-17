<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programme_categorie extends Model
{
    protected $fillable = ['category_name','category_description','created_at', 'updated_at'];
}
