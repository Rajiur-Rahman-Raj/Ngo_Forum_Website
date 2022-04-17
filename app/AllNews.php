<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllNews extends Model
{
    protected $fillable = ['news_category_id','news_title', 'news_description', 'news_image', 'news_status', 'created_at', 'updated_at'];
}
