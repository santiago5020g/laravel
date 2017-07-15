<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrRolesByUserTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_roles_by_user';

    /**
     * Run the migrations.
     * @table cr_roles_by_user
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_user');
            $table->integer('id_rol');

            $table->index(["id_rol"], 'fk_cr_users_has_cr_roles_cr_roles1_idx');

            $table->index(["id_user"], 'fk_cr_users_has_cr_roles_cr_users1_idx');


            $table->foreign('id_user', 'fk_cr_users_has_cr_roles_cr_users1_idx')
                ->references('id_user')->on('cr_users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_rol', 'fk_cr_users_has_cr_roles_cr_roles1_idx')
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
