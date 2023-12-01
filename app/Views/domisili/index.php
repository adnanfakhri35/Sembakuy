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
                        Add Domisili
                    </button>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="background-color:white">
                        <li class="breadcrumb-item active">
                            <form action="<?= site_url('excels/export/domisili'); ?>" method="post">  
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
                            <th>Provinsi</th>
                            <th>Kota</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>RW</th>
                            <th>RT</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($domisili as $key => $domisili) : ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $domisili['provinsi'] ?></td>
                            <td><?= $domisili['kota']  ?></td>
                            <td><?= $domisili['kecamatan']  ?></td>
                            <td><?= $domisili['kelurahan']  ?></td>
                            <td><?= $domisili['RW']  ?></td>
                            <td><?= $domisili['RT']  ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal-<?= $domisili['id_domisili'] ?>">
                                    Edit
                                </button>
                                <a href="<?= base_url('sembako/delete/'.$domisili['id_domisili']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                            </td>
                        </tr>
                        <!-- Edit Contact Modal -->
                        <div class="modal fade" id="editModal-<?= $domisili['id_domisili'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('sembako/edit/'.$domisili['id_domisili']) ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="modal-body">
                                        <div class="form-group">
                                            <label for="provinsi">Provinsi</label>
                                            <input type="text" name="provinsi" class="form-control" id="name" value="<?= $domisili['provinsi'] ?>" placeholder="Provinsi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="kota">Kota</label>
                                            <input type="text" name="kota" class="form-control" id="email" value="<?= $domisili['kota'] ?>" placeholder="Kota" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control" id="phone" value="<?= $domisili['kecamatan'] ?>" placeholder="Kecamatan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="kelurahan">Kelurahan</label>
                                            <input type="number" name="kelurahan" class="form-control" id="stok" value="<?= $domisili['kelurahan'] ?>" placeholder="Kelurahan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="RW">RW</label>
                                            <input type="number" name="RW" class="form-control" id="harga" value="<?= $domisili['RW'] ?>" placeholder="RW" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="RT">RT</label>
                                            <input type="text" name="RT" class="form-control" id="domisili" value="<?= $domisili['RT'] ?>" placeholder="RT" required>
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
                    <label for="provinsi">Provinsi</label>
                    <input type="text" name="provinsi" class="form-control" id="name" placeholder="Provinsi" required>
                </div>
                <div class="form-group">
                    <label for="kota">Kota</label>
                    <input type="text" name="kota" class="form-control" id="email" placeholder="Kota" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" id="phone" placeholder="Kecamatan" required>
                </div>
                <div class="form-group">
                    <label for="kelurahan">Kelurahan</label>
                    <input type="number" name="kelurahan" class="form-control" id="stok" placeholder="Kelurahan" required>
                </div>
                <div class="form-group">
                    <label for="RW">RW</label>
                    <input type="number" name="RW" class="form-control" id="harga" placeholder="RW" required>
                </div>
                <div class="form-group">
                    <label for="RT">RT</label>
                    <input type="text" name="RT" class="form-control" id="domisili" placeholder="RT" required>
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