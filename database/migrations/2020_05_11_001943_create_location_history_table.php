<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('beacon_id')
                ->nullable();

            $table->foreign('beacon_id')
                ->references('id')
                ->on('beacons');

            $table->unsignedBigInteger('gateway_id')
                ->nullable();

            $table->foreign('gateway_id')
                ->references('id')
                ->on('gateways');

            $table->float('duration');
            $table->dateTime('location_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_history');
    }
}
