<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peso extends Model
{
    public function paciente(){
        return $this->belongsTo('App\Models\Paciente','paciente_id','users_id');
    }
}
