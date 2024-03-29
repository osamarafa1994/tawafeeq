<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = "contact_forms";

    protected $fillable = [
        'name', 'email', 'message','subject'
    ];

}
