<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="exampleModalCenterTitle">
                    Tambah Data Peminjaman
                </h5>
            </div>
            <form method="GET" action="page-admin/peminjaman/peminjaman-tambah.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="basicInput">ID Buku</label>
                            <input type="text" class="form-control" name="id_buku" id="basicInput" placeholder="Masukkan ID Buku" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">ID Member</label>
                            <input type="text" class="form-control" name="id_member" id="basicInput" placeholder="Masukkan ID Member" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Tanggal Peminjaman</label>
                            <!-- <input type="text" class="form-control" name="tgl_pinjam" id="basicInput" placeholder="Masukkan Tanggal Peminjaman" required /> -->
                            <input type="date" name="tgl_pinjam" id="datepicker" class="form-control mb-3 flatpickr-no-config" placeholder="Masukkan Tanggal Peminjaman."/>
                            <label for="basicInput">Tanggal Jatuh Tempo</label>
                            <!-- <input type="text" class="form-control" name="tgl_jatuh_tempo" id="basicInput" placeholder="Masukkan Tanggal Jatuh Tempo" required /> -->
                            <input type="date" name="tgl_jatuh_tempo" id="datepicker" class="form-control mb-3 flatpickr-no-config" placeholder="Masukkan Tanggal Jatuh Tempo"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>