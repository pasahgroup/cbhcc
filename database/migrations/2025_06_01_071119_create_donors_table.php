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
        Schema::create('donors', function (Blueprint $table) {
           
                $table->bigIncrements('id');
           $table->string('donor_name',32)->nullable();
            $table->string('contact_number',24)->nullable();
            $table->string('email',30)->nullable();
            $table->string('address',150)->nullable();
            $table->string('country',40)->nullable();
            $table->string('logo',94)->nullable();
            $table->string('status',12)->default('Active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
