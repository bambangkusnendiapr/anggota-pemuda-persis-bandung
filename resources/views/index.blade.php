<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Anggota Pemuda Persis Kota Bandung</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('assets/img/logo.png') }}" rel="icon">
  <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi - v2.2.0
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">PD BDG</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">PC</a></li>
          <li><a href="#portfolio">Anggota</a></li>
          <li><a href="#footer">Kontak</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <a href="{{ route('logout') }}" class="get-started-btn scrollto" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>

      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>DATABASE ANGGOTA</h1>
      <h2>Website Database Anggota Pemuda Persis Kota Bandung</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-6 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-building"></i>
                  <span data-toggle="counter-up">{{ $pc }}</span>
                  <p>Pimpinan Cabang</p>
                </div>
              </div>

              <div class="col-lg-6 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-people"></i>
                  <span data-toggle="counter-up">{{ $jml_anggota }}</span>
                  <p>Anggota</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>Pimpinan Daerah Pemuda Persatuan Islam Kota Bundung</h3>
            <ul>
              <li><i class="bx bx-check-double"></i> Perekrutan calon kader Pemuda Persatuan Islam Kota Bandung</li>
              <li><i class="bx bx-check-double"></i> Pembinaan kader Pemuda Persatuan Islam Kota Bandung</li>
              <li><i class="bx bx-check-double"></i> Pemberdayaan kader Pemuda Persatuan Islam Kota Bandung</li>
            </ul>
            <p>
              Tiga poin diatas merupakan tugas pokok kami dalam merencanakan dan melaksanakan setiap program jihad
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>DAFTAR</h2>
          <p>PIMPINAN CABANG</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">

                  <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>#</th>
                          <th>PIMPINAN CABANG</th>
                          <th>KETUA</th>
                          <th>DETAIL</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $e=>$dt)                      

                          <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $dt->pc_nama }}</td>
                            <td>{{ $dt->pc_ketua }}</td>                            
                            <td>
                              <a href="#" data-target="#modal-pc{{ $dt->id }}" class="btn btn-primary btn-sm" data-toggle="modal">Detail</a>
                            </td>
                          </tr>

                          @endforeach
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>

                </div>
              </div>
            </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>DAFTAR</h2>
          <p>SEMUA ANGGOTA</p>
        </div>
        
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">

                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example3" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>NAMA ANGGOTA</th>
                        <th>PIMPINAN CABANG</th>
                        <th>DETAIL</th>
                      </tr>
                      </thead>
                      <tbody>
                      
                      @foreach($anggota as $e=>$dt)                      

                      <tr>
                        <td>{{ $e+1 }}</td>
                        <td>{{ $dt->nama }}</td>
                        <td>{{ $dt->pc->pc_nama }}</td>
                        <td>
                          <a href="#" data-target="#modal-anggota{{ $dt->anggota_id }}" class="btn btn-success btn-sm" data-toggle="modal">Detail</a>
                        </td>
                      </tr>

                      @endforeach

                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>

              </div>
            </div>
          </div>
      </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>LOGIN</h2>
          <p>SILAHKAN LOGIN</p>
        </div>

        <div class="row">

        </div>

      </div>
    </section> -->
    <!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>PD. Pemuda Persis</h3>
              <h3>Kota Bandung</h3>
              
              
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <p>
                Jl. Astanaanyar <br>
                No. 310 Kota Bandung<br><br>
                <strong>Phone:</strong><br>+62 821-21377835
              </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          <h4>Link</h4>
          <div class="social-links mt-3">
                <a href="https://pemudapersisbandung.org/" target="_blank"><i class='bx bx-world'></i></a>
                <a href="https://www.facebook.com/pemudapersiskotabandung/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/pemudapersiskotabandung/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Kontak Kami</h4>
            <p>Bagi rekan-rekan yang merasa datanya tidak ada atau ada data yang kurang silahkan hubungi kami </p>
            <a href="https://api.whatsapp.com/send?phone=6287828689666&text=Bismillah,%20Kang,%20datanya%20ada%20yang%20kurang." target="_blank" class="btn btn-primary">WA Kami</a>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <a href="https://pemudapersisbandung.org/" target="_blank"><strong><span>PD. Pemuda Persis Kota Bandung</span></strong></a>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- modal pc -->
  @foreach($data as $dt)
  <div class="modal fade" id="modal-pc{{$dt->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h4 class="modal-title modal_pc">{{ $dt->pc_nama }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">

              <div class="col-md">
                <strong><i class="icofont-email"></i> Email</strong>

                  <p class="text-muted pc_email">
                    {{ $dt->pc_email}}
                  </p>

                  <hr>

                  <strong><i class="icofont-location-pin"></i> Alamat</strong>

                  <p class="text-muted pc_alamat">{{ $dt->pc_alamat}}</p>

                  <hr>

                  <strong><i class="icofont-business-man-alt-1"></i> Ketua</strong>

                  <p class="text-muted pc_ketua">{{ $dt->pc_ketua}}</p>

                  <hr>

                  <strong><i class="icofont-ui-v-card"></i> NPA</strong>

                  <p class="text-muted pc_npa_ketua">{{ $dt->pc_npa_ketua}}</p>

                  <hr>

                  <strong><i class="icofont-smart-phone"></i> No HP</strong>

                  <p class="text-muted pc_hp_ketua">{{ $dt->pc_hp_ketua}}</p>

                  <hr>

                  <strong><i class="icofont-handshake-deal"></i> Masa Jihad</strong>

                  <p class="text-muted">
                    <span class="pc_mulai">{{ \Carbon\Carbon::parse($dt->pc_mulai)->format('Y') }}</span> - <span class="pc_selesai">{{ \Carbon\Carbon::parse($dt->pc_selesai)->format('Y') }}</span>
                  </p>

              </div>

              <div class="col-md"><strong><i class="icofont-ui-calendar"></i> Hari Ngantor</strong>

                  <p class="text-muted pc_ngantor">{{ $dt->pc_ngantor}}</p>

                  <hr>

                  <strong><i class="icofont-clock-time"></i> Waktu Ngantor</strong>

                  <p class="text-muted pc_jam">{{ $dt->pc_jam}}</p>

                  <hr>

                  <strong><i class="icofont-building-alt"></i> Jumlah PJ</strong>

                  <p class="text-muted pc_pj">{{ $dt->pc_pj}}</p>

                  <hr>

                  <strong><i class="icofont-users-alt-1"></i> Jumlah Anggota</strong>

                  <p class="text-muted jml_anggota">{{ $dt->member->count() }}</p>

                  <hr>

                  <strong><i class="icofont-users"></i> Utusan Musda</strong>

                  <p class="text-muted pc_hp_ketua">
                    @php
                      $jmlAnggota = $dt->member->count();
                      $utusanAnggota = floor($jmlAnggota/20);
                      $utusanMusda = 1 + $utusanAnggota;
                      

                      if($utusanMusda == 1) {
                        echo "1 Orang (1 Ketua PC)";
                      } else {
                        echo $utusanMusda." Orang (1 Ketua PC dan ".$utusanAnggota." Utusan)";
                      }
                    @endphp
                  </p>

                  <hr>

                  <strong><i class="icofont-ui-note"></i> Keterangan</strong>

                  <p class="text-muted pc_ket">{{ $dt->pc_ket }}</p>
              </div>
            </div>
          </div>
                          
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach

  <!-- modal anggota -->
  @foreach($anggota as $dt)
  <div class="modal fade" id="modal-anggota{{ $dt->anggota_id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title nama">{{ $dt->nama }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">

              <div class="col-md">
                <strong><i class="icofont-building-alt"></i> Asal PC</strong>

                  <p class="text-muted asal_pc">
                  {{ $dt->pc->pc_nama }}
                  </p>

                  <strong><i class="icofont-ui-calendar"></i></i> TTL</strong>

                  <p class="text-muted lahir">{{ $dt->anggota_lahir }}</p>

                  <strong><i class="icofont-ui-v-card"></i> NPA</strong>

                  <p class="text-muted npa">{{ $dt->anggota_npa }}</p>

                  <strong><i class="icofont-location-pin"></i> Alamat KTP</strong>

                  <p class="text-muted alamat_ktp">{{ $dt->anggota_almt_ktp }}</p>

                  <strong><i class="icofont-location-pin"></i> Alamat Sekarang</strong>

                  <p class="text-muted alamat_sekarang">{{ $dt->anggota_almt_sekarang }}</p>

                  <strong><i class="icofont-love"></i> Status Merital</strong>

                  <p class="text-muted merital">
                  {{ $dt->anggota_merital }}
                  </p>

              </div>

              <div class="col-md">
                  <strong><i class="icofont-business-man-alt-1"></i> Pekerjaan</strong>

                  <p class="text-muted kerja">{{ $dt->anggota_kerja }}</p>

                  <strong><i class="icofont-business-man-alt-1"></i> Bidang Pekerjaan</strong>

                  <p class="text-muted jenis_kerja">{{ $dt->anggota_jenis_kerja }}</p>

                  <strong><i class="icofont-email"></i> Email</strong>

                  <p class="text-muted email">{{ $dt->anggota_email }}</p>

                  <strong><i class="icofont-smart-phone"></i> No HP</strong>

                  <p class="text-muted hp">{{ $dt->anggota_hp }}</p>

                  <strong><i class="icofont-school-bag"></i> Pendidikan Terakhir</strong>

                  <p class="text-muted">
                    <span class="pend_terakhir">{{ $dt->anggota_pend_akhir }}</span> - <span class="jurusan">{{ $dt->anggota_jurusan }}</span>
                  </p>

                  

                  <strong><i class="icofont-chart-growth"></i> Tingkat Kaderisasi Terakhir</strong>

                  <p class="text-muted">
                    <span class="kaderisasi">{{ $dt->anggota_kaderisasi }}</span> - <span class="tahun_kader">{{ $dt->anggota_tahun_kader }}</span>
                  </p>
              </div>
            </div>
          </div>
                          
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach
  <!-- /.modal -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ url('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ url('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('assets/js/main.js') }}"></script>

  <!-- DataTables -->
<script src="{{ url('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('adminlte/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "autoWidth": false,
      "scrollX": true,
    });
    $("#example3").DataTable({
      "autoWidth": false,
      "scrollX": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>

</html>