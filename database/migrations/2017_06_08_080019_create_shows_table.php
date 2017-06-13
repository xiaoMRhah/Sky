<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows',function(Blueprint $table){
        	$table->increments('id');
        	$table->string('theme');
        	$table->string('user_name');
        	$table->string('user_id');
        	$table->time('start_time');
        	$table->time('end_time');
        	$table->double('price');
        	$table->integer('Maxnumber');
        	$table->integer('count');
        	$table->string('content_introduction');
        	$table->integer('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
