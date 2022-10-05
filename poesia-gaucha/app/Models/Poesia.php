<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poesia extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'foto',
        'escola',
        'link_pdf',
        'texto',
        'link_video',
        'link_audio',
        'ordem_poema',
        'editions_id'];

    public function edition()
    {
        return $this->hasOne(Edition::class);
    }
}
