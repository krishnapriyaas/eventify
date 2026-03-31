<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('metal_type');
            $table->decimal('total_invested', 12, 2)->default(0);
            $table->decimal('total_weight', 12, 4)->default(0);
            $table->timestamps();

            $table->unique(['user_id', 'metal_type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};