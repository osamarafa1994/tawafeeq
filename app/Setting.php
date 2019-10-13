<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "settings";

    protected $fillable = [
        'title_ar', 'title_en'
        , 'description_ar', 'description_en', 'contact_description_ar',
        'contact_description_en', 'main_image', 'facebook', 'whatsapp',
        'twitter', 'linkedin', 'youtube', 'email', 'location_map', 'location_map2',
        'address', 'instegram', 'phone', 'clients_number', 'ًtransfers_number', 'workers_number', 'branches_number','vimeo', 'tumblr', 'pinterest', 'snapchat'
    ];
}
