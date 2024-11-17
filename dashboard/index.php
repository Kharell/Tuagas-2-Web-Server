<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

// Mengambil jumlah data dari setiap tabel di database
$mahasiswa = mysqli_query($connection, "SELECT COUNT(*) FROM mahasiswa");
$dosen = mysqli_query($connection, "SELECT COUNT(*) FROM dosen");
$matakuliah = mysqli_query($connection, "SELECT COUNT(*) FROM matakuliah");
$nilai = mysqli_query($connection, "SELECT COUNT(*) FROM nilai");

$total_mahasiswa = mysqli_fetch_array($mahasiswa)[0];
$total_dosen = mysqli_fetch_array($dosen)[0];
$total_matakuliah = mysqli_fetch_array($matakuliah)[0];
$total_nilai = mysqli_fetch_array($nilai)[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undipa Dashboard</title>
    <!-- Tambahkan pustaka Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* CSS tambahan untuk tampilan kartu */
        .card-statistic-1 {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 20px;
            transition: transform 0.2s;
        }
        .card-statistic-1:hover {
            transform: scale(1.05); 
        }
        .card-icon {
            font-size: 40px; 
            padding: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
        }
        .card-header h4 {
            font-size: 18px; 
            margin: 0;
        }
        .card-body {
            font-size: 24px; 
            font-weight: bold;
        }
        .row > .col-lg-3 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<section class="section">
    <div class="section-header">
        <h1><b>Undipa Dashboard</b></h1>
    </div>
    <div class="column">
        <div class="row">
            <!-- Semua kartu statistik dalam satu row untuk satu baris sejajar -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Dosen</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_dosen ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_mahasiswa ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Mata Kuliah</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_matakuliah ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Nilai Masuk</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_nilai ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik -->
        <div class="row">
            <div class="col-12">
                <canvas id="dashboardChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
</section>

<script>
    // Mengambil data PHP dari variabel PHP ke JavaScript
    const dataDosen = <?= $total_dosen ?>;
    const dataMahasiswa = <?= $total_mahasiswa ?>;
    const dataMataKuliah = <?= $total_matakuliah ?>;
    const dataNilai = <?= $total_nilai ?>;

    // Inisialisasi grafik menggunakan Chart.js
    const ctx = document.getElementById('dashboardChart').getContext('2d');
    const dashboardChart = new Chart(ctx, {
        type: 'bar', // Jenis grafik
        data: {
            labels: ['Dosen', 'Mahasiswa', 'Mata Kuliah', 'Nilai Masuk'],
            datasets: [{
                label: 'Data Universitas Dipa Makassar ❤️',
                data: [dataDosen, dataMahasiswa, dataMataKuliah, dataNilai],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: true, // Tampilkan legend
                    labels: {
                        color: 'black',
                        font: {
                            size: 16,
                            weight: 'bold',
                            family: 'Arial, sans-serif'
                        },
                        padding: 20
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: 'black',
                        font: {
                            size: 14,
                            family: 'Arial, sans-serif'
                        }
                    }
                },
                x: {
                    ticks: {
                        color: 'black',
                        font: {
                            size: 14,
                            family: 'Arial, sans-serif'
                        }
                    }
                }
            }
        }
    });
</script>


<?php
require_once '../layout/_bottom.php';
?>
</body>
</html>
