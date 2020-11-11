<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{

    //   barberos
    public function indexbarber()
    {
        $barber = Barber::all();

        return view('portfolio.barbers.listBarber', compact('barber'));
    }

    public function createBarber(Request $request)
    {
        $request->validate([

            'photo'     => 'required|image',
            'name'      => 'required',
            'facebook'  => 'required',
            'instagram' => 'required',

        ],[

            'photo.required'      => 'Es Obligatorio Subir Una Imagen',
            'name.required'      => 'El Nombre Del Barbero Es Obligatorio',
            'facebook.required'  => 'El Facebook Del Barbero Es Obligatoria',
            'instagram.required' => 'El Instagram Del Barbero Es Obligatorio',

        ]);

        $barber = new Barber;

        $barber->photo=$request->file('photo')->store('public/photosBarbers');
        $barber->name=$request->name;
        $barber->facebook=$request->facebook;
        $barber->instagram=$request->instagram;

        $barber->save();

        return back();
    }

    public function updateBarber(Request $request, $id)
    {
        $request->validate([

            'name'      => 'required',
            'facebook'  => 'required',
            'instagram' => 'required',

        ],[

            'name.required'      => 'El Nombre Del Barbero Es Obligatorio',
            'facebook.required'  => 'El Facebook Del Barbero Es Obligatoria',
            'instagram.required' => 'El Instagram Del Barbero Es Obligatorio',

        ]);

        $barber = Barber::find($id);

        $barber->name = $request->name;
        $barber->facebook = $request->facebook;
        $barber->instagram = $request->instagram;

        $barber->save();

        return back();
    }

    public function updatePhotoBarber(Request $request, $id)
    {
        $request->validate([
            'photo'      => 'required',
        ],[
            'photo.required'      => 'Debes Subir Una Foto',
        ]);

        $barber = Barber::find($id);

        if(Storage::delete($barber->photo)) {
            $barber->photo=$request->file('photo')->store('public/photosBarbers');

            $barber->save();
        }


        return back();
    }

    public function destroyBarber($id)
    {
        $barber = Barber::findOrFail($id);
        if(Storage::delete($barber->photo)){
            $barber->delete();
        }

        return back();
    }

    //Fotos de los cortes
    public function index()
    {
        $photos = Photo::all();

        return view('portfolio.listPhoto', compact('photos'));
    }


    public function create()
    {
        return view('portfolio.savePhotos');
    }


    public function store(Request $request)
    {
        $request->validate([

            'file'      => 'required|image',
            'name'      => 'required',
            'bodyCorte' => 'required',
            'price'     => 'required',

        ],[

            'file.required'      => 'Es Obligatorio Subir Una Imagen',
            'name.required'      => 'El Nombre Del Corte Es Obligatorio',
            'bodyCorte.required' => 'La Descripcion Es Obligatoria',
            'price.required'     => 'El Precio Es Obligatorio',

        ]);

        $photo = new Photo;

        $photo->file=$request->file('file')->store('public/photosCortes');
        $photo->name=$request->name;
        $photo->bodyCorte=$request->bodyCorte;
        $photo->price=$request->price;

        $photo->save();

        return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'      => 'required',
            'bodyCorte' => 'required',
            'price'     => 'required',

        ],[
            'name.required'      => 'El Nombre Del Corte Es Obligatorio',
            'bodyCorte.required' => 'La Descripcion Es Obligatoria',
            'price.required'     => 'El Precio Es Obligatorio',

        ]);

        $photo = Photo::find($id);

        $photo->name = $request->name;
        $photo->bodyCorte = $request->bodyCorte;
        $photo->price = $request->price;

        $photo->save();

        return back();
    }

    public function updatePhoto(Request $request, $id)
    {
        $request->validate([
            'file'      => 'required',
        ],[
            'file.required'      => 'Debes Subir Una Foto',
        ]);

        $photo = Photo::find($id);

        if(Storage::delete($photo->file)) {
            $photo->file=$request->file('file')->store('public/photosCortes');

            $photo->save();
        }


        return back();
    }


    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        if(Storage::delete($photo->file)){
            $photo->delete();
        }

        return back();
    }
}
