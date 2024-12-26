<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
  <div class="sidebar">
    <div class="logo-section">
      <img src="{{ asset('images/logo-uinsu.png') }}" alt="LOGO UINSU" class="logo-image">
      <div class="text">
        <h4>Survey Dosen</h4>
        <p>Sistem Informasi Uinsu</p>
      </div>
    </div>
    <ul>
        <li><i class="fa-solid fa-gauge"></i> <a href="/">Dashboard</a></li>
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

  <div class="content">
    <h1>Selamat Datang di Halaman Admin!!!</h1>
  </div>

</body>
</html>