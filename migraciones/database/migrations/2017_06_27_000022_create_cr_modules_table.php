<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrModulesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_modules';

    /**
     * Run the migrations.
     * @table cr_modules
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_module');
            $table->string('name', 20);
            $table->integer('id_module_status');
            $table->string('tag_icon', 100)->nullable();

            $table->index(["id_module_status"], 'fk_cr_modules_cr_module_status_idx');

            $table->unique(["name"], 'name_UNIQUE');


            $table->foreign('id_module_status', 'fk_cr_modules_cr_module_status_idx')
                ->references('id_module_status')->on('cr_module_status')
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
