<div class="modal fade" id="updateBarber<?=$num?>" role="dialog" style="margin-top: 67px;">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <!-- Modal Header -->
            <div class="modal-header bg-danger text-white">
                <h4 class="modal-title" id="myModalLabel" style="color: white;">Actualizar {{ $fact->name }} <img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($fact->photo) }}" width="50" height="50" alt=""></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>

            </div>

            <!-- Modal Body -->
            <div class="modal-body bg-white">
                <div class="section-top-border">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form action="{{ route('portfolio.updateBarber',  $fact->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf @method('PATCH')
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="Nombre del barbero" value="{{ $fact->name }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
                                    {!! $errors->first('name','<small style="color: red;">:message</small>') !!}
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="facebook" placeholder="Facebook del barbero" value="{{ $fact->facebook}}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
                                    {!! $errors->first('facebook','<small style="color: red;">:message</small>') !!}
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="instagram" placeholder="Instagram del barbero" value="{{ $fact->instagram }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
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
