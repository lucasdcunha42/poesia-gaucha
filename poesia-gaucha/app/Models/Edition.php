<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;
    protected $fillable = ['numero_edicao'];


    public function poesias()
    {
        $this->hasMany(Poesia::class);
    }
}