<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medicamento;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'user_id' ,'correo', 'genero', 'sangre', 'comentario', 'ingreso'];
    //protected $guarded = ['id'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function medicamentos()
    {
        return $this->belongsToMany(Medicamento::class);
    }
}
