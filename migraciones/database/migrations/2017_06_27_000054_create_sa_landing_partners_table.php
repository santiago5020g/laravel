<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaLandingPartnersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_landing_partners';

    /**
     * Run the migrations.
     * @table sa_landing_partners
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_landing_partner');
            $table->string('logo', 45)->nullable();
            $table->integer('id_landing_page');

            $table->index(["id_landing_page"], 'fk_sa_landing_partners_sa_landing_pages1_idx');


            $table->foreign('id_landing_page', 'fk_sa_landing_partners_sa_landing_pages1_idx')
                ->references('id_landing_page')->on('sa_landing_pages')
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
