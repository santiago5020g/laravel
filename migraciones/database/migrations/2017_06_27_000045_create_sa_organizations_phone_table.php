<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaOrganizationsPhoneTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_organizations_phone';

    /**
     * Run the migrations.
     * @table sa_organizations_phone
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_organization_phone');
            $table->string('phone', 45);
            $table->integer('id_organization');
            $table->integer('id_organization_phone_type');

            $table->index(["id_organization"], 'fk_sa_organizations_phone_sa_organizations1_idx');

            $table->index(["id_organization_phone_type"], 'fk_sa_organizations_phone_sa_organizations_phone_type1_idx');


            $table->foreign('id_organization', 'fk_sa_organizations_phone_sa_organizations1_idx')
                ->references('id_organization')->on('sa_organizations')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_organization_phone_type', 'fk_sa_organizations_phone_sa_organizations_phone_type1_idx')
                ->references('id_organization_phone_type')->on('sa_organizations_phone_type')
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
