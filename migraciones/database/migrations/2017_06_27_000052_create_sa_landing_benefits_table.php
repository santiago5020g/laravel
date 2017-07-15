<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaLandingBenefitsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_landing_benefits';

    /**
     * Run the migrations.
     * @table sa_landing_benefits
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_landing_benefits');
            $table->string('title', 45);
            $table->string('content');
            $table->string('icon', 45);
            $table->integer('id_landing_page');
            $table->integer('id_landings_status');

            $table->index(["id_landings_status"], 'fk_sa_landing_benefits_sa_landings_status1_idx');

            $table->index(["id_landing_page"], 'fk_sa_landing_benefits_sa_landing_pages1_idx');


            $table->foreign('id_landing_page', 'fk_sa_landing_benefits_sa_landing_pages1_idx')
                ->references('id_landing_page')->on('sa_landing_pages')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_landings_status', 'fk_sa_landing_benefits_sa_landings_status1_idx')
                ->references('id_landings_status')->on('sa_landings_status')
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
