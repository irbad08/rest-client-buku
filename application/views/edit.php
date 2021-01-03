<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" id="tittle">Dasboard</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
        </div>
        <?php echo form_open('admin/edit_data'); ?>
        <div class="card-body">
            <form action="<?= base_url() . 'admin/edit_data/' . $data['Judul_buku']; ?> method=" post">
                <div class="form-group">
                    <label for="judulBuku">Judul Buku</label>
                    <input type="text" name="judulBuku" class="form-control" id="judulBuku" value="<?= $data['Judul_buku']; ?>">
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="pengarang" value="<?= $data['Judul_buku']; ?>">
                </div>
                <div class="form-group">
                    <label for="tahunTerbit">Tahun Terbit</label>
                    <input type="text" name="tahunTerbit" class="form-control" id="tahunTerbit" value="<?= $data['Judul_buku']; ?>">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary text-white">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->