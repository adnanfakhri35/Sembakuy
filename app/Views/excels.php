<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<h2>Tutorial CodeIgniter 4 Export excel menggunakan PhpSpreadsheet at qadrLabs</h2>  
<form action="<?= site_url('excels/export'); ?>" method="post">  
    <button type="submit">Export Excel</button>  
</form> 

<?= $this->endSection() ?>