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
        Schema::create('bachat_receipt', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('bachats_form')->onDelete('cascade');

            $table->string('receipt_no');
            $table->date('member_date');
            $table->integer('total_amount');
            $table->string('total_amount_words');
            $table->integer('cash_2000')->nullable();
            $table->integer('cash_500')->nullable();
            $table->integer('cash_200')->nullable();
            $table->integer('cash_100')->nullable();
            $table->integer('cash_50')->nullable();
            $table->integer('cash_20')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bachat_receipt');
    }
};
