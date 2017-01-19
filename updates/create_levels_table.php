<?php namespace Khalil\Elearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLevelsTable extends Migration
{
    public function up()
    {
        Schema::create('khalil_elearning_levels', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique()->index();            
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('khalil_elearning_levels');
    }
}
