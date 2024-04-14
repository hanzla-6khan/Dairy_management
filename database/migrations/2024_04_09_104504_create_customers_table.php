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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ur');
            $table->string('address');
            $table->unsignedBigInteger('balance_limit');
            $table->string('cnic')->unique();
            $table->string('sms_name')->nullable();
            $table->string('mobile1');
            $table->string('mobile2')->nullable();
            $table->string('category'); // Assuming category will be stored as a string
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
