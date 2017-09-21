<div class="modal" id="modal-pilihan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <input type="text" id="id_pilihan_program" class="hidden" readonly="readonly">
                <form action="#" class="form-horizontal" id="form-pilihan">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Pilihan Program</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pilihan_program">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Keterangan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="2" name="keterangan_pilihan"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="act_pilihan" onclick="save_pilihan()"></button>
            </div>
        </div>
    </div>
</div>

