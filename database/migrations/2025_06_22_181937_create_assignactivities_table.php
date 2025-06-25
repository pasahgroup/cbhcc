<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignactivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignactivities', function (Blueprint $table) {
$table->bigIncrements('id'); 
$table->integer('project_id')->nullable();
$table->integer('subproject_id')->nullable();
$table->integer('activity_id')->nullable();
$table->decimal('percent',10,2)->nullable();

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
        Schema::dropIfExists('assignactivities');
    }
}
