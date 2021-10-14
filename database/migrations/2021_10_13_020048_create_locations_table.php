<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{

    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            
            $table->id();
            $table->string('pais');
            $table->unsignedBigInteger('profile_id');

            $table->foreign('profile_id')
                   ->references('id')
                   ->on('profiles')
                   ->onDelete('cascade')
                   ->onUpdate('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
