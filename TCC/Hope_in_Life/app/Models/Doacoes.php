<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Doacoes extends Model
{
    use HasFactory;

    protected $table = 'Doacoes';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_doador',
        'id_necessidade',
        'id_tipo_doacao',
        'DataDoacao',
        'HoraDoacao'
    ];

    public function Doacao_Monetaria(): HasMany {
        return $this->hasMany(Doacao_Monetaria::class);
    }

    public function Doacao_Material(): HasMany {
        return $this->hasMany(Doacao_Material::class);
    }
    
}
