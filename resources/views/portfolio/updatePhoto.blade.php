<div class="modal fade" id="updatePhoto<?=$num?>" role="dialog" style="margin-top: 67px;">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <!-- Modal Header -->
            <div class="modal-header bg-danger text-white">
                <h4 class="modal-title" id="myModalLabel" style="color: white;">Actualizar Foto De {{ $fact->name }} <img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($fact->file) }}" width="50" height="50" alt=""></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>

            </div>

            <!-- Modal Body -->
            <div class="modal-body bg-white">
                <div class="section-top-border">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <center><h1>Actuaizar Foto</h1></center>
                            <form action="{{ route('portfolio.updatePhoto',  $fact->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf @method('PATCH')
                                <div class="mt-10">
                                    <input type="file" name="file" placeholder="" required><br><br>
                                    <h4>{!! $errors->first('file','<small style="color: red;">:message</small>') !!}</h4>
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
