<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModerationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moderation_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('moderatable_id');
            $table->string('moderatable_type');
            $table->boolean('active')->default(true);
            $table->unsignedInteger('opener_id');
            $table->string('opener_comments');
            $table->string('moderator_comments')->default('');
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
        Schema::dropIfExists('moderation_requests');
    }
}
