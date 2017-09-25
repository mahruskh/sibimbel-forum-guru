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
                        <label for="" class="col-sm-3 control-label">Program Jenjang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="program_bimbel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Biaya Total</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <div class="input-group-addon">Rp.</div>
                                <input type="number" class="form-control" name="biaya_total">
                            </div>
                        </div>
                    </div>
                    <div id="pilihan_program"></div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Materi Ajar</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="2" name="materi_ajar"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Lama Belajar</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="lama_belajar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Jml Pertemuan</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="jumlah_pertemuan">
                                <div class="input-group-addon">x / Minggu</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Hari Pertemuan</label>
                        <div class="col-sm-7">
                            <div class="checkbox">
                                <label><input type="checkbox" name="Senin" value="Senin">Senin</label>
                                <label><input type="checkbox" name="Selasa" value="Selasa">Selasa</label>
                                <label><input type="checkbox" name="Rabu" value="Rabu">Rabu</label>
                                <label><input type="checkbox" name="Kamis" value="Kamis">Kamis</label>
                                <label><input type="checkbox" name="Jumat" value="Jumat">Jumat</label>
                                <label><input type="checkbox" name="Sabtu" value="Sabtu">Sabtu</label>
                                <label><input type="checkbox" name="Minggu" value="Minggu">Minggu</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Jam Pertemuan</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="" id="jp_timepicker" readonly="readonly">
                                <div class="input-group-addon"> - </div>
                                <input type="text" class="form-control" name="" id="jp_timepicker" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Keterangan</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="2" name="keterangan_program"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="act_program" onclick="save_program()"></button>
            </div>
        </div>
    </div>
</div>

