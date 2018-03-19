<?php namespace Sikhub\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSikhubRestaurantmenuSections extends Migration
{
    public function up()
    {
        Schema::create('sikhub_restaurantmenu_sections', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sikhub_restaurantmenu_sections');
    }
}
