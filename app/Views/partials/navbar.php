<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?= base_url('/organisasi'); ?>">
            <i class="bi bi-people-fill"></i> Organisasi
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'home') ? 'active fw-bold' : ''; ?>"
                        href="<?= base_url('/home'); ?>">
                        <i class="bi bi-person-door"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'organisasi') ? 'active fw-bold' : ''; ?>"
                        href="<?= base_url('/organisasi'); ?>">
                        <i class="bi bi-people-fill"></i> Daftar Anggota
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == 'organisasi/add') ? 'active fw-bold' : ''; ?>"
                        href="<?= base_url('/organisasi/add'); ?>">
                        <i class="bi bi-person-plus"></i> Tambah Anggota
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* General Navbar Styling */
.navbar {
    border-radius: 0;
    transition: background-color 0.3s ease;
}

.navbar {
    padding: 0.5rem 0;
    /* Add padding for better alignment */
}

.navbar:hover {
    background-color: #0056b3;
}

.navbar .container {
    max-width: 1200px;
}

.navbar-brand {
    font-size: 1.5rem;
    font-weight: 700;
    text-transform: uppercase;
    margin-right: 20px;
    /* Adjust the spacing */
}

.navbar-toggler {
    border-color: #ffffff;
}

/* Active Link Styling */
.nav-link.active {
    font-weight: bold;
    background-color: #004085;
    border-radius: 5px;
    padding: 8px 16px;
}

/* Icon styling */
.nav-link i {
    margin-right: 8px;
}

.nav-item .nav-link {
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

.nav-item .nav-link {
    padding: 10px 20px;
    /* Added padding for spacing */
}

.nav-item .nav-link:hover {
    color: #f8f9fa;
}

/* Right-aligned Navbar Links */
.navbar-nav.ms-auto {
    margin-left: auto;
    display: flex;
    align-items: center;
    /* Make the navbar links center-aligned */
}

/* Navbar Responsiveness */
@media (max-width: 768px) {
    .navbar-nav {
        text-align: center;
        width: 100%;
    }

    .navbar-nav .nav-link {
        font-size: 1.2rem;
        padding: 12px 20px;
    }
}
</style>