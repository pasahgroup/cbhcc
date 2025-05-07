<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReasignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reasigns', function (Blueprint $table) {
           $table->bigIncrements('id'); 
$table->string('asset_id')->nullable();
$table->string('employee')->nullable();
$table->string('location')->nullable();
$table->string('photo')->nullable();
$table->string('date')->nullable();
$table->string('status')->nullable();
                    $table->integer('user_id')->unsigned();                 
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
        Schema::dropIfExists('reasigns');
    }
}
