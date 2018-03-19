<?php namespace Sikhub\RestaurantMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSikhubRestaurantmenuItems extends Migration
{
    public function up()
    {
        Schema::create('sikhub_restaurantmenu_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->double('price', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sikhub_restaurantmenu_items');
    }
}
