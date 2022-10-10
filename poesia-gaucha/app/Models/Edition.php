<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;
    protected $fillable = ['numero_edicao', 'livreto','informacoes','resultados'];


    public function poesia()
    {
        return $this->belongsTo(Poesia::class);
    }
}
