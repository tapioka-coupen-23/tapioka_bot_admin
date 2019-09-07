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
            $table->bigIncrements('id');
            $table->tinyInteger('prefecture_id');
            $table->bigInteger('city_id');
            $table->string("address1");
            $table->string("address2");
            $table->string("building_name");
            $table->string("post_code");
            $table->string("tel_num");
            $table->text("description")->nullable();
            $table->string("url");
            $table->double('lon');
            $table->double('lat');
            $table->timestamp('deleted_at')->nullable()->default(null);
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
