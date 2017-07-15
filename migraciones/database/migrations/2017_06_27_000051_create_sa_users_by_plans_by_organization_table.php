<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaUsersByPlansByOrganizationTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_users_by_plans_by_organization';

    /**
     * Run the migrations.
     * @table sa_users_by_plans_by_organization
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_user');
            $table->integer('id_plan_by_organization');
            $table->integer('id_status_user_by_plan_by_organization');

            $table->index(["id_user"], 'fk_cr_users_has_sa_plans_by_organization_cr_users1_idx');

            $table->index(["id_status_user_by_plan_by_organization"], 'fk_sa_users_by_plans_by_organization_sa_status_user_by_plan_idx');

            $table->index(["id_plan_by_organization"], 'fk_cr_users_has_sa_plans_by_organization_sa_plans_by_organi_idx');


            $table->foreign('id_user', 'fk_cr_users_has_sa_plans_by_organization_cr_users1_idx')
                ->references('id_user')->on('cr_users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_plan_by_organization', 'fk_cr_users_has_sa_plans_by_organization_sa_plans_by_organi_idx')
                ->references('id_plan_by_organization')->on('sa_plans_by_organization')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_status_user_by_plan_by_organization', 'fk_sa_users_by_plans_by_organization_sa_status_user_by_plan_idx')
                ->references('id_status_user_by_plan_by_organization')->on('sa_status_user_by_plan_by_organization')
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
