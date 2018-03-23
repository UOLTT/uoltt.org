<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('commodity_id');
            $table->unsignedInteger('shop_id');
            $table->unsignedInteger('reported_by');
            $table->decimal('price', 8, 2);
            $table->unsignedInteger('quantity')->default(1);
            $table->timestamps();

            $table->foreign('commodity_id')
                ->references('id')
                ->on('commodities');

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops');

            $table->foreign('reported_by')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
