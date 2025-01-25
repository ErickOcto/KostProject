<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function boardingHouses(){
        return $this->hasMany(BoardingHouse::class);
    }
}
