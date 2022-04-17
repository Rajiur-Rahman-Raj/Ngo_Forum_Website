<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coxlabtestrate extends Model
{
    protected $fillable = [ 'serial_number', 'parameters', 'method', 'cost', 'created_at', 'updated_at'];
}
