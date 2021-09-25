<?php

namespace App\Models;
use App\Models\Peso;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function peso(){
        return $this->hasMany('App/Models/Peso');
    }
}
