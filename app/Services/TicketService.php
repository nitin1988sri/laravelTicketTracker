<?php

namespace App\Services;

use App\Models\JiraTicket;
use App\Models\TicketType;
use App\Models\TicketComplexity;
use App\Models\User;
use App\Models\TicketStatus;
use App\Models\JiraTicketAdditionalInfomations;
use App\Models\JiraTicketUserLogs;
use Illuminate\Support\Facades\DB;

use Exception;





class TicketService
{
    public $ticketType;
    public $ticketComplexity;
    public $users;
    public $ticketStatuses;
    public  $ticketList;
    public function __construct()
    {

        $this->ticketType =  array_flip($this->arrayManupulation(TicketType::select('id', 'ticket_type')->where('status', 1)->get()->toArray(), 'id', 'ticket_type'));
        $this->ticketComplexity = array_flip($this->arrayManupulation(TicketComplexity::select('id', 'complexity')->where('status', 1)->get()->toArray(), 'id', 'complexity'));
        $this->users = array_flip($this->arrayManupulation(User::select('id', 'name')->where('status', 1)->get()->toArray(), 'id', 'name'));
        $this->ticketStatuses =  array_flip($this->arrayManupulation(TicketStatus::select('id', 'status_type')->where('status', 1)->get()->toArray(), 'id', 'status_type'));
    }

    public function arrayManupulation($arr, $firstkey, $secondKey)
    {
        $result = [];
        foreach ($arr as $v) {
            $result[$v[$firstkey]] = $v[$secondKey];
        }
        return $result;
    }

    public function saveTicket($records)
    {
        $dataToSaveForJiraTicketAdditionalInfo = [];
        $dataToSaveTicketLog = [];
        if ($records[0][0] == 'Ticket Id') {
            unset($records[0]);
        }
        foreach ($records as $key => $record) {
            $isTicetExit= '';
            $jiraTicket = new JiraTicket();
            $jiraTicket->ticket_id = trim($record[0])!=''?trim($record[0]):null;
            if( $jiraTicket->ticket_id){
            try{
             $isTicetExit = JiraTicket::where('ticket_id', '=', $jiraTicket->ticket_id)->firstOrFail();
             $isTicetExit = isset($isTicetExit->id)?$isTicetExit->id:NULL;
            }catch(Exception $e){
            $jiraTicket->user_id = strlen(trim($record[3]))>0 ? (int)$this->users[trim($record[3])] : null;
            $jiraTicket->save();
            $dataToSaveForJiraTicketAdditionalInfo['jira_tickets_id'] = $jiraTicket->id;
            $dataToSaveForJiraTicketAdditionalInfo['user_id'] = strlen(trim($record[3]))>0 ? (int)$this->users[trim($record[3])] : null;
            $dataToSaveForJiraTicketAdditionalInfo['ticket_type'] = strlen(trim($record[1]))>0 ?$this->ticketType[$record[1]] : null;
            $dataToSaveForJiraTicketAdditionalInfo['complexity'] =  strlen(trim($record[5]))>0 ?$this->ticketComplexity[$record[5]] : null;
            $dataToSaveForJiraTicketAdditionalInfo['planned_start_date'] = strlen(trim($record[6]))>0 || trim($record[6]) ? trim($record[6])  :  null;
            $dataToSaveForJiraTicketAdditionalInfo['planned_end_date'] = strlen(trim($record[7]))>0 ? trim($record[7]): null;
            $dataToSaveForJiraTicketAdditionalInfo['planned_efforts'] = strlen(trim($record[8]))>0 ? trim($record[8]):  null;
            $dataToSaveForJiraTicketAdditionalInfo['actual_start_date'] = strlen(trim($record[9]))>0 ? trim($record[9]) : null;
            $dataToSaveForJiraTicketAdditionalInfo['actual_end_date'] = strlen(trim($record[10]))>0 ? trim($record[10]) : null;
            $dataToSaveForJiraTicketAdditionalInfo['actual_efforts'] = strlen(trim($record[11]))>0 ? trim($record[11]) : null;
            $isTicetExit = $this->saveTicketAdditionInforamtion($isTicetExit, $dataToSaveForJiraTicketAdditionalInfo);
          }
            $dataToSaveTicketLog['jira_tickets_id'] =  $isTicetExit;
            $dataToSaveTicketLog['user_id'] = strlen(trim($record[3]))>0 ? (int)$this->users[trim($record[3])] : null;
            $dataToSaveTicketLog['status_type'] =  strlen(trim($record[4]))>0 ?$this->ticketStatuses[trim($record[4])] : null;
            $dataToSaveTicketLog['log_date'] = strlen(trim($record[12]))>0 ? date('Y-m-d',strtotime(trim($record[12]))) : null;
            $dataToSaveTicketLog['time_start'] =strlen( trim($record[13]))>0 ? date('h:s', strtotime(trim($record[13]))) : null;
            $dataToSaveTicketLog['time_end'] =  strlen(trim($record[14]))>0 ? date('h:s',strtotime(trim($record[14]))) : null;
            $dataToSaveTicketLog['time_taken'] = strlen(trim($record[15]))>0 ? date('h:s',strtotime(trim($record[15]))) : null;
            $dataToSaveTicketLog['comment'] = strlen(trim($record[16]))>0 ? trim($record[16]) : null;
            $this->saveTicketLogInformation($dataToSaveTicketLog);
        }
    }
    }

