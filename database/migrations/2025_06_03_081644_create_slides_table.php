<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('slides', function (Blueprint $table) {
                            
           $table->bigIncrements('id');
           $table->string('photo_title',150)->nullable();
            $table->string('photo_description',450)->nullable();           
            $table->string('photo',64)->nullable();
            $table->integer('project_id',11)->nullable();
              $table->integer('subproject_id',11)->nullable();
               $table->integer('display',24)->nullable();
            $table->string('status',12)->default('Active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
