<?php

namespace App\Models;
use App\Models\Artikel;

class Komen extends Model{
    protected $table = 'Komen';

    public function Artikel()
    {
        return $this->belongsTo(Artikel::class, 'id_artikel');
    }

}