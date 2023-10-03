<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VotePad</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  {{-- href="{{asset('/login/mobile_logo_1_0.png')}}" --}}
  <!-- Favicons -->
  <link href="/assets/mobile_logo_1_0.png" rel="icon">
  <link href="/assets/mobile_logo_1_0.png" rel="apple-touch-icon">

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
  @media (min-width: 992px){
.col-lg-3 {
    flex: 0 0 auto;
    width: 20%;

}
}
  @media (min-width: 1350px){

.team .member .member-img {
    position: relative;
    overflow: hidden;
    min-height: 245px;
} 

}
.img-fluid {
  max-width: 100%;
  height: auto;
  min-height: 182px;
}
/* .team .member .member-img {
    position: relative;
    overflow: hidden;
    min-height: 245px;
} */
</style>
</head>
<!-- 
OptiGuide
Solar-AgriBot
AiGo
Tefli
BagGuard
 -->
<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      
      <h1 class="logo me-auto"><a href="{{route('user.voting.index')}}" class="logo me-auto"><img src="/assets/logo.svg" alt=""></a><a href="index.html">VotePad</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      @if(session()->get('voted'))
      <div class="alert alert-light" role="alert" id="dev" style="margin-right: 4rem;">
        The team was voted in successfully
        </div>
      @endif
      <script>
          setTimeout(function() {
            document.getElementById('dev').style.display = 'none';
        }, 4000);
      </script>    
        <nav id="navbar" class="navbar order-last order-lg-0">
        <h6 style="color: white;"><span style="color: #ff7900;">Welcom, </span> {{$data->name}}<h5>
        <ul>
          {{-- <li><h4>welcom,</h4></li> --}}
    
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="{{route('logout')}}">Logout</a></li> --}}
      
        </ul>
          {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}
      </nav><!-- .navbar -->

      {{-- <a href="#team" class="get-started-btn scrollto">Start voting</a> --}}
    </div>
  
  </header><!-- End Header -->
  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">


    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Orange Summer challenge 2023</h1>
          <!-- <h2></h2> -->
          <a href="#team" class="btn-get-started scrollto">Start voting</a>
        </div>
      </div>
    </div>
  
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Clients Section -->



  {{-- {{dd($teams)}} --}}

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team Selection</h2>
          <h3>OSC #2023</h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-5 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/opti.png" class="img-fluid" alt="">
                <div class="social">
                  {{-- @foreach ($teams as $item) --}}
                  @if (in_array("1", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 2px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>      
                

                  @else
                      <a href="{{route('user.voting.show',1)}}">Vote</i></a>
                      
                  @endif
                  {{-- @endforeach --}}
                  {{-- <a href="{{route('user.voting.show',1)}}">Vote</i></a> --}}

              
                </div>
              </div>
              <div class="member-info">
                <h4>OptiGuide</h4>
                <span>A futuristic visual Aid comprised of an AI-powered phone application and two tactile wristbands.</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/Agribot_highq_logo2.png" class="img-fluid" alt="">
                <div class="social">
                  {{-- @foreach ($teams as $item) --}}
                  @if (in_array("2", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 2px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>                  
                

                  @else
                      <a href="{{route('user.voting.show',2)}}">Vote</i></a>
                  @endif
              {{-- @endforeach               --}}
                </div>
              </div>
              <div class="member-info">
                <h4>Solar-AgriBot</h4>
                <span>An autonomous agricultural robot designed to revolutionize modern farming.</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/aigo.jpg" class="img-fluid" alt="">
                <div class="social">
                  {{-- @foreach ($teams as $item) --}}
                  @if (in_array("3", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 2px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>                  
                  

                  @else
                      <a href="{{route('user.voting.show',3)}}">Vote</i></a>
                  @endif
                  {{-- @endforeach --}}
              
                </div>
              </div>
              <div class="member-info">
                <h4>AiGo</h4>
                <span>Your pocket-sized time-travel guide buddy, providing immersive historical tours experiences.</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/TEFLI-Stickers.jpg" class="img-fluid" alt="">
                <div class="social">
                  {{-- @foreach ($teams as $item) --}}
                  @if (in_array("4", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 2px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>
                  
                  
                  @else
                      <a href="{{route('user.voting.show',4)}}">Vote</i></a>

                  @endif
              {{-- @endforeach               --}}
                </div>
              </div>
              <div class="member-info">
                <h4>Tefli</h4>
                <span>A baby monitoring device that analyzes and predicts a baby's needs based on their cry.</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/bagard.png" class="img-fluid" alt="">
                <div class="social">
                  {{-- @foreach ($teams as $item) --}}
                  @if (in_array("5", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 2px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>
                

                  @else
                      <a href="{{route('user.voting.show',5)}}">Vote</i></a>

                  @endif
                  {{-- @endforeach            --}}
                </div>
              </div>
              <div class="member-info">
                <h4>BagGuard</h4>
                <span>Revolutionizing travel with its state-of-the-art luggage tracking system.</span>
              </div>
            </div>
          </div>

          



        </div>

      </div>
    </section><!-- End Team Section -->



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