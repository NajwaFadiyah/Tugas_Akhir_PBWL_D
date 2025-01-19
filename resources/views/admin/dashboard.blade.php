<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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

    .content {
      flex: 1;
      padding: 20px;
      background-color: #e0e0e0;
    }

    .content h1 {
      font-size: 24px;
      font-weight: bold;
      padding-top: 35px;
      padding-bottom: 10px;
      border-bottom: 2px solid #7f7d7d;
    }

    .buttons {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      margin-top: 20px;
    }

    .button-card {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      width: 250px;
      height: 150px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      border: 1px solid #7f7d7d;
      margin-top: 150px;
    }

    .button-card i {
      font-size: 35px;
      align-items: center;
      color: #0B7bb0;
      margin-bottom: 5px;
    }

    .button-card p {
      font-size: 20spx;
      align-items: center;
      margin: 5px 0;
      font-weight: bold;
      color: #333;
    }

    .button-card hr {
      width: 80%;
      border: 0.5px solid #ccc;
      margin: 10px 0;
    }

    button {
      background: #007bff;
      color: #fff;
      border: none;
      padding: 8px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 14px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
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
          <p>Sistem Informasi Uinsu</p> 
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
      <div class="buttons">
        <div class="button-card">
          <i class="fa-solid fa-clipboard-list"></i><p>Manage Survey</p>
          <hr>
          <ul>
            <a href="managesurvey"><button>Detail</button></a> 
           </ul>
        </div>
        <div class="button-card">
          <i class="fa-solid fa-chalkboard-teacher"></i><p>Manage Dosen</p>
          <hr>
          <ul>
           <a href="managedosen"><button>Detail</button></a> 
          </ul>
        </div>
      </div>
  </div>

</body>
</html>
