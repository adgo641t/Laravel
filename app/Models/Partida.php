<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;
    protected $table = 'partidas';

    public function juego(){
        return $this->belongsTo(Juego::class);
    }
}
