<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JiraTicket extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id'];

    public function ticketAdditionInfo()
    {
        return $this->hasOne(JiraTicketAdditionalInfomations::class, 'jira_tickets_id', 'id');
    }

    // public function ticketType()
    // {
    //     return $this->hasManyThrough(TicketType::class, JiraTicketAdditionalInfomations::class, 'id','ticket_type');
    // }

    // public function ticketComplexity()
    // {
    //     return $this->hasManyThrough(TicketComplexity::class, JiraTicketAdditionalInfomations::class,'id', 'complexity');
    // }
    // public function assignee()
    // {
    //     return $this->hasOneThrough( User::class,  JiraTicketAdditionalInfomations::class, 'user_id', 'id');
    // }

    public function ticketLogs()
    {
        return $this->hasManyThrough(JiraTicketUserLogs::class, JiraTicketAdditionalInfomations::class,'jira_tickets_id', 'jira_tickets_id');
    }
}
