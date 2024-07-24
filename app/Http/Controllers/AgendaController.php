<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class AgendaController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('agenda',compact('events'));
    }
}
