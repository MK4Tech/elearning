<?php namespace Khalil\Elearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMediaTable extends Migration
{
    public function up()
    {
        Schema::create('khalil_elearning_media', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('path');
            $table->timestamps();


            $table->integer('lesson_id')->unsigned();
            $table->foreign('lesson_id')->references('id')->on('khalil_elearning_lessons');             
        });
    }

    public function down()
    {
        Schema::dropIfExists('khalil_elearning_media');
    }
}
