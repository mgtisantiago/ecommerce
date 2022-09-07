<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function usuarios(){
        return $this->belongsTo(User::class, 'id');
    }

    public function direcciones(){
        return $this->hasMany(Direction::class, 'id_client');
    }
   
}
