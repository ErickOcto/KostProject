<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function boardingHouse(){
        return $this->belongsTo(BoardingHouse::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }
}
