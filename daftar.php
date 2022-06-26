<?php
  $send = false;
  if(isset($_POST["kirim"])){
    $daftar = json_decode(file_get_contents("data/data_form.json"));
    $daftar[] = [
      "nama" => $_POST["nama"],
      "tempat lahir" => $_POST["tempat_lahir"],
      "tanggal" => $_POST["tanggal"],
      "jenis kelamin" => $_POST["jenis_kelamin"],
      "agama" => $_POST["agama"],
      "jurusan" => $_POST["jurusan"],
      "email" => $_POST["email"]
    ];
    $stream = fopen("data/data_form.json", "w");
    fwrite($stream, json_encode($daftar));
    fclose($stream);
    $send = true;
  }
?>

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
            <a class="nav-link" aria-current="page" href="index.php"
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
    <div class="container-fluid daftar-main">
      <div class="container about mt-5">
        <!-- judul -->
        <h2 class="text-center">
          Form <b>Pendaftaran</b> Mahasiswa <b>Baru</b>
        </h2>
      <div id="liveAlertPlaceholder" class="mt-4"></div>
        <!-- form -->
        <div class="row mt-4">
          <div class="col-lg-8">
            <form action="" class="container-fluid" method="POST">
              <!-- nama -->
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"
                  >Nama lengkap</span
                >
                <input
                  type="text"
                  class="form-control"
                  aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm"
                  name="nama" required
                />
              </div>
              <!-- tempat -->
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01"
                  >Tempat Lahir</label
                >
                <select
                  class="form-select"
                  id="inputGroupSelect01"
                  name="tempat_lahir" required
                >
                  <option selected>Kota/Kabupaten</option>
                  <option value="Kota Cimahi">Kota Cimahi</option>
                  <option value="Kabupaten Bandung">Kabupaten Bandung</option>
                  <option value="Kabupaten Karawang">Kabupaten Karawang</option>
                  <option value="Kabupaten Cirebon">Kabupaten Cirebon</option>
                </select>
              </div>

              <!-- tanggal -->
              <label for="TTL" class="mt-3 labelForm">Tanggal Lahir : </label
              ><input type="date"  class="ms-3" name="tanggal" required />

              <!-- jenis-kelamin -->
              <br />
              <div class="d-flex mt-3">
                <label class="form-radio-label labelForm" for="jk"
                  >Jenis Kelamin :
                </label>
                <div class="ms-3 mb-3 form-radio">
                  <input
                    type="radio"
                    class="form-radio-input"
                    id="jk"
                    name="jenis_kelamin" required
                  />
                  <label class="form-radio-label" for="jk">Laki - Laki</label>
                </div>
                <div class="ms-3 mb-3 form-radio">
                  <input
                    type="radio"
                    class="form-radio-input"
                    id="jk"
                    name="jenis_kelamin"
                    required
                  />
                  <label class="form-radio-label" for="jk">Perempuan</label>
                </div>
              </div>
              <!-- agama -->
              <div class="input-group mb-3 mt-3">
                <label class="input-group-text" for="inputGroupSelect01"
                  >Agama</label
                >
                <select
                  class="form-select"
                  id="inputGroupSelect01"
                  name="agama" required
                >
                  <option selected>Pilih Salah Satu</option>
                  <option value="1">Islam</option>
                  <option value="2">Kristen</option>
                  <option value="3">Katholik</option>
                  <option value="4">Hindu</option>
                  <option value="5">Buddha</option>
                </select>
              </div>
              <!-- jurusan -->
              <div class="input-group mb-3 mt-3">
                <label class="input-group-text" for="inputGroupSelect01"
                  >Jurusan</label
                >
                <select
                  class="form-select"
                  id="inputGroupSelect01"
                  name="jurusan" required
                >
                  <option selected>Pilih Salah Satu</option>
                  <option value="S1 Informatika">S1 Informatika</option>
                  <option value="S1 Sistem Informasi">
                    S1 Sistem Informasi
                  </option>
                  <option value="S1 Kimia">S1 Kimia</option>
                  <option value="S2 Kimia">S2 Kimia</option>
                </select>
              </div>
              <!-- e-mail -->
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label labelForm"
                  >E-mail</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  name="email" required
                />
                <div id="emailHelp" class="form-text">
                  <i>E-mail Anda tidak akan dibagikan.</i>
                </div>
              </div>
              <!-- tombol -->
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-danger mb-5 SubmitDaftar" name="kirim" id="liveAlertBtn">
                  Submit
                </button>
              </div>
             
            </form>
          </div>
          <div class="col-4">
            <p class="container-fluid mt-5">
              Dimohon untuk mengisi data diri anda secara lengkap, jelas, dan
              jujur. Data yang di-input tidak akan dipublikasikan. Isilah
              formulir secara menyeluruh dan tidak boleh ada yang kosong.
            </p>
          </div>
        </div>
        <footer class="footer-kontak">
          <p><i> &copy; Copyright 2022 | Fakultas Sains dan Informatika</i></p>
          <br />
        </footer>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    <script src="js/kontak.js"></script>

    <?php if($send):?>
      <script>terkirim("Terima Kasih, Data Diri Anda Telah Disimpan!", "info");</script>
      <?php endif; ?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
