<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'tipo'];

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class);
    }
}
