<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_users';

    /**
     * Run the migrations.
     * @table cr_users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_user');
            $table->string('username', 45);
            $table->string('password');
            $table->string('remember_token')->nullable()->default(null);
            $table->string('name', 100);
            $table->string('second_name', 45)->nullable();
            $table->string('lastname', 45);
            $table->string('email', 45);
            $table->date('created_at');
            $table->integer('id_user_status');

            $table->index(["id_user_status"], 'fk_cr_users_cr_user_status1_idx');

            $table->unique(["username"], 'username_UNIQUE');


            $table->foreign('id_user_status', 'fk_cr_users_cr_user_status1_idx')
                ->references('id_user_status')->on('cr_user_status')
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
