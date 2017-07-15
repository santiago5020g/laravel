<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaPlansTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_plans';

    /**
     * Run the migrations.
     * @table sa_plans
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_plan');
            $table->string('name', 45);
            $table->integer('duration');
            $table->integer('user_cost_globoavans');
            $table->integer('user_cost_rutan');
            $table->integer('id_plan_status');

            $table->index(["id_plan_status"], 'fk_sa_plans_sa_plan_status1_idx');


            $table->foreign('id_plan_status', 'fk_sa_plans_sa_plan_status1_idx')
                ->references('id_plan_status')->on('sa_plan_status')
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
