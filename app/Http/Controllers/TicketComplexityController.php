<?php

namespace App\Http\Controllers;

use App\Models\TicketComplexity;
use Illuminate\Http\Request;

class TicketComplexityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TicketStatus = TicketComplexity::all();
        return view('home',['page'=>'ticket-complexity.list','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> $TicketStatus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home',['page'=>'ticket-complexity.add','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> []]);

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
            'complexity' => 'required'
        ]);

        $input = $request->all();

        TicketComplexity::create($input);

        return redirect()->route('ticket-complexity.index');    }

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
        $ticketStatus = TicketComplexity::find($id);
        return view('home',['page'=>'ticket-complexity.edit','header'=> 'header', 'footer'=> 'footer','aside'=>[1,2,4],'data'=> $ticketStatus]);

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

        $student = TicketComplexity::findOrFail($id);

        $this->validate($request, [
            'complexity' => 'required'
        ]);

        $input = $request->all();

        $student->fill($input)->save();

        return redirect()->route('ticket-complexity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TicketType = TicketComplexity::find($id);
        $TicketType->delete();
        return redirect()->route('ticket-complexity.index');
    }
}
