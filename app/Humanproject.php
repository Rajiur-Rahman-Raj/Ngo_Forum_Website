<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Humanproject extends Model
{
    protected $fillable = ['project_name', 'project_duration', 'year', 'project_donor', 'thematic_area', 'created_at', 'updated_at'];
}
