<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function tenant(){
        return $this->belongsTo(User::class);
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
