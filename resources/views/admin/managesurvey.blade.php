<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Manage Survey</title>  
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

    .content table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .content table th,
    .content table td {
      padding: 10px;
      text-align: left;
      border: 1px solid #ccc;
    }

    .content table th {
      background-color: #0B7bb0;
      color: #fff;
    }

    .content table td {
        background-color: #fff;
        color: #000;
    }

    .content table tr:nth-child(even) {
      background-color: #f2f2f2;
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
      width: 180px; 
      height: 120px; 
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
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
      width: 80px;
    }

    button:hover {
      background: #0056b3;
    }

    .content table tr td {
      text-align: center;
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
        <h1>Daftar Survey Dosen</h1>
        <table>
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Semester</th>
                <th>Nama Dosen</th>
                <th>Mata Kuliah</th>
                <th>Survey 1</th>
                <th>Survey 2</th>
                <th>Survey 3</th>
                <th>Survey 4</th>
                <th>Survey 5</th>
                <th>Survey 6</th>
                <th>Survey 7</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($managesurvey as $index => $survey)
                  <tr>
                    <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                    <td>{{ $survey->nim }}</td>
                    <td>{{ $survey->nama_mahasiswa }}</td>
                    <td>{{ $survey->semester }}</td>
                    <td>{{ $survey->nama_dosen }}</td>
                    <td>{{ $survey->matakuliah }}</td>
                    <td>{{ $survey->survey1 }}</td>
                    <td>{{ $survey->survey2 }}</td>
                    <td>{{ $survey->survey3 }}</td>
                    <td>{{ $survey->survey4 }}</td>
                    <td>{{ $survey->survey5 }}</td>
                    <td>{{ $survey->survey6 }}</td>
                    <td>{{ $survey->survey7 }}</td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>