<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projectoffice extends Model
{
    protected $fillable = ['project_location', 'project_name', 'funded_logo', 'contact_parson', 'address', 'phone', 'email', 'created_at', 'updated_at'];
}
