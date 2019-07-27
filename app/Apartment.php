<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable=array('owner_id', 'name', 'phone', 'region_id');

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function units(){
        return $this->hasMany(Unit::class);
    }
}
