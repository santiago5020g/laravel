<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrUserPhonesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_user_phones';

    /**
     * Run the migrations.
     * @table cr_user_phones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_user_phones');
            $table->string('phone', 45);
            $table->integer('id_user');
            $table->integer('id_user_phone_type');

            $table->index(["id_user"], 'fk_cr_user_phones_cr_users1_idx');

            $table->index(["id_user_phone_type"], 'fk_cr_user_phones_cr_user_phone_types1_idx');


            $table->foreign('id_user', 'fk_cr_user_phones_cr_users1_idx')
                ->references('id_user')->on('cr_users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_user_phone_type', 'fk_cr_user_phones_cr_user_phone_types1_idx')
                ->references('id_user_phone_type')->on('cr_user_phone_types')
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
