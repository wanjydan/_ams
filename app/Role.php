<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=array('name', 'description');

    public function user(){
        return $this->hasMany(User::class);
    }
}