    public function saveTicketAdditionInforamtion($isTicetExit,$dataToSaveForJiraTicketAdditionalInfo)
    {
        $isTicetExit = '';
        $TicketAdditionInforamtion = new JiraTicketAdditionalInfomations();
        $TicketAdditionInforamtion->jira_tickets_id = $dataToSaveForJiraTicketAdditionalInfo['jira_tickets_id'];
        $TicketAdditionInforamtion->ticket_type     = $dataToSaveForJiraTicketAdditionalInfo['ticket_type'];
        $TicketAdditionInforamtion->user_id         = $dataToSaveForJiraTicketAdditionalInfo['user_id'];
        $TicketAdditionInforamtion->complexity      = $dataToSaveForJiraTicketAdditionalInfo['complexity'];
        $TicketAdditionInforamtion->planned_start_date = date('Y-m-d', strtotime($dataToSaveForJiraTicketAdditionalInfo['planned_start_date'])) ;
        $TicketAdditionInforamtion->planned_end_date   = date('Y-m-d', strtotime($dataToSaveForJiraTicketAdditionalInfo['planned_end_date']));
        $TicketAdditionInforamtion->planned_efforts    = $dataToSaveForJiraTicketAdditionalInfo['planned_efforts'];
        $TicketAdditionInforamtion->actual_start_date  = date('Y-m-d',strtotime($dataToSaveForJiraTicketAdditionalInfo['actual_start_date']));
        $TicketAdditionInforamtion->actual_end_date    = date('Y-m-d',strtotime($dataToSaveForJiraTicketAdditionalInfo['actual_end_date']));
        $TicketAdditionInforamtion->actual_efforts     = $dataToSaveForJiraTicketAdditionalInfo['actual_efforts'];
        try{
           $isTicetExit =JiraTicketAdditionalInfomations::where('jira_tickets_id', '=',  $isTicetExit)->firstOrFail();
           $isTicetExit = isset($isTicetExit->jira_tickets_id)??NULL;
           }catch(Exception $e){
            try{
             $TicketAdditionInforamtion->Save();
             $isTicetExit = isset($TicketAdditionInforamtion->id)?$TicketAdditionInforamtion->id:NULL;
            }
            catch(Exception $e){
              throw new Exception($e);
             }
        }
        return  $isTicetExit;
    }
    public function saveTicketLogInformation($dataToSaveTicketLog)
    {
        $JiraTicketUserLogs = new JiraTicketUserLogs();
        $JiraTicketUserLogs->jira_tickets_id = $dataToSaveTicketLog['jira_tickets_id'];
        $JiraTicketUserLogs->user_id =        $dataToSaveTicketLog['user_id'];
        $JiraTicketUserLogs->status_type    = $dataToSaveTicketLog['status_type'];
        $JiraTicketUserLogs->log_date       = $dataToSaveTicketLog['log_date'];
        $JiraTicketUserLogs->time_start     = $dataToSaveTicketLog['time_start'];
        $JiraTicketUserLogs->time_end       = $dataToSaveTicketLog['time_end'];
        $JiraTicketUserLogs->time_taken     = $dataToSaveTicketLog['time_taken'];
        $JiraTicketUserLogs->time_taken     = $dataToSaveTicketLog['time_taken'];
        $JiraTicketUserLogs->comment        = $dataToSaveTicketLog['comment'];
        try{
            $JiraTicketUserLogs->save();
           }catch(Exception $e){
            throw new Exception($e);
        }
    }

