<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stagiaires extends Model
{
    protected $fillable = ['first_name','last_name','birthday','gender', 'email', 'phone','username', 'password'];
    public $timestamps = false;
}
