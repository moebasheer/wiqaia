<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'tel', 'city', 'pass',
    ];
 
    protected $hidden = [
        'pass', 'remember_token',
    ];

}
