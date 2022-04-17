<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable = ['region','designation', 'person', 'address', 'tel_phone', 'number', 'email', 'fax', 'created_at', 'updated_at'];
}
