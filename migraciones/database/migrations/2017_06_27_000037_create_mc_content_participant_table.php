<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcContentParticipantTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'mc_content_participant';

    /**
     * Run the migrations.
     * @table mc_content_participant
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_content');
            $table->integer('id_user');

            $table->index(["id_user"], 'fk_mc_content_participant_cr_users1_idx');

            $table->index(["id_content"], 'fk_mc_content_participant_lms_content1_idx');


            $table->foreign('id_content', 'fk_mc_content_participant_lms_content1_idx')
                ->references('id')->on('lms_content')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_user', 'fk_mc_content_participant_cr_users1_idx')
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
