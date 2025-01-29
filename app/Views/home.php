<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h1 class="display-4 text-primary mb-4">Selamat Datang di Organisasi</h1>
            <p class="lead mb-4">Ini adalah halaman utama dari aplikasi pengelolaan data anggota organisasi. Anda dapat
                menambahkan, mengedit, dan menghapus data anggota organisasi sesuai kebutuhan.</p>

            <div class="d-flex justify-content-center mb-4">
                <a href="<?= base_url('organisasi'); ?>" class="btn btn-info btn-lg mx-2">
                    <i class="bi bi-people-fill"></i> Lihat Anggota
                </a>
                <a href="<?= base_url('organisasi/add'); ?>" class="btn btn-success btn-lg mx-2">
                    <i class="bi bi-person-plus"></i> Tambah Anggota
                </a>
            </div>

            <div class="alert alert-warning" role="alert">
                <i class="bi bi-exclamation-circle"></i> Pastikan untuk selalu memperbarui data anggota.
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>