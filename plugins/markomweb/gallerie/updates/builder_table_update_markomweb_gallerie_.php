<?php namespace Markomweb\Gallerie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarkomwebGallerie extends Migration
{
    public function up()
    {
        Schema::table('markomweb_gallerie_', function($table)
        {
            $table->dropColumn('year');
        });
    }
    
    public function down()
    {
        Schema::table('markomweb_gallerie_', function($table)
        {
            $table->integer('year')->nullable();
        });
    }
}
