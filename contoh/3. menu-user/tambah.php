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
            <h2>Tambah</h2>

            <div class="row mt-2">
              <div class="col">
                <form action="" method="post">
                    <div>
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>

  </body>
</html>