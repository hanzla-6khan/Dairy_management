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
        Schema::create('shop_sales', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->decimal('cost', 10, 2);
            $table->decimal('total_cost', 10, 2);
            $table->text('remarks')->nullable();
            $table->decimal('total_bill', 10, 2);
            $table->decimal('payment', 10, 2);
            $table->string('labour_name')->nullable();
            $table->string('truck_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_sales');
    }
};
