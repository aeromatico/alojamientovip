<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroManagerFaqs extends Migration
{
    public function up()
    {
        Schema::create('aero_manager_faqs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('question')->nullable();
            $table->text('answer')->nullable();
            $table->string('page')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_manager_faqs');
    }
}
