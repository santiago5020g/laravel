<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaPlansByOrganizationTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_plans_by_organization';

    /**
     * Run the migrations.
     * @table sa_plans_by_organization
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_plan_by_organization');
            $table->integer('id_organization');
            $table->integer('id_plan');
            $table->string('service_name', 45);
            $table->date('initial_date');
            $table->date('end_date');
            $table->integer('users_amount');

            $table->index(["id_plan"], 'fk_sa_organizations_has_sa_plans_sa_plans1_idx');

            $table->index(["id_organization"], 'fk_sa_organizations_has_sa_plans_sa_organizations1_idx');


            $table->foreign('id_organization', 'fk_sa_organizations_has_sa_plans_sa_organizations1_idx')
                ->references('id_organization')->on('sa_organizations')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_plan', 'fk_sa_organizations_has_sa_plans_sa_plans1_idx')
                ->references('id_plan')->on('sa_plans')
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
