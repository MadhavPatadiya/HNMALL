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
        Schema::create('loan_receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('deposite_form')->onDelete('cascade');

            $table->string('yojanano_prakar')->nullable();
            $table->string('receipt_no')->nullable();
            $table->date('date');
            $table->decimal('total_amount', 10, 2);
            $table->string('total_amount_words');
            $table->string('jaminanu_nam')->nullable();
            $table->varchar('mobile_no_3')->nullable();
            $table->integer('cash_500')->nullable();
            $table->integer('cash_200')->nullable();
            $table->integer('cash_100')->nullable();
            $table->integer('cash_50')->nullable();
            $table->integer('cash_20')->nullable();
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
        Schema::dropIfExists('loan_receipts');
    }
};
