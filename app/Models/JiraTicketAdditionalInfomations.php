<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JiraTicketAdditionalInfomations extends Model
{
    use HasFactory;

    protected $table = 'ticket_additional_info';

    protected $fillable = ['*'];

   
    public function JiraTicket()
    {
        return $this->belongsTo(JiraTicket::class, 'jira_tickets_id', 'id');
    }
}
