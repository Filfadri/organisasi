<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h3 class="mb-0">Daftar Anggota Organisasi</h3>
        </div>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organisasi as $org): ?>
                <tr>
                    <td><?= $org['nama']; ?></td>
                    <td><?= $org['nim']; ?></td>
                    <td><?= $org['jurusan']; ?></td>
                    <td><?= $org['umur']; ?></td>
                    <td>
                        <a href="<?= base_url('organisasi/detail/' . $org['id']); ?>" class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i> Detail
                        </a>
                        <a href="<?= base_url('organisasi/edit/' . $org['id']); ?>" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <a href="<?= base_url('organisasi/delete/' . $org['id']); ?>"
                            onclick="return confirm('Hapus data?')" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<style>
/* Styling for Card */
.card {
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

/* Styling for Action Buttons */
.btn {
    font-size: 1rem;
    padding: 10px 15px;
}

.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-info:hover {
    background-color: #138496;
}

.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
}

.btn-warning:hover {
    background-color: #e0a800;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
}

/* Tabel Styling */
.table {
    font-size: 1rem;
    border-collapse: collapse;
}

.table th,
.table td {
    padding: 12px 15px;
    text-align: left;
    vertical-align: middle;
}

.table th {
    font-weight: 600;
    font-size: 1.1rem;
}

.table-hover tbody tr:hover {
    background-color: #f1f1f1;
}

/* Styling for Navbar */
.navbar {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Responsive Styling */
@media (max-width: 768px) {

    .table th,
    .table td {
        font-size: 0.9rem;
    }

    .btn {
        font-size: 0.9rem;
        padding: 8px 12px;
    }
}
</style>

<?= $this->endSection(); ?>