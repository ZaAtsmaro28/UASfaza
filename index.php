<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <title>UAS Fakultas Sains dan Informatika</title>
  </head>
  <body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-md sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img class="FSI-logo" src="img/FSI-Logo.png" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto mt-1">
            <a class="nav-link active" aria-current="page" href="index.php"
              >Beranda</a
            >
            <a class="nav-link" href="dokumentasi.php">Dokumentasi</a>
            <a class="nav-link" href="kemahasiswaan.php">Kemahasiswaan</a>
            <a class="nav-link" href="akademik.php">Akademik</a>
            <a class="nav-link" href="contact.php">Contact Us</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar-end -->
    <div class="container-fluid">
      <!-- hero -->
      <div id="hero">
        <div class="welcome mt-5 ms-5">
          <h1>
            <b> Selamat Datang</b>, Di Fakultas <b>Sains</b> dan
            <b>Informatika!</b> <br />
          </h1>
          <h3>Universitas <b>Jendral</b> Achmad <b>Yani</b> <br /></h3>
          <a href="about.php">Selengkapnya</a>
          <a href="daftar.php" class="ms-3">Daftar</a>
        </div>
      </div>
      <!-- hero-end -->

      <!-- visi&misi -->
      <section class="visi-misi text-center container">
        <h1 class="visi-judul mb-4">Visi & Misi</h1>

        <h2 class="mb-3">Visi</h2>
        <p class="visi">
          Menjadi Fakultas Sains dan Informatika unggul, berjiwa kebangsaan dan
          berwawasan lingkungan.
        </p>

        <h2 class="mt-5 mb-3">Misi</h2>
        <p class="misi">
          Meningkatkan relevansi pendidikan dengan arah pembangunan dan
          kesempatan kerja, sehingga lulusannya dapat berkontribusi dalam
          mendukung pembangunan dan merebut peluang kerja. <br /><br />
          Meningkatkan proses belajar mengajar dan menciptakan atmosfir akademik
          yang kondusif dilandasi jiwa kebangsaan dan berwawasan lingkungan
          untuk memberi nilai tambah yang maksimal pada peserta didik.
          <br /><br />
          Meningkatkan mutu dosen dengan mengoptimalkan sumber daya yang ada
          didukung kerjasama dengan institusi luar sehingga setiap dosen mampu
          melaksanakan Tridarma Perguruan Tinggi. <br /><br />
          Meningkatkan manajemen fakultas secara efisien dan profesional agar
          dapat mandiri di dalam kebutuhan dana pendidikan dan kesejahteraan.
          <br /><br />
          Meningkatkan kemampuan pemenuhan sarana dan prasarana pendidikan
          (kapabilitas).
        </p>
      </section>
      <!-- end-visi&misi -->

      <!-- carousel -->
      <section class="slider_carousel">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/1.png" class="d-block w-100" />
              <div class="carousel-caption">
                <p>
                  <i
                    >"Problem solving, analytical thinking, dan managerial skill
                    yang saya dapat ketika kuliah sangat berguna di dunia kerja,
                    saya bangga kuliah di Jurusan Kimia FSI Unjani, semoga
                    kalian bisa bergabung dengan kami." <br /><br
                  /></i>
                  <i>Agus HardianQ ~ A Manager</i>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/2.jpeg" class="d-block w-100" />
              <div class="carousel-caption">
                <p>
                  "Visi FSI tentunya menyesuaikan dengan Visi Unjani yaitu
                  Menjadi universitas unggul, berjiwa kebangsaan dan berwawasan
                  lingkungan. Kerjasama dengan berbagai institusi, universitas,
                  dan industri baik dalam maupun luar negeri telah dilakukan
                  untuk mencapai visi FSI."
                </p>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <!-- end-carousel -->

      <!-- daftar layanan -->
      <section class="mb-5 layanan">
        <div class="container text-center mb-5">
          <h4>Daftar Layanan</h4>
        </div>
        <div class="row ms-4">
          <div class="col-lg-4 col-sm-12 mb-3">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="bx bx-news"></i> Informasi Jurusan dan ORMAWA
                </h5>
                <p class="card-text">
                  Menyediakan informasi lengkap seputar jurusan dan organisasi
                  mahasiswa beserta dokumentasi atau rekam jejak dari
                  perkembangan setiap waktunya.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 mb-3">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="bx bx-user"></i> Pendaftaran
                </h5>
                <p class="card-text">
                  Untuk melengkapi persyaratan administrasi bagi mahasiswa baru
                  kami menyadiakan fitur pengisian data diri.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 mb-3">
            <div class="card" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">
                  <i class="bx bx-calendar"></i> Kalender Akademik
                </h5>
                <p class="card-text">
                  Sebagai jadwal atau <i>rundown</i> kegiatan belajar mengajar
                  tiap semester, kami juga akan memlakukan update informasi
                  secara berkala.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer text-center">
      <div class="container">
        <p>&copy; Copyright 2022 | Fakultas Sains dan Informatika</p>
        <a
          href="https://api.whatsapp.com/send/?phone=6281818900600&text&app_absent=0"
          ><i class="bx bxl-whatsapp me-3"></i
        ></a>
        <a href="https://www.instagram.com/fsiunjani.id/"
          ><i class="bx bxl-instagram me-3"></i
        ></a>
        <a href="https://www.facebook.com/fsiunjani"
          ><i class="bx bxl-facebook-square me-3"></i
        ></a>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="js/parallax.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
