<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ataglance extends Model
{
    protected $fillable = ['at_a_glance_category_id','title', 'amount', 'created_at', 'updated_at'];
}
