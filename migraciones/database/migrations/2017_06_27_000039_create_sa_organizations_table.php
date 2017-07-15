<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaOrganizationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_organizations';

    /**
     * Run the migrations.
     * @table sa_organizations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_organization');
            $table->string('business_name', 100);
            $table->string('email', 45);
            $table->string('address', 100)->default('');
            $table->string('nit', 20);
            $table->string('slug', 50);
            $table->string('skype', 45)->nullable();
            $table->integer('id_organization_status');
            $table->integer('id_location');
            $table->integer('id_organization_parent')->nullable();

            $table->index(["id_organization_status"], 'fk_sa_organizations_sa_organizations_status1_idx');

            $table->index(["id_location"], 'fk_sa_organizations_cr_location1_idx');

            $table->index(["id_organization_parent"], 'fk_sa_organizations_sa_organizations1_idx');


            $table->foreign('id_organization_status', 'fk_sa_organizations_sa_organizations_status1_idx')
                ->references('id_organization_status')->on('sa_organizations_status')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_location', 'fk_sa_organizations_cr_location1_idx')
                ->references('id_location')->on('cr_location')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_organization_parent', 'fk_sa_organizations_sa_organizations1_idx')
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
