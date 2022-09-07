<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clientes(){
        return $this->belongsTo(Client::class, 'id');
    }
}
