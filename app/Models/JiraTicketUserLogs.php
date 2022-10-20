<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JiraTicketUserLogs extends Model
{
    use HasFactory;

    protected $table = 'ticket_logs';

    protected $fillable = ['*'];


}
