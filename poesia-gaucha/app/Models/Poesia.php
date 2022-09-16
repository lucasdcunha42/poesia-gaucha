<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poesia extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function edition()
    {
        return $this->hasOne(Edition::class);
    }
}
