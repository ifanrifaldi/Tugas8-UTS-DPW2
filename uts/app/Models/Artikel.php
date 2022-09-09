<?php

namespace App\Models;
use App\models\Traits\Attributes\ArtikelAttributes;
use App\Models\User;

class Artikel extends Model{

    use ArtikelAttributes;

    protected $table = 'Artikel';
 
    public function User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}