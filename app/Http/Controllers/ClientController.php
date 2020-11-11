<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('clients.tableClient', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formCreate()
    {
        return view('clients.formCreate');
    }

    public function create(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'age' => 'required',
            'direction' => 'required',
            'phone' => 'required',

        ],[

            'name.required' => 'El Campo Nombre Es Obligatorio.',
            'age.required' => 'El Campo Edad Es Obligatorio.',
            'direction.required' => 'El Campo Dirección Es Obligatorio.',
            'phone.required' => 'El Campo Telefono Es Obligatorio.',

        ]);

        $client = new Client;

        $client->name_complete=$request->name;
        $client->age=$request->age;
        $client->direction=$request->direction;
        $client->phone=$request->phone;

        $client->save();

        return back()->with('status', 'El cliente fue creado correctamente!!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return back();
    }
}
