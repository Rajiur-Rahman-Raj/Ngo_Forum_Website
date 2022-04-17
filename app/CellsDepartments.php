<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CellsDepartments extends Model
{
    protected $fillable = ['position_name', 'name', 'position', 'email'];
}
