<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    ** {
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
     width: 200px;
     height: 100vh; /* Menetapkan tinggi sidebar menjadi 100% dari viewport */
     background-color: #0B7bb0;
     color: #fff;
     padding: 30px;
     display: flex;
     flex-direction: column;
     justify-content: space-between;
}

.logo {
  margin-right: 10px
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
    padding: 0;
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

.content {
    flex: 1;
    padding: 200px 20px; /* Mengurangi padding atas */
    background-color:#e6d8d8;
    overflow-y: auto;
}

.content h1 {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
    padding-bottom: 200px;
    border-bottom: 2px solid #7f7d7d;
    margin-bottom: 10px; /* Mengurangi margin bawah */
    margin-top: -20px; /* Menambahkan margin negatif untuk mengangkat judul */
}


.buttons {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.button-card {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    width: 180px; /* Mengatur lebar menjadi sedikit lebih besar */
    height: 120px; /* Mengatur tinggi untuk membuatnya persegi panjang */
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 10px;
}

.button-card .icon {
    font-size: 30px;
    margin-bottom: 10px;
}

.button-card h2 {
    font-size: 18px;
    margin-bottom: 15px;
}

button {
    background: #007bff;
    color: #fff;
    border: none;
    padding: 5px 10px; /* Mengatur padding untuk tombol */
    border-radius: 5px;
    cursor: pointer;
    width: 80px; /* Mengatur lebar tombol agar lebih kecil */
}

button:hover {
    background: #0056b3;
}
  </style>
</head>
<body>
  <div class="sidebar">
    <div class="logo-section">
      <img src="/logo-uinsu.png" alt="Logo UINSU" width="50px" height="50px">
      <div class="text">
          <h4>Survey Dosen</h4>
          <p>Sistem Informasi Uinsu</p> <!-- Pindahkan ini ke bawah h4 -->
      </div>
  </div>
    <ul>
        <li><i class="fa-solid fa-gauge"></i> <a href="/dashboard">Dashboard</a></li>
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
    <div class="buttons"> <!-- Wrapper for the button cards -->
        <div class="button-card">
            <div class="icon">📋</div>
            <h2>List Survey</h2>
            <button>Detail</button>
        </div>
        <div class="button-card">
            <div class="icon">👨‍🏫</div>
            <h2>List Dosen</h2>
            <button>Detail</button>
        </div>
    </div>
</div>

<style>
  
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100px;
  background-color: #f4f4f4;
}

.container {
  text-align: center;
  background: #fff;
  padding: 0px 0px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
  font-size: 10px;
  margin-bottom: 10px;
}

.buttons {
        display: flex; /* Mengatur layout menjadi flex */
        justify-content: space-around; /* Menempatkan kartu secara merata */
        margin-top: 20px; /* Mengurangi jarak dari judul */
}

.button-card {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    width: 150px;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 10px; /* Memberikan jarak antar kartu */
}


.button-card .icon {
  font-size: 30px;
  margin-bottom: 10px;
}

.button-card h2 {
  font-size: 18px;
  margin-bottom: 15px;
}

button {
  background: #007bff;
  color: #fff;
  border: none;
  padding: 40px 10px;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background: #0056b3;
}

</body>
</html>
