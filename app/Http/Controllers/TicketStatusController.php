<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketStatus;


class TicketStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TicketStatus = TicketStatus::all();
        return view('home',['page'=>'ticket-status.list','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> $TicketStatus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home',['page'=>'ticket-status.add','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> []]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'status_type' => 'required'
        ]);

        $input = $request->all();

        TicketStatus::create($input);

        return redirect()->route('ticket-status.index');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticketStatus = TicketStatus::find($id);
        return view('home',['page'=>'ticket-status.edit','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> $ticketStatus]);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $student = TicketStatus::findOrFail($id);

        $this->validate($request, [
            'status_type' => 'required'
        ]);

        $input = $request->all();

        $student->fill($input)->save();

        return redirect()->route('ticket-status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TicketType = TicketStatus::find($id);
        $TicketType->delete();
        return redirect()->route('ticket-status.index');
    }
}
