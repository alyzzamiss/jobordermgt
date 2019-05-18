<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jo_title', 255);
            $table->string('jo_details', 255);
            $table->date('date_due');
            $table->decimal('amount', 50, 2);
            $table->string('status', 255)->nullable();
            $table->string('approved_by')->nullable();
            $table->integer('app_item_id')->unsigned();
            $table->integer('account_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('job_orders', function($table) {
            $table->foreign('app_item_id')->references('id')->on('app_details')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_orders');
    }
}
