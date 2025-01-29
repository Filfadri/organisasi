<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">Detail Anggota</h3>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4"><strong>Nama:</strong></div>
                <div class="col-md-8"><?= $organisasi['nama']; ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>NIM:</strong></div>
                <div class="col-md-8"><?= $organisasi['nim']; ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Jurusan:</strong></div>
                <div class="col-md-8"><?= $organisasi['jurusan']; ?></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Umur:</strong></div>
                <div class="col-md-8"><?= $organisasi['umur']; ?></div>
            </div>
            <a href="<?= base_url('/organisasi'); ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</div>

<style>
/* Styling for Card */
.card {
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

/* Styling for Row */
.row {
    margin-bottom: 15px;
}

.col-md-4 {
    font-weight: bold;
    font-size: 1.1rem;
}

/* Styling for Buttons */
.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    font-size: 1rem;
    padding: 10px 15px;
}

.btn-secondary:hover {
    background-color: #5a6268;
    border-color: #545b62;
}

/* Responsiveness for Smaller Screens */
@media (max-width: 768px) {
    .col-md-4 {
        font-size: 1rem;
    }

    .btn-secondary {
        font-size: 0.9rem;
        padding: 8px 12px;
    }
}
</style>

<?= $this->endSection(); ?>