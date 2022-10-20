<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketAdditionalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_additional_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jira_tickets_id');
            $table->unsignedBigInteger('ticket_type');
            $table->unsignedBigInteger('complexity');
            $table->date('planned_start_date');
            $table->date('planned_end_date');
            $table->time('planned_efforts');
            $table->date('actual_start_date');
            $table->date('actual_end_date');
            $table->time('actual_efforts');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign('jira_tickets_id')->references('id')->on('jira_tickets');
            $table->foreign('ticket_type')->references('id')->on('ticket_types');
            $table->foreign('complexity')->references('id')->on('ticket_complexity');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_additional_info');
    }
}
