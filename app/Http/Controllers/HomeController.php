<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Client;
use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function indexCortes()
    {
        $cuts = Photo::all();
        return view('viewCuts', compact('cuts'));
    }

    public function welcome()
    {
        $paginator = Photo::paginate(6);
        $barber    = Barber::all();
        return view('welcome', compact('paginator', 'barber'));
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
}
