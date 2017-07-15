<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpExpertFieldsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ep_expert_fields';

    /**
     * Run the migrations.
     * @table ep_expert_fields
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('value')->nullable();
            $table->integer('id_expert');
            $table->integer('id_field');

            $table->index(["id_expert"], 'fk_ep_expert_fields_ep_expert1_idx');

            $table->index(["id_field"], 'fk_ep_expert_fields_ep_fields1_idx');


            $table->foreign('id_expert', 'fk_ep_expert_fields_ep_expert1_idx')
                ->references('id')->on('ep_expert')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_field', 'fk_ep_expert_fields_ep_fields1_idx')
                ->references('id')->on('ep_fields')
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
