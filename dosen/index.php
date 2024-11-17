<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM dosen");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1><b>Data Dosen</b></h1>
    <a href="./create.php" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>NIDN</th>
                  <th>Nama Dosen</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th style="width: 200px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($data = mysqli_fetch_array($result)) :
                ?>
                  <tr>
                    <td><?= $data['nidn'] ?></td>
                    <td><?= $data['nama_dosen'] ?></td>
                    <td><?= $data['jenkel_dosen'] ?></td>
                    <td><?= $data['alamat_dosen'] ?></td>
                    <td>
                      <!-- Link untuk view data ke halaman view.php -->
                      <a class="btn btn-sm btn-success mb-md-0 mb-1" href="view.php?nidn=<?= $data['nidn'] ?>">
                        <i class="fas fa-eye fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info mb-md-0 mb-1" href="edit.php?nidn=<?= $data['nidn'] ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-danger" href="delete.php?nidn=<?= $data['nidn'] ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                    </td>
                  </tr>
                <?php
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>

<script src="../assets/js/page/modules-datatables.js"></script>
