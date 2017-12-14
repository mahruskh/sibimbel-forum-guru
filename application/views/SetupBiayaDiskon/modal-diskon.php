<div class="modal" id="modal-diskon">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <input type="text" id="id_diskon" class="hidden" readonly="readonly">
                <form action="#" class="form-horizontal" id="form-diskon">
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">Kode</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="kode_diskon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">Jumlah</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" name="jml_diskon">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="act_diskon" onclick="save_diskon()"></button>
            </div>
        </div>
    </div>
</div>