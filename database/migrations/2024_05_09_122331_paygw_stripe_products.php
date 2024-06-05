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
       Schema::create('paygw_stripe_products', function (Blueprint $table) {
            $table->id();
            $table->string('component', 100)->nullable();
            $table->string('paymentarea', 50)->nullable();;
            $table->unsignedBigInteger('itemid')->nullable();
            $table->string('productid', 100)->nullable();
            $table->timestamps();
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paygw_stripe_products');
    }
};
