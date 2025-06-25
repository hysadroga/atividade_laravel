<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeiculoModel extends Model
{
    use HasFactory;
    protected $table = 'veiculo';
    protected $fillable = ['marca','anuncio-id', 'modelo', 'ano', 'placa', 'cor'];
    public function anuncio()
    {
        return $this->hasOne(Anuncio::class);
    }
}
