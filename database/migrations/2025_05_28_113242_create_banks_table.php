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
        Schema::create('banks', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('bank_name',64)->nullable();
            $table->string('swift_code',16)->nullable();
            $table->string('bank_account_no',24)->nullable();
            $table->string('bank_holder_name',25)->nullable();
            $table->string('currency',8)->nullable();
            $table->string('country',32)->nullable();
            $table->string('status',12)->default('Active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
