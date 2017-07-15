<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaLandingTestimoniesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_landing_testimonies';

    /**
     * Run the migrations.
     * @table sa_landing_testimonies
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_landing_testimony');
            $table->string('testimony');
            $table->string('author');
            $table->integer('id_landings_status');
            $table->integer('id_landing_page');

            $table->index(["id_landings_status"], 'fk_sa_landing_testimonies_sa_landings_status1_idx');

            $table->index(["id_landing_page"], 'fk_sa_landing_testimonies_sa_landing_pages1_idx');


            $table->foreign('id_landings_status', 'fk_sa_landing_testimonies_sa_landings_status1_idx')
                ->references('id_landings_status')->on('sa_landings_status')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_landing_page', 'fk_sa_landing_testimonies_sa_landing_pages1_idx')
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
