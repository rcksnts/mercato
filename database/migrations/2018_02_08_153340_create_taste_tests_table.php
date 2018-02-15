<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasteTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taste_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('food_concept', 1024);
            $table->string('products', 1024);
            $table->string('business_account', 256);
            $table->string('email', 176);
            $table->string('mobile', 13);
            $table->string('found_via', 32);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taste_tests');
    }
}
