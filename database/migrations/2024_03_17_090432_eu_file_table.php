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
            $table->bigInteger('eu_no')->autoIncrement()->startingValue(999);

            $table->string('Open_File_Location')->nullable();
            $table->string('Referral_From')->nullable();
            $table->string('Referral_no')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->text('address')->nullable();

            $table->foreignId('created_by')
                ->nullable()
                ->constrained('admins')
                ->onUpdate('cascade')
                ->onDelete('restrict');


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
