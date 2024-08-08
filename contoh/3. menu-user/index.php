<?php include_once 'cek-session.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
      a {text-decoration: none;}
    </style>
  </head>
  <body>
        
      <?php include 'navbar.php'; ?>

      <div class="container-fluid">
        <div class="row mt-3">

          <div class="col col-lg-3 mb-3 d-lg-block d-none">
            <?php include 'menu.php'; ?>
          </div>

          <div class="col col-lg-9">
            <h2>Judul Halaman</h2>

            <div class="row mt-2">
              <div class="col" style="text-align:right">
                <a href="tambah.php" class="btn btn-primary">Tambah</a>
              </div>
            </div>

            <div class="row mt-2">
              <div class="col table-responsive">  
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for($i=0; $i<5; $i++) : ?>
                    <tr>
                      <th scope="row"><?= $i+1; ?></th>
                      <td>Mark Break</td>
                      <td>Otto Drive</td>
                      <td>@mdo</td>
                      <td>
                        <a href="#" class="btn btn-success btn-sm">Ubah</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                      </td>
                    </tr>
                    <?php endfor; ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>