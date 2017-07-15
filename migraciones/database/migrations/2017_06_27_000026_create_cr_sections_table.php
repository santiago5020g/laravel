<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrSectionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_sections';

    /**
     * Run the migrations.
     * @table cr_sections
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_section');
            $table->string('name', 45);
            $table->integer('id_section_parent')->nullable();
            $table->integer('id_section_status');
            $table->integer('id_module');

            $table->index(["id_section_status"], 'fk_cr_sections_cr_section_status1_idx');

            $table->index(["id_module"], 'fk_cr_sections_cr_modules1_idx');

            $table->index(["id_section_parent"], 'fk_cr_sections_cr_sections1_idx');


            $table->foreign('id_section_parent', 'fk_cr_sections_cr_sections1_idx')
                ->references('id_section')->on('cr_sections')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_section_status', 'fk_cr_sections_cr_section_status1_idx')
                ->references('id_section_status')->on('cr_section_status')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_module', 'fk_cr_sections_cr_modules1_idx')
                ->references('id_module')->on('cr_modules')
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
