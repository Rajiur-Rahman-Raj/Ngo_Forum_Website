<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Implemented extends Model
{
    protected $fillable = ['project_name', 'project_logo', 'short_description', 'project_duration', 'year', 'project_donor', 'thematic_area', 'total_baget', 'location', 'details_image',  'details_description', 'focal_name', 'focal_designation', 'focal_phone', 'focal_email', 'related_link', 'related_document'];
}
