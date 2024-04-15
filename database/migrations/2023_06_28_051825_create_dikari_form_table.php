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
        Schema::create('dikari_form', function (Blueprint $table) {
            $table->id();

            $table->string('member_image')->nullable();
            $table->string('heir_image_1')->nullable();
            $table->string('daughter_image')->nullable();

            $table->string('member_no');

            $table->string('receipt_no')->nullable();

            $table->string('status')->default('active');

            $table->date('member_date');

            $table->string('mr');

            $table->integer('age');

            $table->string('village');

            $table->mediumText('address');

            $table->string('taluk');
            $table->string('member_business');

            $table->string('mobile_no_1');
            $table->string('mobile_no_2')->nullable();

            $table->string('city');

            $table->string('heir_name_1');
            $table->integer('age_1');
            $table->string('relationship_with_member_1');

            $table->string('daughter_name');
            $table->string('relationship_with_member_2');
            $table->date('birth_date_of_daughter');
            $table->integer('age_2');

            $table->date('amount_date')->nullable();
            $table->integer('worth_kariyavar')->nullable();
            $table->integer('kariyavar_amount')->nullable();
            $table->integer('fix_amount')->nullable();
            $table->string('fix_amount_word')->nullable();

            $table->string('daughter_sign_image')->nullable();
            $table->string('member_sign_image')->nullable();
            $table->string('heir_sign_image_1')->nullable();
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
        Schema::dropIfExists('dikari_form');
    }
};