<?php

namespace App\Http\Controllers;

use App\Models\TicketStatus;
use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $TicketTypes = TicketType::all();
        return view('home',['page'=>'ticket-type.list','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> $TicketTypes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home',['page'=>'ticket-type.add','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> []]);

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
            'ticket_type' => 'required'
        ]);

        $input = $request->all();

        TicketType::create($input);

        return redirect()->route('ticket-type.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function show(TicketType $ticketType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticketType = TicketType::find($id);
        return view('home',['page'=>'ticket-type.edit','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> $ticketType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = TicketType::findOrFail($id);

        $this->validate($request, [
            'ticket_type' => 'required'
        ]);

        $input = $request->all();

        $student->fill($input)->save();

        return redirect()->route('ticket-type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TicketStatus = TicketStatus::find($id);
        $TicketStatus->delete();
        return redirect()->route('ticket-status.index');
    }
}
