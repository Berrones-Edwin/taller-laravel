<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['titulo','descripcion','fecha'];

    protected $table="post";

    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario');
    }
    public function usuarios()
    {
        return $this->belongsToMany('App\Models\Usuario', 'post_usuario');
    }
}
