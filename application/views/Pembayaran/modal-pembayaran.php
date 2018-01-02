<div class="modal" id="modal-pembayaran">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"></h4>
            </div>
            <div class="modal-body">
                <form action="#" class="form-horizontal" id="form-pembayaran">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <span class="input-group-addon">Rp.</span>
                                <input type="number" class="form-control" name="jml_pembayaran">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="act_pembayaran" onclick="save_detail_pembayaran()"></button>
            </div>
        </div>
    </div>
</div>