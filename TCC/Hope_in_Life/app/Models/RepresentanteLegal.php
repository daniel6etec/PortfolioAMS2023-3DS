<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RepresentanteLegal extends Model
{
    use HasFactory;

    protected $table = 'Representante_Legal';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'NomeCompleto',
        'DataNascimento',
        'CPF',
        'RG',
        'Endereco',
        'email',
        'NomeFotoPerfil'
    ];

    public function Telefone_Representante(): HasMany {
        return $this->hasMany(Telefone_Representante::class);
    }

    public function Ong(): HasOne {
        return $this->hasOne(Ong::class);
    }
}
