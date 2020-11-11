@extends('session.layouts')
<title>Barber Shop | Administrador</title>
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7 col-lg-6 col-sm-10">
        <div class="section_tittle">
            <img src="img/section_tittle_icon.png" alt="icon">
            <h2>Bienvenido {{ Auth::user()->name }}</h2>
            <p>Empiece como administrador</p>
        </div>
    </div>
</div>
@endsection