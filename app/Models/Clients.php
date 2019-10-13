<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{

    protected $fillable = [
        'fname','lname', 'email', 'address', 'city', 'country', 'zip_code', 'phone', 'pay_method', 'shop_method', 'is_user', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
