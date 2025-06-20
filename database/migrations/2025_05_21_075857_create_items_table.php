<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
          $table->bigIncrements('id'); 
$table->string('item_name')->nullable();
$table->string('serial_no')->nullable();
$table->string('owner_name')->nullable();
$table->string('location')->nullable();
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
        Schema::dropIfExists('items');
    }
}
