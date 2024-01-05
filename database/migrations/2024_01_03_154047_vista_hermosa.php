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
        Schema::create('VistaHermosa', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('sku');
            $table->decimal('price', 8, 2);
            $table->boolean('available');
            $table->time('time_init');
            $table->time('time_end');
            $table->date('date_init');
            $table->date('date_end');
            $table->string('stock');
            $table->string('img')->nullable();
            $table->string('categories');
            $table->string('id_tienda');





            // ... otras columnas ...
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
        Schema::dropIfExists('VistaHermosa');
    }
};
