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
        Schema::create('paygw_stripe_webhooks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paymentaccountid')->nullable();
            $table->string('webhookid', 100)->nullable();
            $table->string('secret', 100)->nullable();
            $table->timestamps();
            
            // Define unique constraint for paymentaccountid
            $table->unique('paymentaccountid');
            
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paygw_stripe_webhooks');
    }
};
