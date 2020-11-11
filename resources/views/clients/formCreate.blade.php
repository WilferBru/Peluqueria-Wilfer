@extends('layouts-guest')
<title>Barber Shop | Crear Nuevo Cleinte</title>
@section('content')
<div class="container">
<div class="section-top-border">
  <div class="row">
	<div class="col-lg-12 col-md-12">
		<h3 class="mb-30">Crar Nuevo Cliente</h3>
		<form action="{{ route('create') }}" method="POST">
		@csrf
			<div class="mt-10">
			  <input type="text" name="name" placeholder="Nombre Completo" value="{{ old('name') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
			  {!! $errors->first('name','<small style="color: red;">:message</small>') !!}
			</div>
			<div class="mt-10">
			  <input type="text" name="age" placeholder="Edad" value="{{ old('age') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Edad'" class="single-input">
			  {!! $errors->first('age','<small style="color: red;">:message</small>') !!}
			</div>
			<div class="mt-10">
			  <input type="text" name="direction" placeholder="Direccion" value="{{ old('direction') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Direccion'" class="single-input">
			  {!! $errors->first('direction','<small style="color: red;">:message</small>') !!}
			</div>
			<div class="mt-10">
			  <input type="number" name="phone" placeholder="Telefono" value="{{ old('phone') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Telefono'" class="single-input">
			  {!! $errors->first('phone','<small style="color: red;">:message</small>') !!}
			</div>
			<div class="mt-10">
			  <button class="genric-btn danger-border circle arrow" type="submit">Enviar</button>
			</div>
		</form>
	</div>
  </div>
</div>
</div>
@endsection
