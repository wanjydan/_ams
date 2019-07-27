<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable=array('apartment_id', 'type_id', 'floor', 'number', 'rent', 'isVacant');

    public function apartment(){
        return $this->belongsTo(Apartment::class);
    }

    public function type(){
        return $this->belongsTo(UnitType::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function booking(){
        return $this->hasOne(Booking::class);
    }
}
