<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Config;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'status'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function all_user()
    {
        return $this->belongsTo('App\All_User', 'id' , 'user_id');
    }
    public function client()
    {
        return $this->belongsTo('App\Models\Clients', 'id' , 'user_id');
    }

    public function wishList()
    {
        if(Config::get('app.locale') == 'ar'){
            return  $this->hasMany('App\Models\LikesAr', 'user_id' , 'id');
        }
        return  $this->hasMany('App\Models\Likes', 'user_id' , 'id');
    }
}
