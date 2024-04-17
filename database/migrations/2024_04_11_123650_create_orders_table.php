<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['placed', 'OnTheWay', 'Delivered'])->default('placed');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            $table->bigInteger('delivery_id')->unsigned()->nullable();
            $table->foreign('delivery_id')->references('id')->on('users')->onUpdate('cascade');
            $table->float('total_price');
            $table->softDeletes();
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
