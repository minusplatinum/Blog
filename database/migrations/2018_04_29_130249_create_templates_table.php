<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('imgUrl', []);
            $table->string('feature1');
            $table->string('feature2');
            $table->string('feature3');
            $table->string('feature4');
            $table->string('templateType');
            $table->string('img1Name');
            $table->string('img2Name');
            $table->string('img3Name');
            $table->string('img4Name');
            $table->string('img5Name');
            $table->string('img6Name');
            $table->string('templateUrl');
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
        Schema::dropIfExists('templates');
    }
}
