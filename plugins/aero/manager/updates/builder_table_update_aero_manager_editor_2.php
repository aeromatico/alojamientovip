<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerEditor2 extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->text('landing_promos')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->text('landing_promos')->nullable(false)->change();
        });
    }
}
