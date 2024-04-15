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
        Schema::create('roj_med', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->date('date');
            $table->string('reason');
            $table->string('cash_type');
            $table->string('amount');
            $table->integer('login_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roj_med');
    }
};
