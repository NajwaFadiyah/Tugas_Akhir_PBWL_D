<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Manage Survey</title>  
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
    padding: 200px 30px; /* Mengurangi padding atas */
    background-color: #807d7d;
    overflow-y: auto;
}

.content h1 {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
    padding-bottom: 180px;
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
        <h2>Daftar Survey Dosen </h2>
    
    <body>
        <table border="1" cellspasing ="0" cellspasing= "5px">
            <tr align="center" bgcolor="blue">
                <td>NO</td>
                <td>Nim</td>
                <td>Nama Mahasiswa</td>
                <td>Semester</td>
                <td>Nama Dosen</td>
                <td>Mata Kuliah</td>
            </tr>
            <tr>
                <td align="center">1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td align="center">2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td align="center">3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td align="center">4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    
      <style>
        .content {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 8px;
  margin: 20px auto;
  width: 80%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.content h2 {
  font-size: 24px;
  margin-bottom: 20px;
  color: #333;
}

.content table {
  width: 100%;
  border-collapse: collapse;
}

.content table tr {
  height: 40px;
  border-bottom: 1px solid #ccc;
}

.content table td {
  padding: 10px;
  text-align: left;
}
      </style>
            <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }
            
            .container {
                display: flex;
                height: 100vh;
            }
            
            .sidebar {
                width: 250px;
                background-color: #007bb5;
                color: white;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                padding: 20px;
            }
            
            .sidebar h2 {
                margin: 0;
                font-size: 20px;
            }
            
            .sidebar ul {
                list-style: none;
                padding: 0;
            }
            
            .sidebar ul li {
                margin: 10px 0;
                cursor: pointer;
            }
            
            .about {
                margin-top: auto;
            }
            
            .main-content {
                flex-grow: 1;
                background-color: #ffffff;
                padding: 20px;
            }
            
            .main-content h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }
            
            .table {
                display: table;
                width: 100%;
                border-collapse: collapse;
            }
            
            .row {
                display: table-row;
            }
            
            .cell {
                display: table-cell;
                padding: 10px;
                border: 1px solid #ddd;
                text-align: left;
            }
            
            .header .cell {
                font-weight: bold;
                background-color: #f4f4f4;
            }

                
    </div>
</div>

</body>
</html>