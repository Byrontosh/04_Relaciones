<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelIdToUsers extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->unsignedBigInteger('level_id')->nullable()->after('id');

            $table->foreign('level_id')
                 ->references('id')
                 ->on('levels')
                 ->onDelete('set null')
                 ->onUpdate('cascade');
        });
    }

    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
