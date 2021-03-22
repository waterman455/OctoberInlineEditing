<?php namespace Markomweb\Gallerie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarkomwebGallerie extends Migration
{
    public function up()
    {
        Schema::create('markomweb_gallerie_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('markomweb_gallerie_');
    }
}
