<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLmsContentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'lms_content';

    /**
     * Run the migrations.
     * @table lms_content
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 150);
            $table->string('title', 150);
            $table->string('text')->nullable();
            $table->string('summary')->nullable();
            $table->date('update_date')->nullable();
            $table->integer('status');
            $table->string('image', 100)->nullable()->default('none');
            $table->string('author')->nullable();
            $table->string('file_javascript', 200)->nullable();
            $table->integer('id_exam');
            $table->integer('id_sadmin');

            $table->index(["id_sadmin"], 'fk_lms_content_cr_users1_idx');

            $table->index(["id_exam"], 'fk_lms_content_ex_exams1_idx');


            $table->foreign('id_exam', 'fk_lms_content_ex_exams1_idx')
                ->references('id')->on('ex_exams')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_sadmin', 'fk_lms_content_cr_users1_idx')
                ->references('id_user')->on('cr_users')
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
