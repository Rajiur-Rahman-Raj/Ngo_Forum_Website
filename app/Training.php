<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
      protected $fillable = ['training_image', 'title', 'description', 'name', 'designation', 'phone', 'email', 'location', 'created_at', 'updated_at'];
}
