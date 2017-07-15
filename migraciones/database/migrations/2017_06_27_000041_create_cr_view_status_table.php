<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrViewStatusTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cr_view_status';

    /**
     * Run the migrations.
     * @table cr_view_status
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_view');
            $table->integer('id_organization');
            $table->integer('status');
            $table->integer('view');

            $table->index(["id_organization"], 'fk_cr_view_status_sa_organizations1_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('id_organization', 'fk_cr_view_status_sa_organizations1_idx')
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
