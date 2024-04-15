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
        Schema::create('bachat_debit_receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('bachats_form')->onDelete('cascade');

            $table->string('receipt_no')->nullable();
            $table->date('member_date');
            $table->integer('deposit')->nullable();
            $table->string('total_amount_words')->nullable();
            $table->integer('debit_balance')->nullable();
            $table->string('debit_total_amount_words')->nullable();
            $table->decimal('old_interest', 11, 2)->change();
            $table->decimal('last_month_interest', 11, 2)->change();
            $table->decimal('total_interest', 11, 2)->change();
            $table->integer('debit_interest')->nullable();
            $table->decimal('last_cash_deposit', 11, 2)->change();
            $table->integer('cash_income')->nullable();
            $table->integer('interest_on_withdrawn_deposits')->nullable();
            $table->decimal('amount_of_interest_withdrawn', 11, 2)->change()->nullable();
            $table->integer('cash_500')->nullable();
            $table->integer('cash_200')->nullable();
            $table->integer('cash_100')->nullable();
            $table->integer('cash_50')->nullable();
            $table->integer('cash_20')->nullable();
            $table->integer('cash_10')->nullable();
            $table->integer('cash_5')->nullable();
            $table->integer('cash_1')->nullable();
            $table->string('note')->nullable();
            $table->integer('login_id');

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bachat_debit_receipts');
    }
};