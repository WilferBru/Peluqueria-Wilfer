@extends('session.layouts')
<title>Barber Shop | Subir Fotos</title>
@section('content')
<div class="section-top-border">
  <div class="row">
	<div class="col-lg-12 col-md-12">
		<h3 class="mb-30">Subir Archivos.</h3>
		<form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
			<div class="mt-10">
			  <input type="file" name="file" placeholder="" value="{{ old('file') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
			  {!! $errors->first('file','<small style="color: red;">:message</small>') !!}
			</div>
			<div class="mt-10">
			  <input type="text" name="name" placeholder="Nombre del corte" value="{{ old('name') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
			  {!! $errors->first('name','<small style="color: red;">:message</small>') !!}
			</div>			
			<div class="mt-10">
				<textarea class="single-textarea" name="bodyCorte" value="{{ old('bodyCorte') }}" placeholder="Descripcion del corte" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Message'" required></textarea>
				{!! $errors->first('bodyCorte','<small style="color: red;">:message</small>') !!}
			</div>
			<div class="mt-10">
			  <input type="number" name="price" placeholder="Precio del corte" value="{{ old('price') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
			  {!! $errors->first('price','<small style="color: red;">:message</small>') !!}
			</div>
			<div class="mt-10">
			  <button class="genric-btn primary-border circle arrow" type="submit" onclick="alert()">Enviar</button>
			</div>
		</form>
	</div>					
  </div>
</div>
@endsection