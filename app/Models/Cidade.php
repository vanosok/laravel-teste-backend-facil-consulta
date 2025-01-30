<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cidade extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cidades';

    protected $fillable = ['nome', 'estado'];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    public function medicos()
    {
        return $this->hasMany(Medico::class);
    }

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
}
