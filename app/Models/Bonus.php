<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function boardingHouse(){
        return $this->belongsTo(BoardingHouse::class);
    }
}
