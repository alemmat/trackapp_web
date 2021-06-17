<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;
use App\Models\User;


class Track extends Model
{
    use HasFactory;


    public function positions(){

       return $this->hasMany(Position::class);
   }

   public function user(){

        return $this->belongsTo(User::class);
   }
}
