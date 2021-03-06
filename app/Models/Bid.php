<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    public function lots()
    {
        return $this->belongsTo('App\Models\Lot', 'lot_id', 'id');
    }
}
