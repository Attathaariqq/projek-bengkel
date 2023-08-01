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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("customer_id")
                ->references("id")
                ->on("customers")
                ->onUpdate("CASCADE")
                ->onDelete("CASCADE");
            $table->foreignId("product_id")
                ->references("id")
                ->on("products")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");
            $table->decimal("total",17, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
