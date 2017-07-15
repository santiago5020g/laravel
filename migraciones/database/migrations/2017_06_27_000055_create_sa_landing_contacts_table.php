<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaLandingContactsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_landing_contacts';

    /**
     * Run the migrations.
     * @table sa_landing_contacts
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_landing_contact');
            $table->string('telephone', 45);
            $table->string('address', 45);
            $table->string('email', 45);
            $table->integer('id_landing_page');

            $table->index(["id_landing_page"], 'fk_sa_landing_contacts_sa_landing_pages1_idx');


            $table->foreign('id_landing_page', 'fk_sa_landing_contacts_sa_landing_pages1_idx')
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
