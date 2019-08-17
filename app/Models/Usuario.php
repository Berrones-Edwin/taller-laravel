<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //

    protected $table="usuario";
    protected $fillable=['nombre','apellido'];


    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post', 'post_usuario');
    }
}
