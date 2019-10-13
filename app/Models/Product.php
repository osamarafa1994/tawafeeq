<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title','price', 'description', 'available', 'benefits','image','status'
    ];

}
