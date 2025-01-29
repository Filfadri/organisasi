<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><?= isset($organisasi) ? 'Edit' : 'Tambah'; ?> Anggota</h4>
        </div>
        <div class="card-body">
            <form
                action="<?= isset($organisasi) ? base_url('organisasi/update/' . $organisasi['id']) : base_url('organisasi/save'); ?>"
                method="post">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control"
                        value="<?= isset($organisasi) ? $organisasi['nama'] : ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control"
                        value="<?= isset($organisasi) ? $organisasi['nim'] : ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control"
                        value="<?= isset($organisasi) ? $organisasi['jurusan'] : ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Umur</label>
                    <input type="number" name="umur" class="form-control"
                        value="<?= isset($organisasi) ? $organisasi['umur'] : ''; ?>" required>
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

<style>
/* Reset dan Styles Umum */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
}

/* Card Styling */
.card {
    border-radius: 10px;
    overflow: hidden;
}

.card-header {
    background-color: #007bff;
    font-size: 1.25rem;
    text-align: center;
    padding: 20px;
}

.card-body {
    padding: 30px;
    background-color: #fff;
}

/* Form Field Styling */
.form-label {
    font-size: 1rem;
    font-weight: 500;
    color: #333;
}

.form-control {
    padding: 15px;
    border-radius: 8px;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    font-size: 1rem;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Button Styling */
.btn {
    padding: 12px 30px;
    border-radius: 5px;
    font-size: 1rem;
    text-transform: uppercase;
    font-weight: 600;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:hover {
    background-color: #5a6268;
    border-color: #5a6268;
}

/* Responsive Design */
@media (max-width: 768px) {
    .card-body {
        padding: 20px;
    }

    .form-control {
        padding: 12px;
    }

    .btn {
        width: 100%;
        padding: 10px;
    }
}
</style>

<?= $this->endSection(); ?>