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
        Schema::create('deposite_form', function (Blueprint $table) {
            $table->id();

            $table->string('status')->default('active');

            $table->string('member_no');

            $table->date('member_date');
            $table->date('maturity_period');

            $table->string('member_image')->nullable();
            $table->string('heir_image_1')->nullable();
            $table->string('heir_image_2')->nullable();

            $table->integer('total_amount');

            $table->mediumText('words');

            $table->string('mr');

            $table->integer('age');

            $table->string('village');

            $table->mediumText('address');

            $table->string('taluk');
            $table->string('member_business');

            $table->varchar('mobile_no_1');
            $table->varchar('mobile_no_2');

            $table->string('city');

            $table->string('heir_name_1')->nullable();
            $table->integer('age_1')->nullable();
            $table->string('relationship_with_member_1')->nullable();


            $table->string('heir_name_2')->nullable();
            $table->integer('age_2')->nullable();
            $table->string('relationship_with_member_2')->nullable();

            // $table->tinyInteger('double_amount')->default('0')->comment('0=Visible,1=Hidden');
            // $table->tinyInteger('twice')->default('0')->comment('0=Visible,1=Hidden');
            // $table->tinyInteger('refunded')->default('0')->comment('0=Visible,1=Hidden');
            $table->string('vyaj_amount');
            $table->string('vyaj_amount_words');

            $table->string('double_amount');

            $table->integer('cash_500')->nullable();
            $table->integer('cash_200')->nullable();
            $table->integer('cash_100')->nullable();
            $table->integer('cash_50')->nullable();
            $table->integer('cash_20')->nullable();
            $table->integer('cash_1')->nullable();

            $table->string('note');


            $table->string('member_sign_image')->nullable();
            $table->string('heir_sign_image_1')->nullable();
            $table->string('heir_sign_image_2')->nullable();
            $table->string('sign_on_behalf_of_jan_jagaruti_image')->nullable();
            $table->integer('login_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposite_form');
    }
};
