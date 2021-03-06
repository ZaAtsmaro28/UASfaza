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
            <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
            <a class="nav-link" href="dokumentasi.php">Dokumentasi</a>
            <a class="nav-link" href="kemahasiswaan.php">Kemahasiswaan</a>
            <a class="nav-link active" href="akademik.php">Akademik</a>
            <a class="nav-link" href="contact.php">Contact Us</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar-end -->
    <div class="container-fluid">
      <!-- judul -->
      <div class="header-akademik mt-5">
        <h2>PROGRAM STUDI</h2>
      </div>
      <section class="prodi container-fluid">
        <!-- card-prodi -->
        <div class="row text-center justify-content-center">
          <!-- IF -->
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card">
              <a href="https://if.unjani.ac.id/">
                <img
                  src="img/IF-logo.png"
                  class="card-img-top ms-auto me-auto"
                />
              </a>
              <div class="card-body">
                <h5 class="card-title">Informatika</h5>
              </div>
            </div>
          </div>

          <!-- SI -->
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card">
              <a href="https://si.unjani.ac.id/">
                <img
                  src="img/SI-logo.jpg"
                  class="card-img-top ms-auto me-auto"
                />
              </a>
              <div class="card-body">
                <h5 class="card-title">Sistem Informasi</h5>
              </div>
            </div>
          </div>

          <!-- Kimia -->
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card">
              <a href="http://kimia.unjani.ac.id/">
                <img
                  src="img/unjani.png"
                  class="card-img-top ms-auto me-auto"
                />
              </a>
              <div class="card-body">
                <h5 class="card-title">Kimia</h5>
              </div>
            </div>
          </div>

          <!-- S2 Kimia -->
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card d-flex justify-content-center">
              <a href="http://kimia.unjani.ac.id/">
                <img
                  src="img/unjani.png"
                  class="card-img-top ms-auto me-auto"
                />
              </a>
              <div class="card-body">
                <h5 class="card-title">Magister Kimia</h5>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <!-- judul-2 -->
        <div class="header-akademik mt-5">
          <h2>KALENDER AKADEMIK</h2>
        </div>
      </section>

      <!-- kalender -->
      <section class="kalender">
        <div class="row">
          <div class="col-12">
            <h4 class="text-center mb-5 container">
              Kalender Akademik Tahun Anggaran 2021/2022
            </h4>
            <img src="img/Kalender-Akademik1.jpg" />
          </div>
          <div class="col-12">
            <h4 class="text-center mb-5 container">
              Kalender Akademik Tahun Anggaran 2020/2021
            </h4>
            <img class="ms-4" src="img/Kalender-Akademik2.jpg" />
          </div>
        </div>
      </section>
      <footer class="footer text-center">
        <p>&copy; Copyright 2022 | Fakultas Sains dan Informatika</p>
      </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
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
