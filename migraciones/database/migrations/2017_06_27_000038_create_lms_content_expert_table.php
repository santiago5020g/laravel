<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLmsContentExpertTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'lms_content_expert';

    /**
     * Run the migrations.
     * @table lms_content_expert
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_expert');
            $table->integer('id_content');

            $table->index(["id_content"], 'fk_lms_content_expert_lms_content1_idx');

            $table->index(["id_expert"], 'fk_lms_content_expert_ep_expert1_idx');


            $table->foreign('id_expert', 'fk_lms_content_expert_ep_expert1_idx')
                ->references('id')->on('ep_expert')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_content', 'fk_lms_content_expert_lms_content1_idx')
                ->references('id')->on('lms_content')
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
