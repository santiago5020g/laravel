<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpExpertTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ep_expert';

    /**
     * Run the migrations.
     * @table ep_expert
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('birth_date')->nullable();
            $table->date('admition_date')->nullable();
            $table->integer('gender')->nullable();
            $table->integer('id_category');
            $table->integer('id_user');

            $table->index(["id_user"], 'fk_ep_expert_cr_users1_idx');

            $table->index(["id_category"], 'fk_ep_expert_ep_category1_idx');


            $table->foreign('id_category', 'fk_ep_expert_ep_category1_idx')
                ->references('id')->on('ep_category')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_user', 'fk_ep_expert_cr_users1_idx')
                ->references('id_user')->on('cr_users')
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
