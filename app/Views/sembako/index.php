<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <?php
        if(session()->getFlashData('success')){
        ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
        }
        ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-6">
    <div class="card-header">
            <div class="row">
                <div class="col-sm-6 breadcrumb float-sm-left" style="background-color:white">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Add Konsumen
                    </button>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="background-color:white">
                        <li class="breadcrumb-item active">
                            <form action="<?= site_url('excels/export/konsumen'); ?>" method="post">  
                                <button type="submit" class="btn btn-success">Export Excel</button>  
                            </form>  
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="<?php echo site_url('pdf/generate'); ?>" class="btn btn-secondary">  
                                Download PDF  
                            </a> 
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Produksi</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Domisili</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sembako as $key => $sembako) : ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $sembako['nama'] ?></td>
                            <td><?= $sembako['jenis']  ?></td>
                            <td><?= $sembako['produksi']  ?></td>
                            <td><?= $sembako['stok']  ?></td>
                            <td><?= $sembako['harga']  ?></td>
                            <td><?= $sembako['domisili']  ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal-<?= $sembako['id'] ?>">
                                    Edit
                                </button>
                                <a href="<?= base_url('sembako/delete/'.$sembako['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                            </td>
                        </tr>
                        <!-- Edit Contact Modal -->
                        <div class="modal fade" id="editModal-<?= $sembako['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('sembako/edit/'.$sembako['id']) ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="name" value="<?= $sembako['nama'] ?>" placeholder="Nama Sembako" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis">Jenis</label>
                                            <input type="text" name="jenis" class="form-control" id="email" value="<?= $sembako['jenis'] ?>" placeholder="Jenis" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="produksi">Produksi</label>
                                            <input type="text" name="produksi" class="form-control" id="phone" value="<?= $sembako['produksi'] ?>" placeholder="Produksi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="stok">Stok</label>
                                            <input type="number" name="stok" class="form-control" id="stok" value="<?= $sembako['stok'] ?>" placeholder="Stok" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="number" name="harga" class="form-control" id="harga" value="<?= $sembako['harga'] ?>" placeholder="Harga" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="domisili">Domisili</label>
                                            <input type="text" name="domisili" class="form-control" id="domisili" value="<?= $sembako['domisili'] ?>" placeholder="Domisili" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Add Contact Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Sembako</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('sembako') ?>" method="post">
            <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Sembako" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" class="form-control" id="email" placeholder="Jenis" required>
                    </div>
                    <div class="form-group">
                        <label for="produksi">Produksi</label>
                        <input type="text" name="produksi" class="form-control" id="phone" placeholder="Produksi" required>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" id="stok" placeholder="Stok" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga" required>
                    </div>
                    <div class="form-group">
                        <label for="domisili">Domisili</label>
                        <input type="text" name="domisili" class="form-control" id="domisili" placeholder="Domisili" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?php $this->section('scripts')?>

<!-- Page level custom scripts -->
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
</script>
<?php $this->endSection()?>