<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable=array('name');

    public function apartments(){
        return $this->hasMany(Apartment::class);
    }
}
