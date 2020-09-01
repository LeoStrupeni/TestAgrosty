<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subjectid');
            $table->text('body');
            $table->string('fromName',255);
            $table->string('FromEmail',255);
            $table->string('toEmail',255);
            $table->date('date');
            $table->float('spanScore',8,2);
        });
        
        Schema::table('messages',function(Blueprint $table){
            $table->foreign('subjectid')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
