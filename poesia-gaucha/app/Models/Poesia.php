<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poesia extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function autors()
    {
        return $this->hasMany(Autor::class);
    }

    public function edition()
    {
        $this->belongsTo(Edition::class);
    }
}
