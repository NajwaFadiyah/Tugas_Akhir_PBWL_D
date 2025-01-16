<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    display: flex;
    height: 100vh;
    background-color: #f0f0f0;
  }

  .sidebar {
    width: 250px;
    background-color: #0B7bb0;
    color: #fff;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .logo-section {
    display: flex;
    align-items: center;
    padding-top: 15px;
    text-align: center;
    gap: 10px;
    border-bottom: 0.5px solid #DEE8F2;
    padding-bottom: 10px;
  }

  .logo-section img {
    margin-right: 10px;
  }

  .text {
    display: flex;
    flex-direction: column;
    text-align: center;
  }

  .text h4 {
    font-size: 20px;
    font-weight: bold;
  }

  .text p {
    font-size: 12px;
    font-weight: normal;
  }

  .sidebar ul {
    list-style: none;
  }

  .sidebar ul li {
    margin: 15px 0;
    font-size: 16px;
  }

  .sidebar ul li i {
    margin-right: 10px;
  }

  .sidebar ul li a {
    color: #fff;
    text-decoration: none;
  }

  .about-section {
    margin-top: 30px;
  }

  .about-section h3 {
    margin-bottom: 15px;
    font-size: 18px;
    padding-bottom: 10px;
    border-bottom: 2px solid #fff;
  }

  .social-icons {
    margin-top: 20px;
    display: flex;
    gap: 10px;
  }

  .social-icons a {
    color: #fff;
    font-size: 20px;
    text-decoration: none;
  }

  .divider {
    width: 5px;
    background-color: #000;
  }

  .form-container {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #e0e0e0;
  }

  .form-wrapper {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
  }

  .form-wrapper h1 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
  }

  .form-wrapper form .btn {
    width: 48%;
  }

  .form-wrapper form .d-flex {
    justify-content: space-between;
  }
</style>
</head>

<body>
  <div class="sidebar">
    <div class="logo-section">
      <img src="/logo-uinsu.png" alt="Logo UINSU" width="50px" height="50px">
      <div class="text">
        <h4>Survey Dosen</h4>
        <p>Sistem Informasi Uinsu</p>
      </div>
    </div>
    <ul>
      <li><i class="fa-solid fa-gauge"></i> <a href="/admin">Dashboard</a></li>
      <li><i class="fa-solid fa-list"></i> <a href="/managesurvey">Manage Survey</a></li>
      <li><i class="fa-solid fa-user-tie"></i> <a href="/managedosen">Manage Dosen</a></li>
    </ul>
    <div class="about-section">
      <h3>Tentang Kami</h3>
      <ul>
        <li><i class="fa-regular fa-face-smile"></i> <a href="#">Dosen</a></li>
        <li><i class="fa-solid fa-book"></i> <a href="#">Catatan Dosen</a></li>
        <li><i class="fa-solid fa-phone"></i> <a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="social-icons">
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-youtube"></i></a>
      <a href="#"><i class="fa-brands fa-discord"></i></a>
    </div>
  </div>

  <div class="divider"></div>

  <div class="form-container">
    <div class="form-wrapper">
      <h1>Form Data </h1>
      <form action="/store-dosen" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
        </div>
        <div class="mb-3">
          <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
          <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
            placeholder="Masukkan Nama Mahasiswa" required>
        </div>
        <div class="mb-3">
          <label for="semester" class="form-label">Semester</label>
          <input type="number" class="form-control" id="semester" name="semester" placeholder="Masukkan Semester"
            required>
        </div>
        <div class="mb-3">
          <label for="nama_dosen" class="form-label">Nama Dosen</label>
          <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Masukkan Nama Dosen"
            required>
        </div>
        <div class="mb-3">
          <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
          <input type="text" class="form-control" id="matakuliah" name="matakuliah" placeholder="Masukkan Mata Kuliah"
            required>
        </div>
        <div class="d-flex">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="/managedosen" class="btn btn-secondary">Kembali</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>