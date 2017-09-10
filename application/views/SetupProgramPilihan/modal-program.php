<div class="modal" id="modal-program">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <input type="text" id="id_program_bimbel" class="hidden" readonly="readonly">
                <form action="#" class="form-horizontal" id="form-program">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Program Bimbel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="program_bimbel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Materi Ajar</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="2" name="materi_ajar"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="act" onclick="save_program()"></button>
            </div>
        </div>
    </div>
</div>

