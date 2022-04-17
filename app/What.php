<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class What extends Model
{
    protected $fillable = ['icon_link', 'title', 'description', 'created_at', 'updated_at'];
}
