<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanzeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacanze', function (Blueprint $table) {
            $table->id();
            $table->string('address',100);
            $table->string('type',30);
            $table->string('name',100);
            $table->string('postal_code',10);
            $table->string('city',50);
            $table->string('region',50);
            $table->string('state',50);
            $table->tinyInteger('rating');
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('beds')->unsigned();
            $table->boolean('breakfast')->unsigned();
            $table->boolean('swimming_pool')->unsigned();
            $table->text('description')->nullable();
            $table->float('price',10,2);
            $table->float('kid_price',10,2);
            $table->boolean('is_avaiable')->default(1);
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
        Schema::dropIfExists('vacanze');
    }
}
