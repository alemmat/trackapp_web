<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Track;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'latitude', 'longitude','track_id'
    ];

    public function track(){

         return $this->belongsTo(Track::class);
    }
}
