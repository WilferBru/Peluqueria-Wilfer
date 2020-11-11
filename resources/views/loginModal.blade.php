<div class="modal fade" id="login" role="dialog" style="margin-top: 67px;">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <!-- Modal Header -->
            <div class="modal-header bg-danger text-white">
                <h4 class="modal-title" id="myModalLabel" style="color: white;"><img src="img/barbershop.png" alt="logo"></h4>
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
                            <center><h1>Iniciar sessión</h1></center>
                            <div class="container">
                                <h4>{!! $errors->first('email','<small style="color: red;">:message</small>') !!}
                                    {!! $errors->first('password','<small style="color: red;">:message</small>') !!}</h4>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mt-10">
                                    <input type="email" name="email" placeholder="Correo Electronico" value="{{ old('email') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Correo Electornico'" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Contraseña...'" class="single-input">
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
</div>
