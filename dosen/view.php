<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

// Ambil parameter nidn dari URL
$nidn = $_GET['nidn'] ?? null;

// Pastikan nidn ada dan valid
if ($nidn) {
    $result = mysqli_query($connection, "SELECT * FROM dosen WHERE nidn = '$nidn'");

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
    } else {
        // Jika data tidak ditemukan
        echo "<script>alert('Data dosen tidak ditemukan'); window.location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('NIDN tidak valid'); window.location.href='index.php';</script>";
}
?>

<section class="section">
  <div class="section-header">
    <h1>Detail Data Dosen</h1>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="card">
            <br>
            <center>
          <div class="card-body">
            <h5><strong>NIDN :</strong> <?= $data['nidn'] ?></h5>
            <h5><strong>Nama Dosen :</strong> <?= $data['nama_dosen'] ?></h5>
            <h5><strong>Jenis Kelamin :</strong> <?= $data['jenkel_dosen'] ?></h5>
            <h5><strong>Alamat :</strong> <?= $data['alamat_dosen'] ?></h5>
          </div>
          </center>
        </div>
      </div>
    </div>
    <a href="index.php" class="btn btn-primary">Kembali</a>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>


<style>
    /* Style untuk bagian Section Header */
.section-header {
    margin-bottom: 20px;
    font-family: 'Arial', sans-serif;
}

.section-header h1 {
    font-size: 2rem;
    font-weight: 600;
    color: #4e73df;
    text-align: center;
 
}

/* Style untuk Card Detail */
.card {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-color: #ffffff;
    padding: 20px;
    margin: 20px 0;
    transition: transform 0.3s ease-in-out;
}

/* Efek saat hover pada card */
.card:hover {
    transform: translateY(-5px);
}

.card-body h5 {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 15px;
}

.card-body h5 strong {
    color: #4e73df;
}

/* Gaya tombol kembali */
.btn-primary {
    background-color: #4e73df;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #2e59d9;
}

/* Style untuk bagian Body Section */
.section-body {
    font-family: 'Roboto', sans-serif;
    margin-top: 40px;
}

.row {
    display: flex;
    justify-content: center;
}

.col-12 {
    max-width: 800px;
    width: 100%;
}

/* Tambahan padding dan margin pada body */
.card-body {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
}

/* Gaya untuk kontainer gambar atau foto */
img {
    max-width: 100%;
    border-radius: 8px;
    margin-top: 10px;
}

/* Responsive */
@media (max-width: 768px) {
    .section-header h1 {
        font-size: 1.5rem;
    }

    .card-body h5 {
        font-size: 1rem;
    }

    .btn-primary {
        width: 100%;
        padding: 12px;
        text-align: center;
    }
}

</style>