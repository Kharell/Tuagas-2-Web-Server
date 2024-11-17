<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result_dosen = mysqli_query($connection, "SELECT * FROM dosen");
$result_mahasiswa = mysqli_query($connection, "SELECT * FROM mahasiswa");
$result_matakuliah = mysqli_query($connection, "SELECT * FROM matakuliah");
$result_nilai = mysqli_query($connection, "SELECT * FROM nilai");
?>

<style>
  /* CSS untuk tampilan cetak */
  @media print {
    /* Hanya tampilkan bagian laporan */
    body * {
      visibility: hidden;
    }
    .print-section, .print-section * {
      visibility: visible;
    }
    .print-section {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
    }
  }
</style>

<section class="section print-section">
  <div class="section-header d-flex justify-content-between">
    <h1><b>Laporan Data UNDIPA❤️</b></h1>
    <button class="btn btn-primary" onclick="window.print()">Print Laporan</button>
  </div>

  <div class="row">
    <div class="col-12">
      <!-- Laporan Dosen -->
      <div class="card">
        <div class="card-header">
          <h4>Data Dosen</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100">
              <thead>
                <tr>
                  <th>NIDN</th>
                  <th>Nama Dosen</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($data = mysqli_fetch_array($result_dosen)) : ?>
                  <tr>
                    <td><?= $data['nidn'] ?></td>
                    <td><?= $data['nama_dosen'] ?></td>
                    <td><?= $data['jenkel_dosen'] ?></td>
                    <td><?= $data['alamat_dosen'] ?></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Laporan Mata Kuliah -->
      <div class="card">
        <div class="card-header">
          <h4>Data Mata Kuliah</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Matkul</th>
                  <th>Nama Mata Kuliah</th>
                  <th>SKS</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; while ($data = mysqli_fetch_array($result_matakuliah)) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['kode_matkul'] ?></td>
                    <td><?= $data['nama_matkul'] ?></td>
                    <td><?= $data['sks'] ?></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>


       <!-- Laporan Mahasiswa -->
      <div class="card">
        <div class="card-header">
          <h4>Data Mahasiswa</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100">
              <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Kota Kelahiran</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Program Studi</th>
                  <th>Tahun Masuk</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($data = mysqli_fetch_array($result_mahasiswa)) : ?>
                  <tr>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['jenis_kelamin'] ?></td>
                    <td><?= $data['kota_kelahiran'] ?></td>
                    <td><?= $data['tanggal_kelahiran'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['program_studi'] ?></td>
                    <td><?= $data['tahun_masuk'] ?></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Laporan Nilai Mahasiswa -->
      <div class="card">
        <div class="card-header">
          <h4>Data Nilai Mahasiswa</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Kode Mata Kuliah</th>
                  <th>Semester</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; while ($data = mysqli_fetch_array($result_nilai)) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['kode_matkul'] ?></td>
                    <td><?= $data['semester'] ?></td>
                    <td><?= $data['nilai'] ?></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../layout/_bottom.php'; ?>
