<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 'tel','job','national' ,'city', 'pass',
    ];
 
    protected $hidden = [
        'pass', 'remember_token',
    ];

}
