<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'release_date', 'original_language', 'img_url', 'description'];
}
