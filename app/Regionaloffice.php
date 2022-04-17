<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regionaloffice extends Model
{
    protected $fillable = ['region', 'person', 'street_address', 'phone', 'email', 'district_covergae'];
}
