<?php namespace Khalil\Elearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTopicsTable extends Migration
{
    public function up()
    {
        Schema::create('khalil_elearning_topics', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('name');
            
            $table->timestamps();

            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('khalil_elearning_courses');

          
        });
    }

    public function down()
    {
        Schema::dropIfExists('khalil_elearning_topics');
    }
}
