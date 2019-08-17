<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentario', function (Blueprint $table) {
            //

             $table->foreign('post_id','fk_comentario_post')
                    ->references('id')->on('post')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');

            $table->foreign('usuario_id','fk_comentario_usuario')
                    ->references('id')->on('usuario')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentario', function (Blueprint $table) {
            //
        });
    }
}
