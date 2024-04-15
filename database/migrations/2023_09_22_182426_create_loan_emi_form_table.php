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
        Schema::create('loan_emi_form', function (Blueprint $table) {
            $table->id();
            $table->string('member_no');
            $table->date('member_date');
            $table->string('status')->default('active');


            $table->string('member_image')->nullable();
            $table->string('heir_image')->nullable();

            $table->string('mr');
            $table->integer('age');
            $table->string('village');
            $table->string('address');
            $table->string('taluk');
            $table->string('city');

            $table->string('member_business');
            $table->string('mobile_no_1');
            $table->string('mobile_no_2')->nullable();

            $table->string('jaminu_nam');
            $table->string('mobile_no_3');
            $table->string('jamin_member_no');

            $table->string('loan_type'); //

            //product
            $table->string('product_name')->nullable();
            $table->string('price')->nullable();
            $table->string('down_payment')->nullable();
            $table->string('loan_amount')->nullable(); //
            $table->string('total_amount')->nullable();
            $table->string('loan_time_period')->nullable();
            $table->string('Interest_amount')->nullable(); //
            $table->string('monthly_emi')->nullable();

            //Cash
            // $table->string('loan_amount_cash')->nullable(); //
            // $table->string('loan_time_period_cash')->nullable(); //
            // $table->string('Interest_amount_cash')->nullable(); //
            // $table->string('total_amount_cash')->nullable(); //
            // $table->string('monthly_emi_cash')->nullable(); //


            $table->string('member_sign_image')->nullable();
            $table->string('jamin_sign_image')->nullable();
            $table->string('jjg_sign_image_2')->nullable();
            $table->integer('login_id');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_emi_form');
    }
};
