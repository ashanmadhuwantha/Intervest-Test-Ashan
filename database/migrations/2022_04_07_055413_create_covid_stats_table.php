<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_covid_stat', function (Blueprint $table) {
            $table->id();
            $table->integer('local_new_cases')->nullable();
            $table->bigInteger('local_total_cases')->nullable();
            $table->integer('local_total_number_of_individuals_in_hospitals')->nullable();
            $table->integer('local_deaths')->nullable();
            $table->integer('local_new_deaths')->nullable();
            $table->bigInteger('local_recovered')->nullable();
            $table->bigInteger('local_active_cases')->nullable();
            $table->dateTime('update_date_time')->nullable();
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
        Schema::dropIfExists('tbl_covid_stat');
    }
}
