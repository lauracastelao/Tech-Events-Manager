<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index(){

        $data = Event::all();
        return view('home', compact('data'));
    }

    public function create(){
        return view('crud');
        //el formulario donde agregamos los datos
    }

    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        $events = new Event();
        $events->title = $request->post('title');
        $events->date = $request->post('date');
        $events->max_participants = $request->post('max participants');
        $events->description = $request->post('description');
        $events->save();

        return redirect()->route("events.index")->with("success", "Agregado con exito!");
    }

    public function show( Event $events){
        return view('welcome');
    }
}
