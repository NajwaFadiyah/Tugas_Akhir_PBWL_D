<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Survey Dosen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .gradient-container {
      min-height: 500px; /* Sesuaikan dengan tinggi yang dibutuhkan */
      background: linear-gradient(to bottom, #0B7BB0 50%, #ffffff 50%);
      position: relative;
      padding: 50px 0px; /*Menambah padding agar elemen tidak terlalu rapat*/
    }

    /* Menjaga agar konten di dalam tetap center */
    .gradient-container .row {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .gradient-container .col-auto {
      margin: 0 0;
    }

    .gradient-container .bg-white, 
    .gradient-container .p-4 {
      width: 100%;
      max-width: 500px; /* Atur lebar maksimal untuk kotak pertama */
      padding: 20px;
    }

    .gradient-container .p-4.rounded.text-center {
      max-width: 300px;
      background-color: #0B7BB0;
      box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.2);
    }

    .gradient-container .row img {
      margin-right: 15px;
    }

    .text-justify {
      text-align: justify;
    }
  </style>
</head>
<body>
  <div style="background-color: #0B7BB0" class="sticky-top">
    <!-- Navbar -->
    <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light px-5 py-3 ms-5 me-5 ">
      <a class="navbar-brand" href="#">
        <img src="/logo_uin2.png" alt="Logo" width="100" height="94">
      </a>
      <div class="collapse navbar-collapse justify-content-start mt-3">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white ms-5 fs-5" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white ms-3 fs-5" href="#profil-dosen">Profil Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white ms-3 fs-5" href="#about">Tentang</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
  <div style="background-color: #0B7BB0">
    <!-- Hero Section -->
    <div id="home" class="row ms-5 me-5">
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
      <div class="col-6 ps-5 mb-5">
        <section class="text-left text-justify py-5 text-white">
          <h1><b>SELAMAT DATANG!</b></h1>
          <p class="fs-4">Forum Survei Evaluasi Dosen <br> Prodi Sistem Informasi</p>
          <p style="color: aquamarine">
            Pendidikan yang hebat dimulai dari komunikasi yang baik. Di sini, Anda bisa menyampaikan pendapat dan pengalaman Anda selama mengikuti perkuliahan. 
            Jangan ragu untuk berbagi ide, kritik, maupun saran. Setiap suara Anda sangat berarti untuk membantu dosen memahami kebutuhan mahasiswa dan terus berkembang.
            <br>
            Suara Anda, Masa Depan Pendidikan! 
            <br>
            Isi survey sekarang dan jadilah bagian dari perubahan positif!
          </p>
        </section>
        <div class="d-grid col-sm-5">
          <!-- Button trigger modal -->
          <button type="button" class="btn mt-3 text-white btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #003264">
            Isi Survey Sekarang!
          </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Pengisian Survey</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="text-justify" action="/" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan nama Anda">
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="">NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM Anda">
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label>Program Studi Sistem Informasi</label><br>
                    <label for="">Semester:</label>
                    <select name="semester" id="" class="form-select">
                      <option>Pilih Semester</option>
                      <option>1</option>
                      <option>3</option>
                      <option>5</option>
                      <option>7</option>
                    </select>
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="">Nama Dosen</label>
                    <select name="nama_dosen" id="" class="form-select">
                      <option class="disabled">Pilih Dosen</option>
                      <option>Rakhmat Kurniawan R, S.T., M.Kom</option>
                      <option>Muhamad Alda, S.Kom, M.S.I</option>
                      <option>Samsudin, ST, M.Kom</option>
                      <option>Suendri, M.Kom</option>
                    </select>
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="">Matakuliah</label>
                    <select name="matkul" id="" class="form-select">
                      <option class="disabled">Pilih Mata Kuliah Yang Diajarkan</option>
                      <option>Pengantar Ilmu Komputer</option>
                      <option>Algoritma & Pemrograman Terstruktur</option>
                    </select>
                  </div>
                  <hr>
                  <div class="mb-3">
                    <p>
                      Petunjuk Pengisian
                      <br>
                      Formulir Survey diisi dengan penilaian:
                      <br>
                      1 =  Tidak Puas <br>
                      2 =  Cukup Puas <br>
                      3 =  Puas <br>
                      4 =  Sangat Puas <br>
                      <hr>
                    </p>
                    <label for="">1. Dosen selalu berpenampilan rapi, bersih dan menarik</label><br>
                    <input type="radio" name="materi" value="Tidak Puas"> 1
                    <input type="radio" name="materi" value="Cukup Puas"> 2
                    <input type="radio" name="materi" value="Puas"> 3
                    <input type="radio" name="materi" value="Sangat Puas"> 4
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="">2. Dosen transparansi dalam pemberian nilai</label><br>
                    <input type="radio" name="materi1" value="Tidak Puas"> 1
                    <input type="radio" name="materi1" value="Cukup Puas"> 2
                    <input type="radio" name="materi1" value="Puas"> 3
                    <input type="radio" name="materi1" value="Sangat Puas"> 4
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="">3. Dosen selalu menggunakan media pembelajaran dalam perkuliahaan (LCD, Laptop dengan infocus dsb)</label><br>
                    <input type="radio" name="materi2" value="Tidak Puas"> 1
                    <input type="radio" name="materi2" value="Cukup Puas"> 2
                    <input type="radio" name="materi2" value="Puas"> 3
                    <input type="radio" name="materi2" value="Sangat Puas"> 4
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="">4. Dosen membuat dan melaksanakan perkuliahan sesuai dengan kontrak dan Silabus/Rencana Perkuliahan Semester (RPS)</label><br>
                    <input type="radio" name="materi3" value="Tidak Puas"> 1
                    <input type="radio" name="materi3" value="Cukup Puas"> 2
                    <input type="radio" name="materi3" value="Puas"> 3
                    <input type="radio" name="materi3" value="Sangat Puas"> 4
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="">5. Dosen selalu siap membantu mahasiswa baik di jam perkuliahan maupun di luar jam perkuliahan sepanjang etis dan moralis</label><br>
                    <input type="radio" name="materi4" value="Tidak Puas"> 1
                    <input type="radio" name="materi4" value="Cukup Puas"> 2
                    <input type="radio" name="materi4" value="Puas"> 3
                    <input type="radio" name="materi4" value="Sangat Puas"> 4
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="">6. Dosen bersama mahasiswa membuat kontrak perkuliahan di awal pertemuan</label><br>
                    <input type="radio" name="materi5" value="Tidak Puas"> 1
                    <input type="radio" name="materi5" value="Cukup Puas"> 2
                    <input type="radio" name="materi5" value="Puas"> 3
                    <input type="radio" name="materi5" value="Sangat Puas"> 4
                  </div>
                  <hr>
                  <div class="mb-3">
                    <label for="">7. Dosen objektif dalam penilaian</label><br>
                    <input type="radio" name="materi6" value="Tidak Puas"> 1
                    <input type="radio" name="materi6" value="Cukup Puas"> 2
                    <input type="radio" name="materi6" value="Puas"> 3
                    <input type="radio" name="materi6" value="Sangat Puas"> 4
                  </div>
                  <hr>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Kirim Survey</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 mb-3">
        <section>
          <img src="/hero.png" alt="Gambar Hero" width="586" height="389">
        </section>
      </div>
    </div>
  </div>

  {{-- Kotak Tengah --}}
  <div class="gradient-container p-5 d-flex justify-content-center align-items-center">
    <!-- Kotak Tengah -->
    <div class="row mb-0">
      <div class="col-auto p-0">
        <div class="bg-white p-4 rounded shadow-lg text-left">
          <div class="row">
            <div class="col-sm-12 d-flex align-items-center">
              <img src="/avatar1.png" width="150" height="250" class="rounded-circle me-3" alt="Avatar1">
              <div>
                <h3 class="text-justify">Selamat Datang!</h3>
                <p class="text-justify">Survei ini bertujuan mengumpulkan umpan balik tentang kualitas pengajaran dosen. Partisipasi Anda sangat berharga untuk meningkatkan pengalaman belajar.</p>
              </div>
            </div>
            <div class="col-sm-12 d-flex align-items-center">
              <img src="/avatar2.png" width="150" height="250" class="rounded-circle me-3" alt="Avatar2">
              <div class="text-justify">
                <h3>Petunjuk</h3>
                <p>
                  1. Klik 'Isi Survei Sekarang!'. <br>
                  2. Jawab semua pertanyaan. <br>
                  3. Klik 'Kirim'.
                  <br>
                  Terima kasih atas partisipasi Anda!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-auto p-0">
        <div class="p-4 rounded text-center">
          <div class="row">
            <div class="col-sm-12 align-items-center">
              <img src="/avatar3.png" width="150" height="250" class="rounded-circle" alt="Avatar1">
              <div>
                <h3>Pentingnya Survey!</h3>
                <p>Umpan balik Anda membantu meningkatkan metode pengajaran dan kualitas pendidikan di kampus.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Profil Dosen -->
  <section id="profil-dosen" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Profil Dosen</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Dosen 1 -->
        <div class="col">
          <div class="card text-center" style="border-color: #0B7BB0">
            <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto mt-3" alt="Dosen 1">
            <div class="card-body">
              <h5 class="card-title">Nama Dosen 1</h5>
              <p class="card-text">Mata Kuliah 1</p>
            </div>
          </div>
        </div>
        <!-- Dosen 2 -->
        <div class="col">
          <div class="card text-center" style="border-color: #0B7BB0">
            <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto mt-3" alt="Dosen 2">
            <div class="card-body">
              <h5 class="card-title">Nama Dosen 2</h5>
              <p class="card-text">Mata Kuliah 2</p>
            </div>
          </div>
        </div>
        <!-- Dosen 3 -->
        <div class="col">
          <div class="card text-center" style="border-color: #0B7BB0">
            <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto mt-3" alt="Dosen 3">
            <div class="card-body">
              <h5 class="card-title">Nama Dosen 3</h5>
              <p class="card-text">Mata Kuliah 3</p>
            </div>
          </div>
        </div>
        <!-- Dosen 4 -->
        <div class="col">
          <div class="card text-center" style="border-color: #0B7BB0">
            <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto mt-3" alt="Dosen 4">
            <div class="card-body">
              <h5 class="card-title">Nama Dosen 4</h5>
              <p class="card-text">Mata Kuliah 4</p>
            </div>
          </div>
        </div>
        <!-- Dosen 5 -->
        <div class="col">
          <div class="card text-center" style="border-color: #0B7BB0">
            <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto mt-3" alt="Dosen 5">
            <div class="card-body">
              <h5 class="card-title">Nama Dosen 5</h5>
              <p class="card-text">Mata Kuliah 5</p>
            </div>
          </div>
        </div>
        <!-- Dosen 6 -->
        <div class="col">
          <div class="card text-center" style="border-color: #0B7BB0">
            <img src="https://via.placeholder.com/150" class="rounded-circle mx-auto mt-3" alt="Dosen 6">
            <div class="card-body">
              <h5 class="card-title">Nama Dosen 6</h5>
              <p class="card-text">Mata Kuliah 6</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Evaluasi Dosen -->
  <section class="card text-center py-5 mt-5" style="background-color: #DEE8F2; border-radius: 0px;">
    <h2 style="color: #0B7BB0">Evaluasi Dosen</h2>
    <img src="/icon1.png" class="mx-auto mt-3 mb-3" width="300" height="20" alt="ICON">
    <p>Evaluasi ini adalah langkah awal dalam menciptakan lingkungan belajar yang 
      lebih baik. Setiap masukan yang Anda berikan akan menjadi bahan pertimbangan untuk 
      meningkatkan pengalaman belajar yang lebih interaktif, responsif, dan bermakna. Terima kasih 
      atas waktu dan partisipasi Anda!</p>
  </section>

  <!-- Tentang Kami -->
  <section id="about" class="text-sm-end mx-5 py-5">
    <h2 style="color: #0B7BB0">Tentang Kami</h2>
    <img src="/line1.png" class="mb-4" alt="Line">
    <p>
      Platform ini dirancang untuk mendengarkan suara mahasiswa dalam menilai dan mengevaluasi 
      kualitas pengajaran di kampus. Melalui pendekatan berbasis data, kami bertujuan untuk 
      menciptakan lingkungan belajar yang lebih efektif dan inklusif bagi semua pihak.
    </p>
  </section>

  {{-- Little Information --}}
  <div class="row ms-5 mb-3">
    <div class="col-sm-12 mb-4">
      <img src="/icon2.png" class="me-3" width="30" height="30" alt="Icon Dosen">
      Dosen
    </div>
    <div class="col-sm-12 mb-4">
      <img src="/icon3.png" class="me-3" width="30" height="30" alt="Icon Catatan Dosen">
      Catatan Dosen
    </div>
    <div class="col-sm-12 mb-5">
      <img src="/icon4.png" class="me-3" width="30" height="30" alt="Icon Contact Us">
      Contact Us
    </div>
  </div>
  </div>

  <!-- Footer -->
  <footer class="text-center py-4 bg-dark text-white">
    <div class="row">
      <div class="col-sm-12 mb-3">
        <img src="/icon5.png" class="mx-3" width="25" height="25" alt="Icon Instagram">
        <img src="/icon6.png" class="mx-3" width="25" height="25" alt="Icon X">
        <img src="/icon7.png" class="mx-3" width="25" height="25" alt="Icon Discord">
      </div>
      <div class="col-sm-12">
        <p>Copyright &copy; 2024 All Rights Reserved Group D</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
