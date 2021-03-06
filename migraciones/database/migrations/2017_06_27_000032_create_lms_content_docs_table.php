<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLmsContentDocsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'lms_content_docs';

    /**
     * Run the migrations.
     * @table lms_content_docs
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('url', 150);
            $table->integer('id_content');

            $table->index(["id_content"], 'fk_lms_content_docs_lms_content1_idx');


            $table->foreign('id_content', 'fk_lms_content_docs_lms_content1_idx')
                ->references('id')->on('lms_content')
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
