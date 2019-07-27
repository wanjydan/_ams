<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitType extends Model
{
    protected $fillable=array('name', 'description');

    public function units(){
        return $this->hasMany(Unit::class);
    }
}
