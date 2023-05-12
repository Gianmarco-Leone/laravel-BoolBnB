<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    // * RELAZIONI

    // Relazione con tabella apartments
    public function apartments() {
        return $this->belongsToMany(Apartment::class);
    }
}