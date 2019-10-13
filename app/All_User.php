<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class All_User extends Model
{
    protected $table = "all_users";

    protected $fillable = [
        'name', 'phone', 'image', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
