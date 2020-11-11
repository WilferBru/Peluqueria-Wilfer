<div class="modal fade" id="update<?=$num?>" role="dialog" style="margin-top: 67px;">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <!-- Modal Header -->
            <div class="modal-header bg-danger text-white">
                <h4 class="modal-title" id="myModalLabel" style="color: white;">Actualizar {{ $fact->name }} <img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($fact->file) }}" width="50" height="50" alt=""></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>

            </div>

            <!-- Modal Body -->
            <div class="modal-body bg-white">
                <div class="section-top-border">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form action="{{ route('portfolio.update',  $fact->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf @method('PATCH')
                            {{--<div class="mt-10">--}}
                            {{--    <input type="file" name="file" placeholder="" value="{{ Storage::url($fact->file) }}" required>--}}
                            {{--    {!! $errors->first('file','<small style="color: red;">:message</small>') !!}--}}
                            {{--</div>--}}
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="Nombre del corte" value="{{ $fact->name }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
                                    {!! $errors->first('name','<small style="color: red;">:message</small>') !!}
                                </div>
                                <div class="mt-10">
                                    <textarea class="single-textarea" name="bodyCorte" placeholder="Descripcion del corte" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Message'" required>{{ $fact->bodyCorte }}</textarea>
                                    {!! $errors->first('bodyCorte','<small style="color: red;">:message</small>') !!}
                                </div>
                                <div class="mt-10">
                                    <input type="number" name="price" placeholder="Precio del corte" value="{{ $fact->price }}" onfocus="this.placeholder = ''" required onblur="this.placeholder = 'Nombre Completo'" class="single-input">
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
