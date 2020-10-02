<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaPivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_pivots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('descripcion');
            $table->decimal('valor_unitario', 8, 2);
            $table->decimal('IVA', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_pivots');
    }
}
