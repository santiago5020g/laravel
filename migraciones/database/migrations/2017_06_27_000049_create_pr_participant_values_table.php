<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrParticipantValuesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'pr_participant_values';

    /**
     * Run the migrations.
     * @table pr_participant_values
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_value');
            $table->string('value')->nullable();
            $table->integer('id_field');
            $table->integer('id_participant');

            $table->index(["id_participant"], 'fk_pr_participant_values_pr_participants1_idx');

            $table->index(["id_field"], 'fk_pr_participant_values_pr_participant_fields1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('id_field', 'fk_pr_participant_values_pr_participant_fields1_idx')
                ->references('id_field')->on('pr_participant_fields')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_participant', 'fk_pr_participant_values_pr_participants1_idx')
                ->references('id_participant')->on('pr_participants')
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
