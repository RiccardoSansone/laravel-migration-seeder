<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('trains', function (Blueprint $table){
            $table->id();
            $table->string('company', 20);
            $table->string('station_start');
            $table->string('station_end');
            $table->decimal('times_start',10, 2);
            $table->decimal('times_end',10, 2);
            $table->smallInteger('train_code');
            $table->smallInteger('vagon_number');
            $table->boolean('is_in_time')->default(1);
            $table->boolean('cancelled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('trains');
    }
};
