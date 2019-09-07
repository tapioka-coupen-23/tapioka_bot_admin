<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('prefecture_id');
            $table->bigInteger('city_id');
            $table->string('address1');
            $table->string('address2');
            $table->string('address_building');
            $table->double("lat");
            $table->double("lon");
            $table->string("tel_num");
            $table->string("post_code");
            $table->string("url");
            $table->text('description');
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
        Schema::dropIfExists('stores');
    }
}
