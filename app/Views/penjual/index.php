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
    <div class="card shadow mb-6" >
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6 breadcrumb float-sm-left" style="background-color:white">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Add Penjual
                    </button>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="background-color:white">
                        <li class="breadcrumb-item active">
                            <form action="<?= site_url('excels/export/penjual'); ?>" method="post">  
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>No_telp</th>
                            <th>Password</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($penjual as $key => $penjual) : ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $penjual['nama'] ?></td>
                            <td><?= $penjual['username']  ?></td>
                            <td><?= $penjual['email']  ?></td>
                            <td><?= $penjual['no_telp']  ?></td>
                            <td><?= $penjual['password']  ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal-<?= $penjual['id_penjual'] ?>">
                                    Edit
                                </button>
                                <a href="<?= base_url('penjual/delete/'.$penjual['id_penjual']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                            </td>
                        </tr>
                        <!-- Edit Contact Modal -->
                        <div class="modal fade" id="editModal-<?= $penjual['id_penjual'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('index/edit/'.$penjual['id_penjual']) ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="name" value="<?= $penjual['nama'] ?>" placeholder="Nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control" id="email" value="<?= $penjual['username'] ?>" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="phone" value="<?= $penjual['email'] ?>" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_telp">Nomor Telephone</label>
                                            <input type="number" name="no_telp" class="form-control" id="stok" value="<?= $penjual['no_telp'] ?>" placeholder="Nomor Telephone" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="harga" value="<?= $penjual['password'] ?>" placeholder="Password" required>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Konsumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('penjual') ?>" method="post">
            <?= csrf_field(); ?>
                <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="email" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="phone" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telephone</label>
                    <input type="number" name="no_telp" class="form-control" id="stok" placeholder="Nomor Telephone" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="harga" placeholder="Password" required>
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