<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BugStatusController extends Controller
{
    public function index(){
        return view('bug-status.index');
    }
}
