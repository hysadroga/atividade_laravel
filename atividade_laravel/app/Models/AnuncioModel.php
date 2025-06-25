<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnuncioModel extends Model
{
    use HasFactory;
    protected $table = 'anuncio';
    protected $fillable = ['titulo', 'descricao', 'preco', 'data_publicacao'];
        public function proprietario()
    {
        return $this->belongsTo(Proprietario::class);
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }

}
