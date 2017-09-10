<div class="modal" id="modal-ajaran">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <input type="text" id="id_tahun_ajaran" class="hidden" readonly="readonly">
                <div class="modal-body">
                    <input type="text" id="id_program_bimbel" class="hidden" readonly="readonly">
                    <form action="#" id="form-ajaran">
                        <div class="form-group">
                            <label for="">Tahun Ajaran</label>
                            <input type="text" class="form-control input-lg" name="tahun_ajaran">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="act" onclick="save_ajaran()"></button>
            </div>
        </div>
    </div>
</div>
