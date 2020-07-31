<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->float('x_length');
            $table->float('y_width');
            $table->float('z_height');
            $table->unsignedBigInteger('zone_id')
                ->nullable();

            $table->foreign('zone_id')
                ->references('id')
                ->on('zones');

            $table->float('initial_x');
            $table->float('initial_y');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectors');
    }
}
