<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd !important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistem Informasi</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link d-lg-none active" aria-current="page" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link d-lg-none" href="#">Kategori</a></li>
                <li class="nav-item"><a class="nav-link d-lg-none" href="#">Barang</a></li>
                <li class="nav-item"><a class="nav-link d-lg-none" href="#">Transaksi</a></li>
                <li class="nav-item"><a class="nav-link d-lg-none" href="#">Pengguna</a></li>
            </ul>
            <span class="navbar-text">
                Hello, <?= $_SESSION['username']; ?> |
                <a href="logout.php" class="">Logout</a>
            </span>
        </div>

    </div>
</nav>