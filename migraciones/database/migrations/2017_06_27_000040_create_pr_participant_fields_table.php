<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrParticipantFieldsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'pr_participant_fields';

    /**
     * Run the migrations.
     * @table pr_participant_fields
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_field');
            $table->string('name')->nullable();
            $table->integer('type')->nullable();
            $table->integer('attribute')->nullable();
            $table->integer('id_organization');

            $table->index(["id_organization"], 'fk_pr_participant_fields_sa_organizations1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('id_organization', 'fk_pr_participant_fields_sa_organizations1_idx')
                ->references('id_organization')->on('sa_organizations')
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
