@extends('session.layouts')
<title>Barber Shop | Barberos</title>
@section('content')
    <script type="text/javascript">
    function Confirmdelete(){
    var respuesta = confirm('¿Estas seguro de que quieres eliminar este barbero?');
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
                <p>Tabla De Las Barberos</p>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-danger">
            <h6 class="m-0 font-weight-bold text-white"><a href="#" data-toggle="modal" data-target="#createBarber" class="genric-btn info-border circle arrow">Nuevo Barbero <i class="fas fa-user-plus"></i></a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><b style="color: blue;">Barbero</b></th>
                        <th><b style="color: blue;">Nombre</b></th>
                        {{--<th><b style="color: blue;">Descripcion</b></th>--}}
                        <th><b style="color: blue;">Facebook</b></th>
                        <th><b style="color: blue;">Instagram</b></th>
                        <th><b style="color: blue;">Fecha de Registro</b></th>
                        <th><b style="color: blue;">Modificar <i class="fas fa-edit"></i></b></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $num=0; ?>
                    @foreach($barber as $fact)
                        <?php $num++; ?>
                        <tr>
                            <td><b style="color: black;"><img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($fact->photo) }}" width="50" height="50" alt=""></b></td>
                            <td><b style="color: black;">{{ $fact->name }}</b></td>
                            {{--<td><b style="color: black;">{{ $fact->bodyCorte }}</b></td>--}}
                            <td><b style="color: black;">{{ $fact->facebook }}</b></td>
                            <td><b style="color: black;">{{ $fact->instagram }}</b></td>
                            <td><b style="color: black;">{{ $fact->created_at->diffForHumans() }}</b></td>
                            <form method="POST" action="{{ route('portfolio.destroyBarber', $fact->id) }}">
                                @csrf @method('DELETE')
                                <td><b style="color: black;">
                                        <a href="#"  class="btn btn-success btn-circle" data-toggle="modal" data-target="#viewBarber<?=$num?>"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#updateBarber<?=$num?>"><i class="fas fa-pen-square"></i></a>
                                        <a href="#" class="btn btn-warning btn-circle" data-toggle="modal" data-target="#updatePhoto<?=$num?>"><i class="fas fa-image"></i></a>
                                        <button onclick='return Confirmdelete()' class="btn btn-danger btn-circle" ><i class="fas fa-trash"></i></button>
                                    </b>
                                </td>
                            </form>
                        </tr>
                        {{-- Modales --}}
                        @include('portfolio.barbers.virewBarber')
                        @include('portfolio.barbers.updateBarber')
                        @include('portfolio.barbers.updatePhotoBarber')
                    @endforeach
                    </tbody>
                </table>
                @include('portfolio.barbers.createBarber')
            </div>
        </div>
    </div>
@endsection
