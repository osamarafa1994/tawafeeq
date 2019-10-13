<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientsOrders extends Model
{
    protected $fillable = [
        'name', 'email', 'product_name' , 'details','phone'
    ];
}
