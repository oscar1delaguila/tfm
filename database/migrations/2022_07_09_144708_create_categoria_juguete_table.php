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
        Schema::create('categoria_juguete', function (Blueprint $table) {
//          $table->id();
//          $table->timestamps();

            //foreignId define la columna categoria_id de tipo entero grande sin signo 
            //constrained indica que es clave foranea
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('juguete_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_juguete');
    }
};
