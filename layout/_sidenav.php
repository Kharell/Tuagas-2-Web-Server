<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.php">
        <img src="../assets/img/avatar/LogoUndipa.png" alt="logo" class="Logo">
      </a>
      <h4 class="undipa"><b>UNDIPA❤️</b></h4>
    </div>
    <br><br>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.php">Hi😁</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li><a class="nav-link" href="../"><i class="fas fa-fire"></i> <span>Home</span></a></li>

      <li class="menu-header">Main Feature</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Dosen</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../dosen/index.php">Data Dosen</a></li>
          <li><a class="nav-link" href="../dosen/create.php">Tambah Data</a></li>
        </ul>
      </li>

 
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Mata Kuliah</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../matakuliah/index.php">Data Mata Kuliah</a></li>
          <li><a class="nav-link" href="../matakuliah/create.php">Tambah Data</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Mahasiswa</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../mahasiswa/index.php">Data Mahasiswa</a></li>
          <li><a class="nav-link" href="../mahasiswa/create.php">Tambah Data</a></li>
        </ul>
      </li>


      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Nilai</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../nilai/index.php">Data Nilai Mahasiswa</a></li>
          <li><a class="nav-link" href="../nilai/create.php">Tambah Data</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Report</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../report/index.php">Data Report UNDIPA</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>



<style>
.Logo {
  width: 50px;
  height: auto;
}

.undipa {
  transition: all 0.3s ease;
}

.undipa:hover {
  cursor: pointer;
  color: #DAA520;
  background-color: rgba(0, 0, 0, 0.1);
  padding: 5px;
  border-radius: 5px;
  transform: scale(1.1);
}

.sidebar-menu li a {
  color: #333;
  transition: background-color 0.3s, color 0.3s;
}

.sidebar-menu li a:hover {
  background-color: #4a90e2;
  color: #DAA520;
  border-radius: 5px;
}

.sidebar-menu .dropdown-menu li a {
  color: #555;
}

.sidebar-menu .dropdown-menu li a:hover {
  background-color: #d35400;
  color: #DAA520;
  border-radius: 3px;
}
</style>