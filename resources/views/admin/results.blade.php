<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VotePad -Voting results</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/mobile_logo_1_0.png" rel="icon">
  <link href="assets/mobile_logo_1_0.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
<style>
  #radio{
    margin-left: 20px;
  }
  .lablered{

    font-size: 20px;

  }
  .submit{
    background: none !important;
    display: flex  !important;
    justify-content: center !important;
    margin-bottom:0px !important;
  }
  .btn:hover {
    color: white;
    background-color:#ff7900;
    border-color: white;
}

</style>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      
      <h1 class="logo me-auto"><a href="index.html" class="logo me-auto"><img src="/assets/logo.svg" alt=""></a><a href="index.html">VotePad</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
  

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('logout')}}" class="get-started-btn scrollto">Logout</a>
    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container" style="
      margin-top: 16px;
  ">

        <ol>
          <li><a href="index.html">OSC #2023</a></li>
          <li>Voting Results</li>
        </ol>
        <h2>Voting Results</h2>

      </div>
    </section><!-- End Breadcrumbs -->

      <!-- ======= table ======= -->
    <br>
    <br>
    
    <br>
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Results Table</h2>
          </div>

          <div class="row">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name Team</th>
                  <th scope="col">Average</th>
                  <th scope="col">Final Score</th>
                  
                </tr>
              </thead>
              <tbody>

                <?php $x=1 ?>

                @foreach ($teams as $team)


                <tr>  
                  <th scope="row">{{$x}}</th>
                  <td>{{$team->team_name}}</td>
                  <?php $resultRate=0 ?>
                  <?php $i=1 ?>
                  @foreach ($data as $item)

                      @if ($item->team_id == $team->id)    
                      <?php $resultRate+=$item->average ?>
                      <?php $i+=1 ?>
                      @endif

                      @endforeach
                      @if ($i > 1)
                  <td>{{$resultRate/($i-1)}}</td>
                  
                  <td>{{($resultRate/($i-1))*2}}</td>
                  @else
                  <td></td>
                  
                  <td></td>
                  @endif
                  <?php $x+=1 ?>
                </tr>


                <?php $resultRate=0 ?>
                <?php $i=1 ?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <br>
        <!-- ======= table ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer"> 

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
    
        <!-- <div class="copyright">
          &copy; Copyright <strong><span>Orange</span></strong>. powered by Orange Digital Center
        </div> -->
        <div class="credits">
          powered by <a href="">Orange Digital Center</a>
        </div>
      </div>
      <!-- <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>