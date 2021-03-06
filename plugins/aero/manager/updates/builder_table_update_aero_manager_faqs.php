<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerFaqs extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_faqs', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('question')->change();
            $table->string('page')->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_faqs', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->string('question', 191)->change();
            $table->string('page', 191)->change();
        });
    }
}
