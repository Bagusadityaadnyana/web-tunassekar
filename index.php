<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunas Sekar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- logo title bar -->
    <link rel="icon" href="assets/logotunassekar.png" type="image/x-icon">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-transparent navbar-dark position-fixed w-100">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./assets/logotunassekar.png" alt="Logo" width="30" class="d-inline-block align-text-top">
            Tunas Sekar
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#hero">Beranda</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link active" href="#layanan">Layanan</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link active" href="#rekomendasi">Rekomendasi</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link active" href="#kontak">Kontak</a>
              </li>
            </ul>
             <!-- Adit menambahkan php logic login-logout -->
             <div class="login-nav">
                <?php if (!isset($_SESSION["username"])): ?>
                     <a href="login.php" class="m-5" id="loginLink">Login</a>
                <?php else: ?>
                     <a href="logout.php" id="logoutButton">Logout</a>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </nav>

     <!-- hero section -->
     <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Membantu Temukan Tanaman Impian.</h1>
                    <p><span class="fw-bold">Tunas Sekar</span> hadir untuk temukan tanaman cantik untukmu, untuk di budidayakan ataupun di rawat dengan sumber terpercaya.</p>

                    <a class="temukan-tanaman" href="#favorit"> Temukan Tanaman</a>
                    <a href="#favorit">
                        <img src="assets/arrow.png" alt="">
                    </a>
                </div>
            </div>

            <img src="assets/Desain tanpa judul.png" class=" img-hero position-absolute end-0 bottom-0">
        </div>
      </section>

      <!-- layanan section -->
      <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Tunas Sekar hadir menjadi solusi bagi anda.</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/tanaman.png" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Tanaman Hias</h3>
                        <p class="mt-3">Tanaman hias kini menjadi dekorasi indah, beli tanaman hias yang cantik dengan pelayanan terbaik.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/2.png" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Tanaman Hias Costum</h3>
                        <p class="mt-3">Tanaman hias kini dapat di kostum, beli dan kostum tanaman hias yang cantik sesuai permintaan anda dengan pelayanan terbaik.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/2.png" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Konsultasi</h3>
                        <p class="mt-3">Apapun permasalahan dalam merawat tanaman, kini anda dapat berkonsultasi dengan pengelola.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      

      <!-- Rekomendasi Section -->
      <section id="rekomendasi">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2>Rekomendasi Tanaman Hias Untuk Kamu.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                    <img src="assets/card.jpeg">
                    <div class="card-body">
                        <p class="mb-4 lh-sm">Jeruk Limao<br> <span class="text-success">Ready</span></p>
                    </div>
                </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                    <img src="assets/card.jpeg">
                    <div class="card-body">
                        <p class="mb-4 lh-sm"><br>Cocor Bebek<br><span class="text-success">Ready</span></p>
                    </div>
                </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                    <img src="assets/card.jpeg">
                    <div class="card-body">
                        <p class="mb-4 lh-sm">Lidah Mertua<br> <span class="text-success">Ready</span></p>
                    </div>
                </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                    <img src="assets/card.jpeg">
                    <div class="card-body">
                        <p class="mb-4 lh-sm">Kaktus<br> <span class="text-success">Ready</span></p>
                    </div>
                </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                    <img src="assets/card.jpeg">
                    <div class="card-body">
                        <p class="mb-4 lh-sm">Blego<br> <span class="text-success">Ready</span></p>
                    </div>
                </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                    <img src="assets/card.jpeg">
                    <div class="card-body">
                        <p class="mb-4 lh-sm">Lidah Buaya<br> <span class="text-success">Ready</span></p>
                    </div>
                </div>
                </div>
            </div>
            </div>
      </section>

      <!-- carousel section -->
    <section id="favorit" class="mt-5 overflow-hidden">
        <div class="container position-relative">
            <div class="d-flex justify-content-between">
                <div class="col-9">
                    <h2>Tanaman Favorit</h2>
                </div>
                <div class="">
                    <a class="lihat-semua" href="tanaman.html"> Lihat Semua</a>
                </div>
            </div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 d-flex justify-content-start">
                        <div class="card-favorit me-3 position-relative">
                        <img src="assets/imgc.jpeg">
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                <h5>Nama Tanaman</h5>
                                <span>tipe tanaman</span>
                                <h6>IDR.20.000.00</h6>
                                <button>Lihat tanaman</button>
                            </div>
                        </div>
                    </div>

                    <div class="card-favorit me-3 position-relative">
                        <img src="assets/imgc.jpeg">
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                <h5>Nama Tanaman</h5>
                                <span>tipe tanaman</span>
                                <h6>IDR.20.000.00</h6>
                                <button>Lihat tanaman</button>
                            </div>
                        </div>
                    </div>

                    <div class="card-favorit me-3 position-relative">
                        <img src="assets/imgc.jpeg">
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                <h5>Nama Tanaman</h5>
                                <span>tipe tanaman</span>
                                <h6>IDR.20.000.00</h6>
                                <button>Lihat tanaman</button>
                            </div>
                        </div>
                    </div>

                    <div class="card-favorit me-3 position-relative">
                        <img src="assets/imgc.jpeg">
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                <h5>Nama Tanaman</h5>
                                <span>tipe tanaman</span>
                                <h6>IDR.20.000.00</h6>
                                <button>Lihat tanaman</button>
                            </div>
                        </div>
                    </div>

                    <div class="card-favorit me-3 position-relative">
                        <img src="assets/imgc.jpeg">
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                <h5>Nama Tanaman</h5>
                                <span>tipe tanaman</span>
                                <h6>IDR.20.000.00</h6>
                                <button>Lihat tanaman</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <button class="button-left position-absolute start-0 top-50 translate-middle-y">
                    <img src="assets/vector.png" alt="">
                </button>
    
                <button class="button-right position-absolute end-0 top-50 translate-middle-y">
                    <img src="assets/arrow.png" alt="">
                </button>
            </div>
        </div>
    </section>


    <!-- kontak section -->
    <section id="kontak">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Butuh Konsultasi? Silahkan kontak kami kami siap membantu.</h3>
                        <div class="kontak">
                            <h6>kontak</h6>
                            <div class="mb-3 d-flex align-items-center">
                                <div>
                                    <img src="assets/lokasi icon.png" alt="">
                                </div>
                                <a href="https://maps.app.goo.gl/YjMvD3WZX6Mr84Sk7?g_st=iw" target="_blank">Jl. Hayam Wuruk No.103H, Sumerta Kelod, Kec. Denpasar Timur. kota Denpasar,Bali, Indonesia.</a>
                            </div>

                            <div class="mb-3 d-flex align-items-center">
                                <div>
                                    <img src="assets/kontak icon.png" alt="">
                                </div>
                                <a href="#" >08123984764 (celuller)</a>
                            </div>

                            <div class="mb-3 d-flex align-items-center">
                                <div>
                                    <img src="assets/whatsapp icon.png" alt="">
                                </div>
                                <a href="#">082138330777</a>
                            </div>
                        </div>
                        <h6>Social Media</h6>
                            <a href="#" class="me-3" target="_blank"><img src="assets/facebook icon.png" alt=""></a>
                            <a href="#" class="me-3" target="_blank"><img src="assets/instagram icon.png" alt=""></a>
                            <a href="#" class="linktunassekar" target="_blank">tunassekar.bali</a>
                        </div>
                        <div class="col-md-6">
                        <div class="card-kontak w-100">
                            <form name="submit-to-google-sheet">
                                <h2>Butuh Bantuan?</h2>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"  name="email">
                                    <label for="floatingInput" class="d-flex align-items-center">Masukkan alamat email disini..</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="keluhan">
                                    <label for="floatingInput" class="d-flex align-items-center" >Keluh kesah anda..</label>
                                  </div>
                                  <button class="button-kontak" type="submit">kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<!-- footer -->
    <footer class="d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-flex align-items-center">
                        <img src="assets/logotunassekar.png" alt="" class="img">
                        <a href="#" class="ms-3">Tunas Sekar</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-evenly">
                        <a href="#hero">Beranda</a>
                        <a href="#layanan">Layanan</a>
                        <a href="#rekomendasi">rekomendasi</a> 
                        <a href="#kontak">kontak</a> 
                    </div>
                </div>
                <div class="row position-absolute copyright start-50 translate-middle">
                    <div class="col-12">
                        <p>Copyright Kelompok2 @2023.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbzi2DSIZcKTFqeX55hscitUTqzCyMdPBK3xYoFjYxt1WacjgCjmjUlmbwfjmoWjP7gG/exec'
        const form = document.forms['submit-to-google-sheet']
      
        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => {
                    console.log('Success!', response);
                    alert('Data berhasil dikirim!');
                    form.reset();
                })
                .catch(error => console.error('Error!', error.message))
        })
      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>