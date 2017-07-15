<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrStateTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_state';

    /**
     * Run the migrations.
     * @table cr_state
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_state');
            $table->string('name', 45);
            $table->integer('id_country');

            $table->index(["id_country"], 'fk_cr_state_cr_countries1_idx');


            $table->foreign('id_country', 'fk_cr_state_cr_countries1_idx')
                ->references('id_country')->on('cr_countries')
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
