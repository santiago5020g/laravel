<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaFooterLandingPagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_footer_landing_pages';

    /**
     * Run the migrations.
     * @table sa_footer_landing_pages
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_footer_landing_page');
            $table->string('name_social_network', 45);
            $table->string('icon_social_network', 45);
            $table->string('link_social_network');
            $table->integer('id_landing_page');

            $table->index(["id_landing_page"], 'fk_sa_footer_landing_pages_sa_landing_pages1_idx');


            $table->foreign('id_landing_page', 'fk_sa_footer_landing_pages_sa_landing_pages1_idx')
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
