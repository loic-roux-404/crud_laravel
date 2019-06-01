<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table='profiles';
    
    protected $fillable = ['first_name', 'last_name', 'description','image'];
    
    public $timestamps = false;


    
}
