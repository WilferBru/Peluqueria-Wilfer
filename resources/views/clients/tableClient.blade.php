@extends('session.layouts')
<title>Barber Shop | Cientes</title>
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7 col-lg-6 col-sm-10">
        <div class="section_tittle">
            {{-- <i class="fas fa-table fa-3x"></i> --}}
            <h2>Bienvenido {{ Auth::user()->name }}</h2>
            <p>Tabla de los Clientes</p>

            {{-- <p><?= money_format(10000)?> </p> --}}
        </div>
    </div>
</div>
 <div class="card shadow mb-4">
            <div class="card-header py-3 bg-danger">
              <h6 class="m-0 font-weight-bold text-white"><a href="#" data-toggle="modal" data-target="#create" class="genric-btn info-border circle arrow">Crear cliente <i class="fas fa-user-plus"></i></a></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><b style="color: #0000ff;">Nombre Completo</b></th>
                      <th><b style="color: #0000ff;">Edad </b></th>
                      <th><b style="color: #0000ff;">Direccion</b></th>
                      <th><b style="color: #0000ff;">Telefono</b></th>
                      <th><b style="color: #0000ff;">Fecha de Registro</b></th>
                      <th><b style="color: #0000ff;">Modificar <i class="fas fa-edit"></i></b></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><b style="color: blue;">Nombre Completo</b></th>
                      <th><b style="color: blue;">Edad </b></th>
                      <th><b style="color: blue;">Direccion</b></th>
                      <th><b style="color: blue;">Telefono</b></th>
                      <th><b style="color: blue;">Fecha de Registro</b></th>
                      <th><b style="color: blue;">Modificar <i class="fas fa-edit"></i></b></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($client as $date)
                    <tr>
                      <td><b style="color: black;">{{ $date->name_complete }}</b></td>
                      <td><b style="color: black;">{{ $date->age }}</b></td>
                      <td><b style="color: black;">{{ $date->direction }}</b></td>
                      <td><b style="color: black;">{{ $date->phone }}</b></td>
                      <td><b style="color: black;">{{ $date->created_at }}</b></td>
                       <form method="POST" action="{{ route('client.destroy', $date->id) }}">
                          @csrf @method('DELETE')
                      <td><b style="color: black;"><button class="genric-btn danger-border circle arrow" >Borrar <i class="fas fa-user-minus"></i></button></b></td>
                    </form>
                    </tr>
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
              <h4 class="modal-title" id="myModalLabel" style="color: white;">Crear Nuevo Cliente</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true" style="color: white;">×</span>
                    <span class="sr-only">Close</span>
                </button>

            </div>

            <!-- Modal Body -->
            <div class="modal-body bg-white">
                <p class="statusMsg"></p>
               <h3 class="mb-30" style="text-align: center;">Nuevo Cliente <i class="fas fa-user-plus"></i></h3>
    <form action="{{ route('client.create') }}" method="POST">
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
      {{-- <div class="mt-10">
        <button class="genric-btn danger-border circle arrow" type="submit">Enviar</button>
      </div>    --}}

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


