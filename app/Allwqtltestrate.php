<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allwqtltestrate extends Model
{
    protected $fillable = ['testrate_category_id', 'serial_number', 'parameters', 'method', 'cost', 'created_at', 'updated_at'];
}
