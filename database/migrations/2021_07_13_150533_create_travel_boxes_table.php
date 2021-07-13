<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_boxes', function (Blueprint $table) {
            $table->id();
            $table->varchar('brand', 30);
            $table->varchar('place', 50);
            $table->varchar('duration', 10);
            $table->text('offer');
            $table->string('poster')->nullable();
            $table->decimal('price');
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
        Schema::dropIfExists('travel_boxes');
    }
}
