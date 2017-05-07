<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('allegiance_id');
            $table->unsignedInteger('affiliation_id');
            $table->string('name');

            $table->foreign('location_id')
                ->references('id')
                ->on('locations');

            $table->foreign('allegiance_id')
                ->references('id')
                ->on('allegiances');

            $table->foreign('affiliation_id')
                ->references('id')
                ->on('affiliations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
