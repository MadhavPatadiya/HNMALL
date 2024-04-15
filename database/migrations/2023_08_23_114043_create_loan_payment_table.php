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
        Schema::create('loan_payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('deposite_form')->onDelete('cascade');

            $table->decimal('amount', 10, 2);
            $table->date('date');
            $table->string('receipt_no')->nullable();
            $table->string('amount_words');
            $table->decimal('old_interest', 10, 2)->nullable();
            $table->decimal('current_interest', 10, 2)->nullable();
            $table->decimal('total_interest', 10, 2)->nullable();
            $table->decimal('debit_interest', 10, 2)->nullable();
            $table->decimal('due_amount', 10, 2)->nullable();
            $table->decimal('remaining_amount', 10, 2)->nullable();
            $table->integer('cash_500')->nullable();
            $table->integer('cash_200')->nullable();
            $table->integer('cash_100')->nullable();
            $table->integer('cash_50')->nullable();
            $table->integer('cash_20')->nullable();
            $table->integer('cash_10')->nullable();
            $table->integer('cash_5')->nullable();
            $table->integer('cash_1')->nullable();
            $table->integer('login_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_payment');
    }
};
