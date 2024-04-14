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
        Schema::create('cash_inputs', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('name');
            $table->decimal('pre_balance', 10, 2);
            $table->decimal('payment', 10, 2);
            $table->decimal('new_balance', 10, 2);
            $table->decimal('total', 10, 2);
            $table->text('remarks')->nullable();
            $table->string('sms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_inputs');
    }
};
