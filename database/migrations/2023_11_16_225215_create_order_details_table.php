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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('tea_id');
            $table->integer('quantity')->default(1);
            $table->decimal('price', 8, 2); // You might want to store the price of each article in the order detail
            $table->timestamps();
    
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('tea_id')->references('id')->on('teas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
