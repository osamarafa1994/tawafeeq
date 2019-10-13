<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "abouts_us";

    protected $fillable = [
        'title', 'description', 'image', 'status'
    ];
}
