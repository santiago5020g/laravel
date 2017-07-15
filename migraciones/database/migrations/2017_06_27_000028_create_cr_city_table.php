<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrCityTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_city';

    /**
     * Run the migrations.
     * @table cr_city
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_city');
            $table->string('name', 45);
            $table->integer('id_state');

            $table->index(["id_state"], 'fk_cr_city_cr_state1_idx');


            $table->foreign('id_state', 'fk_cr_city_cr_state1_idx')
                ->references('id_state')->on('cr_state')
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
