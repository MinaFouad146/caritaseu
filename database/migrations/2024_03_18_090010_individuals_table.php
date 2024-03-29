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
        Schema::create('individuals', function (Blueprint $table) {

            // $table->bigIncrements('ind_id');
            $table->id();


            $table->string('name')->nullable();
            $table->string('personal_info')->nullable();
            $table->string('education_info')->nullable();
            $table->string('work_info')->nullable();

            $table->foreignId('eu_no_id')
                ->constrained('eu_files')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreignId('country_id')
                ->constrained('countries')
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
        Schema::dropIfExists('individuals');
    }
};
