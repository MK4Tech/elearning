<?php namespace Khalil\Elearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('khalil_elearning_subjects', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');            
            $table->string('name')->unique();
            $table->string('slug')->unique()->index(); 
            $table->timestamps();

            $table->integer('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('khalil_elearning_subject_parents');

           
                     
         
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('khalil_elearning_subjects');
    }
}
