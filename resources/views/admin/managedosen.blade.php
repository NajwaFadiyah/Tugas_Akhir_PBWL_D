<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Manage Dosen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: #fff;
    }

    table,
    th,
    td {
      border: 1px solid #ccc;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #0B7bb0;
      color: white;
    }

    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tbody tr:hover {
      background-color: #e0f7fa;
    }

    .button-actions {
      margin-bottom: 20px;
    }

    .btn {
      padding: 8px 15px;
      border: none;
      border-radius: 3px;
      text-decoration: none;
      color: #fff;
      cursor: pointer;
      font-size: 14px;
    }

    .btn-info {
      background-color: #17a2b8;
    }

    .btn-danger {
      background-color: #dc3545;
    }

    .btn-sm {
      font-size: 12px;
      padding: 5px 10px;
    }

    .btn:hover {
      opacity: 0.9;
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

  <div class="content">
    <h1>Manage Dosen</h1>
    <div class="button-actions" style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
      <a href="/create" class="btn btn-info btn-sm" style="margin-right: 10px;">Tambah</a>
    </div>
    <div class="row">
        <div class="col-sm-12">
          @if (Session::has('success'))
            <div class="pt-3">
              <div class="alert alert-success">
                {{ Session::get('success') }}
              </div>
            </div>
          @endif
        </div>
      </div>
    <table>
      <thead>
        <tr>
          <th>NIP</th>
          <th>Nama Dosen</th>
          <th>Mata Kuliah</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dosen as $d)
          <tr>
            <td>{{ $d->nim }}</td>
            <td>{{ $d->nama_dosen }}</td>
            <td>{{ $d->matakuliah }}</td>
            <td>
                <button type="submit" style="border:none; background:none;" 
                  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                  <i class="fas fa-trash text-danger"></i>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>