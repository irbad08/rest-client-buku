<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" id="tittle">Dasboard</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#myModal">
                    <span class="text">Tambah</span>
                    <span class="icon text-white-50">
                        <i class='fas fa-plus' style='color:white'></i>
                    </span>
                </button>
                <br>
                <br>
                <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">Id Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Tahun terbit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value) : ?>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric"><?= $value['id']; ?></td>
                                <td><?= $value['Judul_buku']; ?></td>
                                <td><?= $value['pengarang']; ?></td>
                                <td><?= $value['tahun_terbit']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>Amin/edit_data/<?php echo $value['id']?>" type="buttton" class="btn"><i class='fas fa-edit' style='color:black'></i></a>
                                    <a href="<?= base_url(); ?>Amin/edit_data/" type="buttton" class="btn"><i class='far fa-trash-alt' style='color:red'></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
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
                <form action="<?= base_url(); ?>admin/add_data" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judulBuku">Judul Buku</label>
                            <input type="text" name="judulBuku" class="form-control" id="judulBuku">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" class="form-control" id="pengarang">
                        </div>
                        <div class="form-group">
                            <label for="tahunTerbit">Tahun Terbit</label>
                            <input type="text" name="tahunTerbit" class="form-control" id="tahunTerbit">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->