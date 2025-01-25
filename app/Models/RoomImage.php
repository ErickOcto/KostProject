<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function room(){
        return $this->belongsTo(Room::class);
    }
}