    public function ticketList()
    {
        if( auth()->user()->role == 1){
          $this->ticketList = JiraTicket::with(['ticketAdditionInfo', 'ticketLogs'])->orderBy('id','desc')->paginate(15);
        }else{
          $this->ticketList = JiraTicket::where('user_id', auth()->user()->id)->with(['ticketAdditionInfo', 'ticketLogs'])->orderBy('id','desc')->paginate(15);
        }
        $this->ticketType = array_flip( $this->ticketType);
        $this->ticketComplexity = array_flip( $this->ticketComplexity);
        $this->users = array_flip( $this->users);
        $this->ticketStatuses = array_flip( $this->ticketStatuses);
        return $this;
    }



    public function getTicketDetailsBy($id)
    {
        $this->ticketList =JiraTicket::where('id', $id)->with('ticketAdditionInfo','ticketLogs')->orderBy('id','desc')->get()->toArray();
        $this->ticketType = array_flip( $this->ticketType);
        $this->ticketComplexity = array_flip( $this->ticketComplexity);
        $this->users = array_flip( $this->users);
        $this->ticketStatuses = array_flip( $this->ticketStatuses);
        return $this;
    }

    public function ticketinfo($request, $id){
        if($id){
            $ticketinfo =  JiraTicket::find($id);
        }else{
            $ticketinfo =  new JiraTicket();
        }
        $ticketinfo->ticket_id =   $request['ticket_id'];
        $ticketinfo->user_id = $request['user_id'];
        if($ticketinfo->save()){
            return $ticketinfo->id;
        } else{
            return false;
        }
    }


    public function ticketAdditionalInfo($request, $id){

        if($id){
            $ticketAdditionalInfo =  JiraTicketAdditionalInfomations::find($id);
        }if(is_null($ticketAdditionalInfo) || empty($id)){
            $ticketAdditionalInfo =  new JiraTicketAdditionalInfomations();
        }
        $ticketAdditionalInfo->planned_start_date =   $request['planned_start_date']!='1970-01-01' && $request['planned_start_date']!=''?$request['planned_start_date']:null;
        $ticketAdditionalInfo->planned_end_date =   $request['planned_end_date']!='1970-01-01' && $request['planned_end_date']!=''?$request['planned_end_date']:null;
        $ticketAdditionalInfo->planned_efforts =   $request['planned_efforts'];
        $ticketAdditionalInfo->actual_start_date = $request['actual_start_date']!='1970-01-01' && $request['actual_start_date']!='' ?$request['actual_start_date']:null;
        $ticketAdditionalInfo->actual_end_date =   $request['actual_end_date']!='1970-01-01' && $request['actual_end_date']!='' ?$request['actual_end_date']:null;
        $ticketAdditionalInfo->actual_efforts = $request['actual_efforts'];
        $ticketAdditionalInfo->jira_tickets_id = $id;
        $ticketAdditionalInfo->ticket_type = $request['ticketType'];
        $ticketAdditionalInfo->complexity = $request['ticketComplexity'];


        if(!$ticketAdditionalInfo->save()); return false;

    }

    public function saveTicketLog($logDataTosave,  $ticketId, $id){
               if($id){
               $logData =  JiraTicketUserLogs::find($id);
               }else{
                $logData =  new JiraTicketUserLogs();
               }
               $logData->log_date =   $logDataTosave['log_date'];
               $logData->jira_tickets_id = $ticketId;
               $logData->user_id  =   $logDataTosave['user_id'];
               $logData->status_type= $logDataTosave['status_type'];
               $logData->time_start = $logDataTosave['time_start'];
               $logData->time_end =   $logDataTosave['time_end'];
               $logData->time_taken = $logDataTosave['time_taken'];
               $logData->comment =    $logDataTosave['comment'];
               $logData->save();

    }


    public function clearTables(){
        DB::table('ticket_logs')->delete();
        DB::statement("ALTER TABLE  ticket_logs AUTO_INCREMENT = 1");
        DB::table('ticket_additional_info')->delete();
        DB::statement("ALTER TABLE  ticket_additional_info AUTO_INCREMENT=  1");
        DB::table('jira_tickets')->delete();
        DB::statement("ALTER TABLE  jira_tickets AUTO_INCREMENT =  1");
    }
}
