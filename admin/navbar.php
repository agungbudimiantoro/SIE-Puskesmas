<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <img src="../assets/img/logo.jpg" alt="" width="70" height="70" class="d-inline-block align-text-top">
        Bootstrap
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h3 class="nav-link active" aria-current="page">Penerapan Sistem Informasi Eksekutif Pada Puskemas Karang Dapo</h3>
                </li>

            </ul>

        </div>
    </div>
</nav>


<main>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="hal.php?p=dashboard" class="nav-link px-2 text-white">Home &nbsp &nbsp &nbsp</a></li>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">
                                Data Master
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="?p=user_data">Data User</a></li>
                                <li><a class="dropdown-item" href="?p=pasien_data">Data Pasien</a></li>
                                <li><a class="dropdown-item" href="?p=kunjungan_data">Data Kunjungan</a></li>
                                <li><a class="dropdown-item" href="?p=dokter_data">Data Dokter</a></li>
                                <li><a class="dropdown-item" href="?p=kamar_data">Data Kamar</a></li>
                                <li><a class="dropdown-item" href="?p=obat_data">Data Obat</a></li>
                                <li><a class="dropdown-item" href="?p=rawat_inap_data">Data Rawat Inap</a></li>
                                <li><a class="dropdown-item" href="?p=rawat_jalan_data">Data Rawat Jalan</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li><a href="../logout.php" class="nav-link px-2 text-white"> &nbsp &nbsp &nbsp Logout &nbsp &nbsp &nbsp</a></li>
                </ul>
            </div>
        </div>
    </header>
</main>