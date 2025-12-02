<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::update('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name',150)->nullable();
            $table->string('project_code',24)->nullable();
            $table->string('region',25)->nullable();
            $table->string('district',8)->nullable();
            $table->string('start_date',32)->nullable();
            $table->string('status',12)->default('Active');
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
}
