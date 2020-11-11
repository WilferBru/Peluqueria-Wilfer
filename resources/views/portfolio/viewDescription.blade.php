<div class="modal fade" id="view<?=$num?>" role="dialog" style="margin-top: 67px;">
    <div class="modal-dialog">
        <div class="modal-content bg-light">
            <!-- Modal Header -->
            <div class="modal-header bg-danger text-white">
                <h4 class="modal-title" id="myModalLabel" style="color: white;">{{ $fact->name }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>

            </div>

            <!-- Modal Body -->
            <div class="modal-body bg-white">
                <div class="single_pricing_item container">
                    <center><img class="bd-placeholder-img rounded-circle" src="{{ Storage::url($fact->file) }}" width="200" height="200" alt=""></center>
                    <div class="single_pricing_text" style="margin-top: 10px;">
                        {{--}}<center><h5>{{ $fact->name }}</h5></center>--}}
                        <center><p>{{ $fact->bodyCorte }}</p></center>
                        <center><p>${{ number_format($fact->price) }}</p></center>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            {{--<div class="modal-footer">
                <button type="button" class="genric-btn primary-border circle arrow" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="genric-btn info-border circle arrow" onclick="submitContactForm()">Enviar</button>
                </form>
            </div>--}}
        </div>
    </div>
</div>
