<?php namespace Aero\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroManagerEditor extends Migration
{
    public function up()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->text('landing_promos');
            $table->dropColumn('portada_promos');
        });
    }
    
    public function down()
    {
        Schema::table('aero_manager_editor', function($table)
        {
            $table->dropColumn('landing_promos');
            $table->string('portada_promos', 191);
        });
    }
}
