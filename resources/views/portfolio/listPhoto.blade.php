@extends('session.layouts')
<title>Barber Shop | Lista de Fotos</title>
@section('content')
<script type="text/javascript">
        function Confirmdelete(){
            var respuesta = confirm('¿Estas seguro de que quieres eliminar esta foto?');
            if (respuesta == true){
                return true;
            }else{
                return false;
            }
        }
 </script>
    <div class="row justify-content-center">
        <div class="col-lg-7 col-lg-6 col-sm-10">
            <div class="section_tittle">
                <h2>Bienvenido {{ Auth::user()->name }}</h2>
                <p>Tabla De Las Fortos De Los Cortes</p>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-danger">
            <h6 class="m-0 font-weight-bold text-white"><a href="#" data-toggle="modal" data-target="#create" class="genric-btn info-border circle arrow">Subir Archivo <i class="fas fa-images"></i></a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><b style="color: blue;">Corte</b></th>
                        <th><b style="color: blue;">Nombre DeL Corte</b></th>
                        {{--<th><b style="color: blue;">Descripcion</b></th>--}}
                        <th><b style="color: blue;">Precio</b></th>
                        <th><b style="color: blue;">Fecha de Registro</b></th>
                        <th><b style="color: blue;">Modificar <i class="fas fa-edit"></i></b></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $num=0; ?>
                    @foreach($photos as $fact)
                        <?php $num++; ?>
                        <tr>
                            <td><b style="color: black;"><img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($fact->file) }}" width="50" height="50" alt=""></b></td>
                            <td><b style="color: black;">{{ $fact->name }}</b></td>
                            {{--<td><b style="color: black;">{{ $fact->bodyCorte }}</b></td>--}}
                            <td><b style="color: black;">${{ number_format($fact->price) }}</b></td>
                            <td><b style="color: black;">{{ $fact->created_at->diffForHumans() }}</b></td>
                            <form method="POST" action="{{ route('photo.destroy', $fact->id) }}">
                                @csrf @method('DELETE')
                                <td><b style="color: black;">
                                        <a href="#"  class="btn btn-success btn-circle" data-toggle="modal" data-target="#view<?=$num?>"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#update<?=$num?>"><i class="fas fa-pen-square"></i></a>
                                        <a href="#" class="btn btn-warning btn-circle" data-toggle="modal" data-target="#updatePhoto<?=$num?>"><i class="fas fa-image"></i></a>
                                        <button onclick='return Confirmdelete()' class="btn btn-danger btn-circle" ><i class="fas fa-trash"></i></button>
                                    </b>
                                </td>
                            </form>
                        </tr>
                        {{-- Modales --}}
                        @include('portfolio.viewDescription')
                        @include('portfolio.update')
                        @include('portfolio.updatePhoto')
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="create" role="dialog" style="margin-top: 67px;">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <!-- Modal Header -->
                <div class="modal-header bg-danger text-white">
                    <h4 class="modal-title" id="myModalLabel" style="color: white;">Nuevo Archivo</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true" style="color: white;">×</span>
                        <span class="sr-only">Close</span>
                    </button>

                </div>

                <!-- Modal Body -->
                <div class="modal-body bg-white">

                    <div class="section-top-border">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
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
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="genric-btn primary-border circle arrow" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="genric-btn info-border circle arrow" onclick="submitContactForm()">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
