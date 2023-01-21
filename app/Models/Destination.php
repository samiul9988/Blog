<?php

namespace App\Models;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    public function flight(){
        return $this->hasOne(Flight::class)->orderBy('id','DESC');
    }

    public function flights(){
        return $this->hasMany(Flight::class);
    }
}
