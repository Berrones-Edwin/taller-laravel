<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //

    protected $table="comentario";
    protected $fillable=['post_id','usuario_id','comentario'];

    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
    public function usuario(){
        
        return $this->belongsTo('App\Models\Usuario');
    }
}
