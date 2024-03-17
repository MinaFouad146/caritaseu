<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eu_files', function (Blueprint $table) {
            $table->bigInteger('eu_no')->autoIncrement()->startingValue(1000);

            $table->string('Open_File_Location')->nullable();
            $table->string('Referral_From')->nullable();
            $table->string('Referral_no')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('area')->nullable();
            $table->text('address')->nullable();

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
        Schema::dropIfExists('eu_file');
    }
};
