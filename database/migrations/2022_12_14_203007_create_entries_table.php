<?php
use Carbon\Carbon;
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
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('placa',10)->nullable();
            $table->dateTime('fecha_ingreso');
            $table->dateTime('fecha_salida')->nullable();
            $table->float('monto',8,2)->nullable()->default(0.0);
            $table->unsignedBigInteger('rate_id');
            $table->foreign('rate_id')->references('id')->on('rates');
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
        Schema::dropIfExists('entries');
    }
};
