<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardetails extends Model
{
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }
}
