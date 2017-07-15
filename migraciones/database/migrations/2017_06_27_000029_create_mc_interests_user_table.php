<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcInterestsUserTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'mc_interests_user';

    /**
     * Run the migrations.
     * @table mc_interests_user
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_interests');
            $table->integer('id_participant');

            $table->index(["id_interests"], 'fk_mc_interests_user_mc_interests1_idx');

            $table->index(["id_participant"], 'fk_mc_interests_user_cr_users1_idx');


            $table->foreign('id_interests', 'fk_mc_interests_user_mc_interests1_idx')
                ->references('id')->on('mc_interests')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_participant', 'fk_mc_interests_user_cr_users1_idx')
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
