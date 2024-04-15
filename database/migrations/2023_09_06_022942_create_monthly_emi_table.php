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
        Schema::create('monthly_emi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('loan_emi_form')->onDelete('cascade');
            $table->date('date');
            $table->string('total_amount')->nullable();
            $table->string('remaining_loan_amount')->nullable();
            $table->string('loan_paid')->nullable();
            $table->string('interest_paid')->nullable();
            $table->string('login_id')->nullable();
            // $table->string('remaining_loan_interest')->nullable();
            // $table->string('remaining_total_loan_amount_cash')->nullable();
            // $table->string('remaining_loan_amount_cash')->nullable();
            // $table->string('remaining_loan_interest_cash')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_emi');
    }
};