<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{

    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
           
            $table->id();
            $table->string('nombre');
            $table->string('biografia');
            $table->string('github');
            $table->string('website');
            $table->unsignedBigInteger('user_id')->unique(); //->nullable()

            $table->foreign('user_id')
                   ->references('id')
                   ->on('users')
                   ->onDelete('cascade')
                   ->onUpdate('cascade'); // set null

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
