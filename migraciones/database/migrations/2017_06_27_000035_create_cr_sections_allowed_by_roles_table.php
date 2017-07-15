<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrSectionsAllowedByRolesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_sections_allowed_by_roles';

    /**
     * Run the migrations.
     * @table cr_sections_allowed_by_roles
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_section');
            $table->integer('id_rol');

            $table->index(["id_rol"], 'fk_cr_sections_has_cr_roles_cr_roles1_idx');

            $table->index(["id_section"], 'fk_cr_sections_has_cr_roles_cr_sections1_idx');


            $table->foreign('id_section', 'fk_cr_sections_has_cr_roles_cr_sections1_idx')
                ->references('id_section')->on('cr_sections')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_rol', 'fk_cr_sections_has_cr_roles_cr_roles1_idx')
                ->references('id_rol')->on('cr_roles')
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
