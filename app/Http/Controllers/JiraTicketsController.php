<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Services\TicketService;
use Shuchkin\SimpleXLSX;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Redis;

use Illuminate\Filesystem\Cache;
use SebastianBergmann\Environment\Console;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class JiraTicketsController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $ticketService;

    public function __construct(TicketService $ticketService)
    {
        $this->ticketService = $ticketService;
    }

    public function upload(Request $request)
    {
          //dd(Redis::set('key', "test"));
         // dd(Redis::get('key'));
          $data = $this->ticketService->ticketList();
          return view('home',['page'=>'jira-tickets.ticketList','data'=> $data]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
          ]);
          $code ='';
          $message = '';
          if ($request->hasfile('file')) {
              $file  = $request->file('file');
              try{
              if ( $xlsx = SimpleXLSX::parse($file) ) {
                try{
                 $usccess = $this->ticketService->saveTicket($xlsx->rows());
                 if($usccess){
                 $code = 200;
                 $message = "File successfully uploaded";
                 }
                }catch(Exception $e){
                    $code = $e->getCode();
                    $message = $e->getMessage();
                }
            } else {
                throw new Exception(SimpleXLSX::parseError());
            }
              }catch(Exception $e){
                $code = $e->getCode();
                $message = $e->getMessage();
            }
        }
         echo $message;die;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
          $data = $this->ticketService->ticketList();
          return view('home',['page'=>'jira-tickets.ticketList','data'=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id=null)
    {
        $data = $this->ticketService->getTicketDetailsBy($id);
        if(strlen($request->segment(4)) > 0){
        $key = array_search($request->segment(4), array_column($data->ticketList[0]['ticket_logs'], 'id'));
        $data->editLog = $data->ticketList[0]['ticket_logs'][$key];
        }

        return view('home',['page'=>'jira-tickets.show','data'=> $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
        public function updateLog(Request $request, $ticketId, $id=null){
            $unserializeData = [];
            parse_str($request->data,$unserializeData);
            try{
                $this->ticketService->saveTicketLog($unserializeData,  $ticketId, $id);
                echo true;
            }catch(Exception $e){
                   echo false;
            }
        }


        public function addNewTicket(Request $request, $id=null){
           $id = $this->ticketinfo($request, $id);
            $this->ticketAdditionalInfo($request, $id);
        }



        public function ticketinfo(Request $request, $id)
        {
            $unserializeData = [];
            parse_str($request->data,$unserializeData);
            try{
                return $this->ticketService->ticketinfo($unserializeData,$id);
            }catch(Exception $e){
               echo false;
            }
        }


        public function ticketAdditionalInfo(Request $request, $id)
        {
            $unserializeData = [];
            parse_str($request->data,$unserializeData);
            try{
                $this->ticketService->ticketAdditionalInfo($unserializeData,$id);
                echo true;
            }catch(Exception $e){
                   echo false;
            }
        }


    public function clearTables()
    {
       if($this->ticketService->clearTables()){
        Session::flash('message', 'Data clean succesfully!');
       }
       return redirect()->to('/upload');
    }
}
