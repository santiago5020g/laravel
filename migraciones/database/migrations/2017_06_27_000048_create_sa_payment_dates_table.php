<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaPaymentDatesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sa_payment_dates';

    /**
     * Run the migrations.
     * @table sa_payment_dates
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_payment_dates');
            $table->string('payment_name', 45);
            $table->date('payment_date');
            $table->decimal('payment_value');
            $table->string('attachment_route')->nullable();
            $table->integer('id_payment_date_status');
            $table->integer('id_plan_by_organization');

            $table->index(["id_plan_by_organization"], 'fk_sa_payment_dates_sa_plans_by_organization1_idx');

            $table->index(["id_payment_date_status"], 'fk_sa_payment_dates_sa_payment_date_status1_idx');


            $table->foreign('id_payment_date_status', 'fk_sa_payment_dates_sa_payment_date_status1_idx')
                ->references('id_payment_date_status')->on('sa_payment_date_status')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_plan_by_organization', 'fk_sa_payment_dates_sa_plans_by_organization1_idx')
                ->references('id_plan_by_organization')->on('sa_plans_by_organization')
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
