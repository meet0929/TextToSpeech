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
          Schema::create('paygw_stripe_customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->string('customerid', 100);
            $table->timestamps();
            
            // Define foreign key constraint for userid
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            
            // Add unique constraint for customerid
            $table->unique('customerid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::dropIfExists('paygw_stripe_customers');
    }
};
