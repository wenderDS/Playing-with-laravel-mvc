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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('number');
            $table->foreignId('series_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
//            $table->unsignedBigInteger('series_id');
//            $table
//                ->foreign('series_id')
//                ->references('id')
//                ->on('series')
//            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasons');
    }
};
