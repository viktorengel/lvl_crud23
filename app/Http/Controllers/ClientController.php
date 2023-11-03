<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(5);
        return view("client.index")
                ->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("client.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|max:25',
            'due'=> 'required|gte:1',
            'comments'=> 'required'
        ]);

        $client = Client::create($request->only('name','due','comments'));

        Session::flash('mensaje', 'Registro creado con exito!');

        return redirect()->route('client.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view("client.form")
                ->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name'=> 'required|max:25',
            'due'=> 'required|gte:1',
            'comments'=> 'required'
        ]);

        $client ->name = $request['name'];
        $client ->due = $request['due'];
        $client ->comments = $request['comments'];
        $client ->save();

        Session::flash('mensaje', 'Registro editado con exito!');

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        Session::flash('mensaje', 'Registro eliminado con exito!');

        return redirect()->route('client.index');
    }
}
