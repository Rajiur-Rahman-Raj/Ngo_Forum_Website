<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialpackege extends Model
{
    protected $fillable = ['name', 'price', 'parameters', 'created_at', 'updated_at'];
}
