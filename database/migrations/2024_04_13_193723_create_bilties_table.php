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
        Schema::create('bilties', function (Blueprint $table) {
            $table->id();
            $table->string('customer');
            $table->string('item');
            $table->string('track_no');
            $table->string('track_read');
            $table->string('factory');
            $table->integer('quantity');
            $table->decimal('cost_per_package', 8, 2);
            $table->decimal('total_cost', 8, 2);
            $table->decimal('pre_balance', 8, 2);
            $table->decimal('payment', 8, 2);
            $table->decimal('now_balance', 8, 2);
            $table->string('remarks')->nullable();
            $table->string('sms_notification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bilties');
    }
};
