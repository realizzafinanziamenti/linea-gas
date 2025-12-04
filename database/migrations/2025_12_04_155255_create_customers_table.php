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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->ulid()->unique();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('customer_type')->default('privato');
            $table->string('company_name')->nullable();
            $table->string('vat_number')->nullable();

            // Campi indirizzo extra rispetto ad users (necessari per clienti)
            $table->string('civic_number')->nullable();
            $table->string('stair')->nullable();
            $table->string('floor')->nullable();
            $table->string('interior')->nullable();
            $table->string('locality')->nullable();
            $table->string('zone')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
