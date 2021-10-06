<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    public function bids()
    {
        return $this->hasMany('App\Models\Bid', 'lot_id', 'id');
    }
}
