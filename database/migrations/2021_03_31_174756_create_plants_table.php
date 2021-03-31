<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->string('plant')->nullable();
            $table->text('analysis')->nullable();
            $table->string('picturePath')->nullable();
            $table->float('sTemp')->nullable();
            $table->string('location')->nullable();
            $table->float('rainfall')->nullable();
            $table->float('averageTemp')->nullable();

            $table->softDeletes();

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
        Schema::dropIfExists('plants');
    }
}
