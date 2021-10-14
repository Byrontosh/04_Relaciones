<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            
            $table->id();
            $table->text('detalle');
            $table->unsignedBigInteger('user_id');
            $table->morphs('commentable');

            
            $table->foreign('user_id')
                   ->references('id')
                   ->on('users')
                   ->onDelete('cascade')
                   ->onUpdate('cascade');
            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
