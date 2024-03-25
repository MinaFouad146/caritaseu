<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_assessments', function (Blueprint $table) {

            // $table->bigIncrements('ind_id');
            $table->id();

            $table->string('family_income_resources')->nullable();
            $table->string('family_expenses')->nullable();
            $table->string('accommodation_type')->nullable();
            $table->text('family_summary')->nullable();
            $table->string('family_level')->nullable();
            $table->float('medical_contributions')->nullable();
            $table->string('home_visit')->nullable();



            $table->foreignId('eu_no_id')
                ->constrained('eu_files')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreignId('created_by')
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
        Schema::dropIfExists('social_assessments');
    }
};
