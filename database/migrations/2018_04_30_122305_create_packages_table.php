<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('packageUrl');
            $table->string('imgUrl');
            $table->string('imgName');
            $table->string('name');
            $table->integer('price');
            $table->text('description');
            $table->string('features1');
            $table->string('features2');
            $table->string('features3');
            $table->string('features4');
            $table->string('features5');
            $table->string('features6');
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
        Schema::dropIfExists('packages');
    }
}
