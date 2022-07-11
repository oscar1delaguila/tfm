<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juguetes', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre_juguete',254);
            $table->timestamp('fecha_publicacion');
            $table->text('descripcion',);
            $table->string('path_imagen');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juguetes');
    }
};
