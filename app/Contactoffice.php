<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactoffice extends Model
{
    protected $fillable = ['office_location', 'office_phone', 'office_fax', 'office_email', 'office_website', 'name', 'designation', 'phone', 'fax', 'email', 'map_link', 'image', 'created_at', 'updated_at'];
}
