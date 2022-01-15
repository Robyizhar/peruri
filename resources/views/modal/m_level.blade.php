{{-- Modal Tambah dan Edit --}}
<div class="modal fade" id="tambah-edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="kode" id="nama-label">Kode</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="kode" name="kode" value="">
                            <div class="form-error"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="posisi_jabatan" id="nama-label">posisi jabatan</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="posisi_jabatan" name="posisi_jabatan" value="">
                            <div class="form-error"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="level" id="nama-label">level</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="level" name="level" value="">
                            <div class="form-error"></div>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>