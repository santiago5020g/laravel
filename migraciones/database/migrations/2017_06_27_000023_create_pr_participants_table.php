<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrParticipantsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'pr_participants';

    /**
     * Run the migrations.
     * @table pr_participants
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_participant');
            $table->string('doc_number', 45)->nullable();
            $table->dateTime('birth_date')->nullable();
            $table->integer('id_user');
            $table->integer('id_gender');
            $table->integer('id_document');
            $table->integer('id_status');
            $table->integer('edit_mode')->nullable()->default('1');

            $table->index(["id_document"], 'fk_pr_participants_pr_documenttypes1_idx');

            $table->index(["id_user"], 'fk_pr_participants_cr_users1_idx');

            $table->index(["id_gender"], 'fk_pr_participants_pr_genders1_idx');

            $table->index(["id_status"], 'fk_pr_participants_pr_participant_status1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('id_user', 'fk_pr_participants_cr_users1_idx')
                ->references('id_user')->on('cr_users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_gender', 'fk_pr_participants_pr_genders1_idx')
                ->references('id_gender')->on('pr_genders')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_document', 'fk_pr_participants_pr_documenttypes1_idx')
                ->references('id_document')->on('pr_documenttypes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_status', 'fk_pr_participants_pr_participant_status1_idx')
                ->references('id_status')->on('pr_participant_status')
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
