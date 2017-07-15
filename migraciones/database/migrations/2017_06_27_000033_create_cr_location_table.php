<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrLocationTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_location';

    /**
     * Run the migrations.
     * @table cr_location
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_location');
            $table->string('detail', 250);
            $table->integer('id_city');

            $table->index(["id_city"], 'fk_cr_location_cr_city1_idx');


            $table->foreign('id_city', 'fk_cr_location_cr_city1_idx')
                ->references('id_city')->on('cr_city')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
