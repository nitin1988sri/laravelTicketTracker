<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jira_tickets_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_type');
            $table->date('log_date');
            $table->time('time_start');
            $table->time('time_end');
            $table->time('time_taken');
            $table->longText('comment');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign('jira_tickets_id')->references('id')->on('jira_tickets');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_type')->references('id')->on('ticket_statuses');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_logs');
    }
}
