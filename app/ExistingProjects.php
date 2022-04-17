<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExistingProjects extends Model
{
     protected $fillable = ['existing_title', 'description_one', 'existing_period', 'year', 'existing_donar', 'total_baget', 'location', 'existing_description','focal_name','focal_designation','focal_phone','focal_email','related_link','related_document','existing_image', 'existing_details_image', 'created_at', 'updated_at'];

}
