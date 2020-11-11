<div class="modal fade" id="createBarber" role="dialog" style="margin-top: 67px;">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <!-- Modal Header -->
            <div class="modal-header bg-danger text-white">
                <h4 class="modal-title" id="myModalLabel" style="color: white;">Nuevo Barbero</h4>
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
                            <form action="{{ route('portfolio.createBarber') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-10">
                                    <input type="file" name="photo" placeholder="" value="{{ old('photo') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
                                    {!! $errors->first('photo','<small style="color: red;">:message</small>') !!}
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="Nombre del corte" value="{{ old('name') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
                                    {!! $errors->first('name','<small style="color: red;">:message</small>') !!}
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="facebook" placeholder="Facebook Del Barbero" value="{{ old('facebook') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Facebook Del Barbero'" class="single-input">
                                    {!! $errors->first('facebook','<small style="color: red;">:message</small>') !!}
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="instagram" placeholder="Instagarm Del Barbero" value="{{ old('instagram') }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Instagram Del Barbero'" class="single-input">
                                    {!! $errors->first('instagram','<small style="color: red;">:message</small>') !!}
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
