<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('savings_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('metal_type');
            $table->decimal('monthly_amount', 10, 2);
            $table->string('currency', 3);
            $table->unsignedTinyInteger('execution_day');
            $table->string('status')->default('active');
            $table->timestamps();

            $table->index(['user_id', 'status']);
            $table->index(['metal_type', 'currency']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('savings_plans');
    }
};