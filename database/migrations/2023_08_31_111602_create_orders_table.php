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
            $table->timestamps();
            $table->string('orderId')->unique();
            $table->string("hash");
            $table->string('status')->default('pending_payment');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('street');
            $table->string('zip');
            $table->string('city');
            $table->string('phone')->nullable();
            $table->string('donation')->default('0');
            $table->boolean('optin')->default(false);
            $table->string('orderUrl', 2048);
            $table->integer('reminders')->default(0);
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
