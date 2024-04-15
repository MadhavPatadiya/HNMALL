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
        Schema::create('bachats_form', function (Blueprint $table) {
            $table->id();

            $table->string('member_no');

            $table->date('member_date');

            $table->string('member_image')->nullable();
            $table->string('heir_image_1')->nullable();
            $table->string('heir_image_2')->nullable();

            $table->string('mr');

            $table->integer('age');

            $table->string('village');

            $table->mediumText('address');

            $table->string('taluk');
            $table->string('member_business');

            $table->varchar('mobile_no_1');
            $table->varchar('mobile_no_2')->nullable();

            $table->string('city');

            $table->string('heir_name_1')->nullable();
            $table->integer('age_1')->nullable();
            $table->string('relationship_with_member_1')->nullable();


            $table->string('heir_name_2')->nullable();
            $table->integer('age_2')->nullable();
            $table->string('relationship_with_member_2')->nullable();

            $table->integer('percentage');

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
        Schema::dropIfExists('bachats_form');
    }
};
