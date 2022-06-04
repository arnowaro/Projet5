<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'posts_id','id' ); // ici il faut préciser le nom de la clé étrangere sinon laravel met une par défaut selon la nomenclature basique
    }
}
