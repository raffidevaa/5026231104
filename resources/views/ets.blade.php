<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Unilever</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/logo-unilever.svg" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function isValidEmail(email) {
        return email.includes("@");
      }
      function isValidPhoneNumber(phone) {
        // Validasi: hanya angka, panjang minimal 10 dan maksimal 13 digit
        const phoneRegex = /^[0-9]{10,13}$/;
        return phoneRegex.test(phone);
      }
      function formValidation() {
        var nama = document.getElementById("nama").value;
        var email = document.getElementById("email").value;
        var nomortelepon = document.getElementById("nomortelepon").value;
        var pesan = document.getElementById("pesan").value;

        if (nama.length < 1) {
          Swal.fire({
            title: "Pesan Kesalahan",
            text: "Nama harus diisi!",
            icon: "error",
          });
          document.getElementById("nama").focus();
          return false;
        }
        if (nama.length < 1) {
          Swal.fire({
            title: "Pesan Kesalahan",
            text: "Email harus diisi!",
            icon: "error",
          });
          document.getElementById("email").focus();
          return false;
        }
        if (nomortelepon.length < 1) {
          Swal.fire({
            title: "Pesan Kesalahan",
            text: "Nomor Telepon harus diisi!",
            icon: "error",
          });
          document.getElementById("nomortelepon").focus();
          return false;
        }
        if (pesan.length < 1) {
          Swal.fire({
            title: "Pesan Kesalahan",
            text: "Pesan harus diisi!",
            icon: "error",
          });
          document.getElementById("pesan").focus();
          return false;
        }

        if (/\d/.test(nama)) {
          Swal.fire({
            title: "Pesan Kesalahan",
            text: "Nama tidak boleh angka!",
            icon: "error",
          });
          document.getElementById("nama").focus();
          return false;
        }

        if (!isValidEmail(email)) {
          Swal.fire({
            title: "Pesan Kesalahan",
            text: "Email tidak valid!",
            icon: "error",
          });
          document.getElementById("email").focus();
          return false;
        }

        if (!isValidPhoneNumber(nomortelepon)) {
          Swal.fire({
            title: "Pesan Kesalahan",
            text: "Nomor Telepon tidak valid!",
            icon: "error",
          });
          document.getElementById("nomortelepon").focus();
          return false;
        }

        return true;
      }
    </script>
  </head>
  <body>
    <!-- Navigation-->
    <nav
      class="navbar navbar-light static-top"
      style="background-color: #001f82"
    >
      <div class="container">
        <a class="navbar-brand text-white" href="#!">Unilever</a>
        <a class="btn btn-primary" href="#signup">Sign Up</a>
      </div>
    </nav>

    <!-- Hero Section 1 -->
    <section class="showcase">
      <div class="container-fluid p-0" style="background-color: #0454e5">
        <div class="row g-0">
          <div
            class="col-lg-6 order-lg-2 text-white showcase-img"
            style="background-image: url('assets/img/img-section1.jpeg')"
          ></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h1 class="text-white">Selamat Datang di Unilever Indonesia</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Card Section 2-->
    <section
      class="features-icons text-center"
      style="background-color: #001f82"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-4 p-3 mb-5" style="background-color: #001f82">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 mt-5">
              <img
                class="text-white"
                src="assets/img/img-section2.svg"
                alt=""
              />
              <h2 class="lead mb-0 font-weight-bold text-white">
                Kami Unilever Indonesia
              </h2>
            </div>
          </div>
          <div
            class="col-lg-2 shadow p-3 mb-5"
            style="background-color: #0454e5"
          >
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <h1 class="mt-5 text-white">91</h1>
              <h3 class="text-white">tahun</h3>
              <p class="lead mb-0 text-white">Bersama masyarakat Indonesia</p>
            </div>
          </div>
          <div
            class="col-lg-2 shadow p-3 mb-5"
            style="background-color: #025dff"
          >
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <h1 class="mt-5 text-white">100%</h1>
              <h3 class="text-white">Pabrik kami</h3>
              <p class="lead mb-0 text-white">
                Menerapkan Sistem Jaminan Halal
              </p>
            </div>
          </div>
          <div
            class="col-lg-2 shadow p-3 mb-5"
            style="background-color: #0454e5"
          >
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <h1 class="mt-5 text-white">40+</h1>
              <h3 class="text-white">merek</h3>
              <p class="lead mb-0 text-white">
                yang dekat dengan keseharian masyarakat Indonesia
              </p>
            </div>
          </div>
          <div
            class="col-lg-2 shadow p-3 mb-5"
            style="background-color: #025dff"
          >
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <h1 class="mt-5 text-white">12</h1>
              <h3 class="text-white">kategori industry FMCG</h3>
              <p class="lead mb-0 text-white">
                Unilever Indonesia menjadi pemimpin pasar
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3 -->
    <section class="showcase" style="background-color: #0454e5">
      <div class="container-fluid p-0">
        <div class="row g-0">
          <div
            class="col-lg-6 text-white showcase-img"
            style="background-image: url('assets/img/img-section3.jpeg')"
          ></div>
          <div class="col-lg-6 my-auto showcase-text text-white">
            <h2>Temukan Cerita Perjalanan Kami Bersama Masyarakat Indonesia</h2>
            <p class="lead mb-0">
              Perjalanan kami di Indonesia dimulai pada 5 Desember 1933. Hingga
              sejak itu, sampai hari ini, komitmen kami semakin kuat, kami ingin
              terus bersama dan bertumbuh dengan masyarakat Indonesia untuk
              menciptakan Indonesia yang lebih sehat, lebih lestari dan lebih
              sejahtera.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Card Section 4-->
    <section
      class="testimonials text-center text-white"
      style="background-color: #001f82"
    >
      <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
          <div
            class="col-lg-4 shadow p-3 mb-5"
            style="background-color: #025dff"
          >
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img
                class="img-fluid rounded-circle mb-3"
                src="assets/img/img-section4-1.jpeg"
                alt="..."
              />
              <h5>Keberlanjutan</h5>
              <p class="font-weight-light mb-0">
                Selama lebih dari dua dekade, kami berkomitmen dan telah
                mendorong agenda keberlanjutan yang ambisius. Terlepas dari
                adanya tantangan ekonomi, lingkungan, dan sosial, kami terus
                mengembangkan pendekatan kami.
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 shadow p-3 mb-5"
            style="background-color: #025dff"
          >
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img
                class="img-fluid rounded-circle mb-3"
                src="assets/img/img-section4-2.jpeg"
                alt="..."
              />
              <h5>Karier di Unilever</h5>
              <p class="font-weight-light mb-0">
                Kunjungi situs karier kami untuk mencari info pekerjaan. Temukan
                jugainformasi tentang bagaimana pengalaman bekerja untuk kami.
                Sebagai informasi, bahasa yang tersedia pada situs karier adalah
                bahasa Inggris.
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 shadow p-3 mb-5"
            style="background-color: #025dff"
          >
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img
                class="img-fluid rounded-circle mb-3"
                src="assets/img/img-section4-3.jpeg"
                alt="..."
              />
              <h5>Berita & media</h5>
              <p class="font-weight-light mb-0">
                Siaran pers dan informasi kontak media untuk parajurnalis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Form Section 5-->
    <section class="call-to-action text-white text-center">
      <div class="container position-relative">
        <div class="row justify-content-center">
          <div class="col-xl-6">
            <h2 class="mb-4">Contact Us!</h2>
            <form
              id="frmpendaftaran"
              action="https://google.co.id"
              method="get"
              onsubmit="return formValidation()"
            >
              <input
                type="text"
                id="nama"
                class="form-control"
                placeholder="Nama"
                name="nama"
              />
              <br />
              <input
                type="text"
                id="email"
                class="form-control"
                placeholder="Email"
                name="email"
              />
              <br />
              <input
                type="number"
                id="nomortelepon"
                class="form-control"
                placeholder="Nomor Telepon"
                name="nomortelepon"
              />
              <br />
              <input
                type="text"
                id="pesan"
                class="form-control"
                placeholder="Pesan"
                name="pesan"
              />
              <br />
              <input type="submit" class="btn btn-primary" value="Submit" />
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
