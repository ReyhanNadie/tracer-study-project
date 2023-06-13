<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Tracer Study PILKOM</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h1>Tracer Study</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#statistik">Statistik</a></li>
              <li class="scroll-to-section"><a href="#alumni">Alumni</a></li>
              <li><div class="gradient-button"><a href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i>Masuk</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Selamat Datang Di Website<br>Tracer Study<br>Prodi Pendidikan Komputer</h2>
                    <p>Tracer Study adalah website yang mengumpulkan data tentang kiprah lulusan di dunia kerja untuk meningkatkan kualitas pendidikan dan program-program perguruan tinggi. Data yang dikumpulkan mencakup data kelulusan alumni, data pekerjan alumni, dan lain lain.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/Data report-pana.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="statistik" class="services section">
    <div class="container text-center">
      <div class="row row-cols-2">
        <div class="chart-container bg-light">
          <h2>Data Alumni</h2>
          <canvas id="myChart"></canvas>
        </div>
        <div class="chart-container bg-light">
          <h2>Data Pekerjaan Alumni</h2>
          <canvas id="myChart4"></canvas>
        </div>
        <div class="chart-container bg-light">
          <h2>Persebaran Alumni</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32659974.64064838!2d95.93388606695005!3d-2.2238796070165416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sid!2sid!4v1684811261411!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="chart-container bg-light">
          <h2>Lama Alumni Mendapatkan pekerjaan</h2>
          <canvas id="myChart2"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div id="alumni" class="about-us section">
    <section id="hero2">
      <div class="container p-3">
          <div class="cont">
              <h1 class="text-center">Cari Mahasiswa</h1>
              <div class="row justify-content-center mt-5">
                  <div class="col-md-5">
                      <div class="form">
                          <form method="get" action="{{ route('alumni') }}">
                              <div class="mb-3">
                                  <label for="nama" class="form-label">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama">
                              </div>
                              <div class="mb-3">
                                  <label for="nim" class="form-label">NIM</label>
                                  <input type="nim" class="form-control" id="nim" name="nim">
                              </div>
                              <div class="row text-end">
                                  <div class="col-md-12">
                                      <button type="submit" class="button-mhs">Cari Mahasiswa</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    // Mengambil konteks canvas
    var ctx = document.getElementById('myChart').getContext('2d');
    // Membuat data untuk grafik
    var data = {
      labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021'],
      datasets: [{
        label: 'Jumlah Alumni',
        data: [100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650],
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }]
    };
    // Membuat grafik
    var myChart = new Chart(ctx, {
      type: 'line',
      data: data,
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
        
  </script>
    <script>
    // Data untuk grafik
    const data2 = {
      labels: ['Kurang dari 3 bulan', 'Kurang dari 6 bulan', 'Kurang dari 1 tahun', 'Lebih dari 1 tahun'],
      datasets: [{
        label: 'Lama Alumni Mendapatkan Pekerjaan',
        data: [10, 20, 30, 40],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    };

    // Opsi untuk grafik
    const options2 = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    };

    // Buat grafik
    const ctx2 = document.getElementById('myChart2').getContext('2d');
    const myChart2 = new Chart(ctx2, {
      type: 'bar',
      data: data2,
      options: options2
    });
  </script>

  <script>
    // Data untuk grafik
    const data4 = {
      labels: ['PTKIN', 'PTS (Umum)', 'PTIS (Agama)', 'Bekerja', 'Ponpes', 'Lainnya'],
      datasets: [{
        label: 'Data Pekerjaan Alumni',
        data: [186, 20, 1, 25, 10, 103],
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)'
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)'
        ],
        borderWidth: 1
      }]
    };

    // Opsi untuk grafik
    const options4 = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    };

    // Buat grafik
    const ctx4 = document.getElementById('myChart4').getContext('2d');
    const myChart4 = new Chart(ctx4, {
      type: 'bar',
      data: data4,
      options: options4
    });
  </script>
</body>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracer Study PILKOM</title>
</head>
<body>
    @extends('layouts.main')

    @section('container')
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline">
                    <h1>Selamat Datang Di Website Tracer Study Prodi Pendidikan Komputer</h1>
                    <p><span class="fw-bold">Tracer Study</span> adalah website yang mengumpulkan data tentang kiprah lulusan di dunia kerja untuk meningkatkan kualitas pendidikan dan program-program perguruan tinggi. Data yang dikumpulkan mencakup data kelulusan alumni, data pekerjan alumni, dan lain lain.</p>
                    
                </div>
                <div class="col-md-6">
                    <img src="/img/Data report-pana.png" alt="Gambar" />
                </div>
            </div>
        </div>
    </section>
    @endsection

</body>
</html> --}}
