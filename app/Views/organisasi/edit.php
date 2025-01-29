<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><?= isset($organisasi) ? 'Edit' : 'Tambah'; ?> Anggota</h4>
        </div>
        <div class="card-body">
            <form action="<?= isset($organisasi) ? base_url('organisasi/update/' . $organisasi['id']) : base_url('organisasi/save'); ?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= isset($organisasi) ? $organisasi['nama'] : ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?= isset($organisasi) ? $organisasi['nim'] : ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= isset($organisasi) ? $organisasi['jurusan'] : ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Umur</label>
                    <input type="number" name="umur" class="form-control" value="<?= isset($organisasi) ? $organisasi['umur'] : ''; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Simpan
                </button>
                <a href="<?= base_url('/organisasi'); ?>" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
