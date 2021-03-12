<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('us', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('sheName');
            $table->string('heName');
            $table->longText('sheDescription');
            $table->longText('heDescription');
            $table->string('shePic');
            $table->string('hePic');
            $table->enum('SheSex', [0, 1])->default('1');
            $table->enum('heSex', [0, 1])->default('0');
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
        Schema::dropIfExists('us');
    }
}
