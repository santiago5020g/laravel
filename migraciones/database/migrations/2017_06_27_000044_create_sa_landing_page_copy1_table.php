<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaLandingPageCopy1Table extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_landing_page_copy1';

    /**
     * Run the migrations.
     * @table sa_landing_page_copy1
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_landing_page');
            $table->integer('id_organization');

            $table->index(["id_organization"], 'fk_sa_landing_page_sa_organizations1_idx');


            $table->foreign('id_organization', 'fk_sa_landing_page_sa_organizations1_idx')
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
