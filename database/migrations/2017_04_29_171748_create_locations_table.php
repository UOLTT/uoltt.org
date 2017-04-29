<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->unsignedInteger('system_id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('celestial_type_id');
            $table->unsignedInteger('allegiance_id');
            $table->unsignedInteger('affiliation_id');

            $table->foreign('system_id')
                ->references('id')
                ->on('systems');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('celestial_type_id')
                ->references('id')
                ->on('celestial_types');

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
        Schema::dropIfExists('locations');
    }
}
