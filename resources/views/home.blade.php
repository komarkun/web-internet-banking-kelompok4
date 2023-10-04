<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Internet Banking Kelompok 4</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('import_home/assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('import_home/assets/css/styles.css') }}" rel="stylesheet" />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'><link rel="stylesheet" href="{{ asset('import_home/assets/css/style.css') }}">
    </head>
    <body>
       <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark static-top">
          <div class="container">
            <a class="navbar-brand text-white" href="#!">Web Internet Banking Kelompok 4</a>
              <!-- Tombol toggle untuk navbar collapse -->
              <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link text-white" href="#dashboard">Dashboard</a></li> 
                    <li class="nav-item"><a class="nav-link text-white" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#calculator">Calculator Pinjaman</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#bantuan">Bantuan</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#kontak">Kontak</a></li>
                    <li class="nav-item">
                      <a class="btn btn-primary" href="{{ route('login') }}">Sign Up / Login</a>
                    </li>
                  </ul>
              </div>
          </div>
      </nav>

        <!-- Masterhead -->
        <header class="masthead" style="background-image: url('/images/bg.png'); height: 750px; background-size: 100% 100%;">
          <div class="container position-relative">
              <div class="row justify-content-center">
                  <div class="col-xl-6" style="padding-top: 50px; padding-bottom: 50px;">
                  </div>
              </div>
          </div>
        </header>
      
        <!-- Fitur-->
        <section class="features-icons bg-dark text-center text-white" id="fitur">
            <div class="container">
              <h1 class="text-center">Fitur</h1><br>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-cash-coin m-auto text-primary"></i></div>
                            <h3>Pinjaman</h3>
                            <p class="lead mb-0">Solusi pinjaman dengan berbagai pilihan yang dapat disesuaikan dengan kebutuhan anda.Klik untuk menghitung pinjaman anda <a class="btn btn-primary" href="{{ url('/calculator') }}">Calculator</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-piggy-bank-fill m-auto text-primary"></i></div>
                            <h3>Menabung</h3>
                            <p class="lead mb-0">Nikmati kemudahan menabung dengan mengaktifkan fitur pembayaran otomatis ke rekening tabungan Anda</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-share m-auto text-primary"></i></div>
                            <h3>Transfer Uang</h3>
                            <p class="lead mb-0">Layanan Pengiriman dan Penerimaan Uang secara mudah dan aman</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br>
        
        <!-- Kalkulator-->
        <section class="calculator" id="calculator">
          <div class="col-md-6 mx-auto calculate-form">
              <div class="card card-body text-center mt-5">
                <h1 class="heading display-5 pb-3">Calculator Pinjaman</h1>
                <form id="loan-form">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">rp</span>
                      </div>
                      <input
                        type="number"
                        class="form-control"
                        id="amount"
                        placeholder="Jumlah Pinjaman"
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">%</span>
                      </div>
                      <input
                        type="number"
                        class="form-control"
                        id="interest"
                        placeholder="Bungan"
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <input
                      type="number"
                      id="years"
                      class="form-control"
                      placeholder="Angsuran Tahun Pembayaran"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="submit"
                      value="Calculate"
                      class="btn btn-dark btn-block"
                    />
                  </div>
                </form>
                <!-- Loader Here -->
                <div id="loading">
                  <img
                    src="https://media.giphy.com/media/jAYUbVXgESSti/giphy.gif"
                    alt=""
                  />
                </div>
                <!-- Results -->
                <div id="result">
                  <h5>Results</h5>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Biaya Bayar Perbulan</span>
                      </div>
                      <input
                        type="number"
                        class="form-control"
                        id="monthly-payment"
                        disabled
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Total Pembayaran</span>
                      </div>
                      <input
                        type="number"
                        class="form-control"
                        id="total-payment"
                        disabled
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Total dengan Bunga</span>
                      </div>
                      <input
                        type="number"
                        class="form-control"
                        id="total-interest"
                        disabled
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section><br><br>
       
    <!-- Bantuan-->
    <section class="bantuan" id="bantuan">>
      <div class="mdr-content text-center">
        <h3 class="h1">Bantuan & FAQ</h3>
        <p>Kami siap untuk melayani dan menjawab pertanyaan Anda.</p>
      </div><br>
  
      <div class="clearfix journal-content-article" data-analytics-asset-id="41536907" data-analytics-asset-title="Media Penyampaian Pengaduan Nasabah" data-analytics-asset-type="web-content">
        <section class="module-feature module-feature-no-padding">
            <div class="container container-md">
                <div class="row row-20">
                    <div class="col-sm-5 offset-sm-1"> <!-- Menggunakan kelas offset-sm-2 -->
                        <img src="http://localhost:8000/images/pengaduan-1.png" class="img-responsive" alt="Product" width="250" height="200">
                    </div>
                    <div class="col-sm-6">
                        <h3>Media Penyampaian Pengaduan Nasabah</h3>
                        <p>Menyediakan Mekanisme Penyampaian Pengaduan jika nasabah mengalami kendala ketika bertransaksi.</p>
                        <a href="/web/guest/pengaduan-nasabah" class="read-more">Selengkapnya<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
      </div><br>
      <div class="clearfix journal-content-article" data-analytics-asset-id="41536907" data-analytics-asset-title="Media Penyampaian Pengaduan Nasabah" data-analytics-asset-type="web-content">
        <section class="module-feature module-feature-no-padding">
            <div class="container container-md">
                <div class="row row-20">
                    <div class="col-sm-5 offset-sm-1"> <!-- Menggunakan kelas offset-sm-2 -->
                        <img src="http://localhost:8000/images/Edukasi-01.png" class="img-responsive" alt="Product" width="250" height="200">
                    </div>
                    <div class="col-sm-6">
                        <h3>Edukasi Keamanan dalam Bertransaksi</h3>
                        <p>Senantiasa memberikan edukasi mengenai keamanan dalam transaksi dan jaga data rahasia.</p>
                        <a href="/web/guest/pengaduan-nasabah" class="read-more">Selengkapnya<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
      </div><br>
    </section>
          
      <!-- Kontak Kami-->
      <section class="kontak" id="kontak">
        <div class="container" style="background-collor:#808080;">
          <div class="row">
            <div class="mouse">
              <a href="#" class="mouse-icon">
                  <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
              </a>
            </div>
          </div><br>
          <div class="box-inner">
              <h3>Bank Online  <span class="show_content_child hidden"></span> </h3>
                <div class="content_foot">
                  <p>Revolusi Keuangan di Genggamanmu, Membuat Impian Menjadi Kenyataan</p>
                </div>
                </div><br>
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                          <h3>Kantor Pusat <span class="show_content_child hidden"></span> </h3>
                              <p>PT.Bank Online Kelompok 4.<br></p>
                              Gedung Utama <br>
                              Jl. Yos Sudarso No.44<br>
                              Jakarta 10210, Indonesia<br>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                      <ul class="list-inline mb-0">
                          <li class="list-inline-item me-4">
                              <a href="#!"><i class="bi-facebook fs-3"></i></a>
                          </li>
                          <li class="list-inline-item me-4">
                              <a href="#!"><i class="bi-twitter fs-3"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="#!"><i class="bi-instagram fs-3"></i></a>
                          </li>
                      </ul>
                    </div><br>
                </nav>
            </div>
          </div>
      </section>
       
        <!-- Footer-->
        <footer class="footer-end bg-dark" id="footer" role="contentinfo">
          <div class="container-fluid py-2">
              <div class="row" style="margin: 0 auto; text-align: center;">
                  <div class="col-sm-12">
                      <p class="text-muted text-white small mb-4 mb-lg-0" style="text-align: center;">Copyright &copy; Kelompok 4 IT Perbankan 2023</p>
                  </div>
              </div>
          </div>
       </footer>
          
      

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
      ></script>
      <script src="{{ asset('import_home/assets/js/scripts.js') }}"></script>
    </body>
</html>
