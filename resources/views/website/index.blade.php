<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JuryVote</title>
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
          .alert {
            --bs-alert-bg: transparent;
            --bs-alert-padding-x: 1rem;
            --bs-alert-padding-y: 1rem;
            --bs-alert-margin-bottom: 1rem;
            --bs-alert-color: inherit;
            --bs-alert-border-color: transparent;
            --bs-alert-border: var(--bs-border-width) solid var(--bs-alert-border-color);
            --bs-alert-border-radius: var(--bs-border-radius);
            --bs-alert-link-color: inherit;
            position: relative;
            padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
            margin-bottom: var(--bs-alert-margin-bottom);
            color: #ff7900;
            background-color: #000;
            box-shadow: box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            box-shadow: #000 0px 5px 15px;
            border: black;
            border-radius: var(--bs-alert-border-radius);
            text-align: center;
            }
        </style>
@if(session()->get('voted'))
        <script>    // التنقل إلى العنصر عند تحميل الصفحة
                document.addEventListener('DOMContentLoaded', function() {
                    scrollToElement();
                });
        
                // التنقل إلى العنصر عند تغيير الهاش (على سبيل المثال، عند الانتقال من صفحة لأخرى)
                window.addEventListener('hashchange', function() {
                    scrollToElement();
                });
        
                // الدالة للتمرير إلى العنصر الذي يحمل الهاش المحدد
                function scrollToElement() {
                    var hash ="AAA" // استخراج الهاش من رابط الصفحة
        
                    // التحقق مما إذا كان الهاش غير فارغ وموجود في الصفحة
                    if (hash && document.getElementById(hash)) {
                        var targetElement = document.getElementById(hash);
                        targetElement.scrollIntoView({
                            behavior: 'smooth' // تمرير بشكل سلس
                        });
                    }
                }</script>
  @endif              
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
      
      <h1 class="logo me-auto"><a href="{{route('user.voting.index')}}" class="logo me-auto"><img src="/assets/logo.svg" alt="JuryVote"></a><a href="index.html">JuryVote</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar order-last order-lg-0">
        <h6 style="color: white;"><span style="color: #ff7900;">Welcome, </span> {{$data->name}}<h5>
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
          <h1>Orange Summer Challenge 2023</h1>
          <!-- <h2></h2> -->
          <a href="#team" class="btn-get-started scrollto">Start Voting</a>
        </div>
      </div>
    </div>
  
  </section><!-- End Hero -->

  <main id="main" >

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt="JuryVote"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt="JuryVote"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="JuryVote"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="JuryVote"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="JuryVote"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt="JuryVote"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="JuryVote"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="JuryVote"></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Clients Section -->


  {{-- {{dd($teams)}} --}}
<span id="AAA"></span>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg" >
      <div class="container" data-aos="fade-up" >
        @if(session()->get('voted'))

              <div class="row "></div>
              <div class="alert alert-warning" role="alert" id="dev" >
                 The team was voted in successfully <i class="bi bi-clipboard2-check-fill"></i>
                </div>
              @endif
              <script>
                  setTimeout(function() {
                    document.getElementById('dev').style.display = 'none';
                }, 8000);
              </script>  

        <div class="section-title">
          <h2>Team Selection</h2>
          <h3>OSC #2023</h3>
        </div>

        <div class="row"style="justify-content: center;" >
          {{-- tefli --}}
          <div class="col-lg-3 col-md-5 col-sm-6  d-flex align-items-stretch">
            <div class="member"  data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/tefli.png" class="img-fluid" alt="Tefli">
                <div class="social">
                  @if (in_array("4", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 5px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>
                  @else
                  <a href="{{route('user.voting.show',4)}}">Vote</i></a>
                  @endif
                </div>
              </div>
              <div class="member-info">
                <h4>Tefli</h4>
                <span>A Baby Monitoring Device That Analyzes And Predicts A Baby's Needs Based On Their Cry.</span>
              </div>
            </div>
          </div>          
          {{-- aigo --}}
          <div class="col-lg-3 col-md-5 col-sm-6  d-flex align-items-stretch">
            <div class="member" data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/aigo.png" class="img-fluid" alt="AiGo">
                <div class="social">
                  @if (in_array("3", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 5px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>                  
                  @else
                      <a href="{{route('user.voting.show',3)}}">Vote</i></a>
                  @endif
                </div>
              </div>
              <div class="member-info">
                <h4>AiGo</h4>
                <span>Your Pocket-Sized Time-Travel Guide Buddy, Providing Immersive Historical Tours Experiences</span>
              </div>
            </div>
          </div>
          {{-- AgriBot --}}
          <div class="col-lg-3 col-md-5 col-sm-6  d-flex align-items-stretch">
            <div class="member" data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/soler.png" class="img-fluid" alt="Solar-AgriBot">
                <div class="social">
                  @if (in_array("2", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 5px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>                  
                  @else
                      <a href="{{route('user.voting.show',2)}}">Vote</i></a>
                  @endif
                </div>
              </div>
              <div class="member-info">
                <h4>Solar-AgriBot</h4>
                <span>An Autonomous Agricultural Robot Designed To Revolutionize Modern Farming.</span>
              </div>
            </div>
          </div>
          {{-- BaGard --}}
          <div class="col-lg-3 col-md-5 col-sm-6  d-flex align-items-stretch">
            <div class="member" data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/bagard.png" class="img-fluid" alt="BaGard">
                <div class="social">
                  @if (in_array("5", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 5px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>
                  @else
                      <a href="{{route('user.voting.show',5)}}">Vote</i></a>

                  @endif
                </div>
              </div>
              <div class="member-info">
                <h4>BagGuard</h4>
                <span>Revolutionizing Travel With Its State-Of-The-Art Luggage Tracking System.</span>
              </div>
            </div>
          </div>
          {{-- OptiGuide --}}
          <div class="col-lg-3 col-md-5 col-sm-6 d-flex align-items-stretch">
            <div class="member"   data-aos-delay="100">
              <div class="member-img">
                <img src="/assets/img/team/opti.png" class="img-fluid" alt="OptiGuide">
                <div class="social">
                  @if (in_array("1", $teams))
                  <h6 style="/* color: #ff7900; *//* background-color: black; */transition: none;/* color: #111111; */margin: 0 3px;border-radius: 5px;width: 84px;height: 36px;background: #2b2b2b;display: inline-flex;align-items: center;justify-content: center;transition: none;color: #f8f9fa;">Voted</h6>      
                  @else
                      <a href="{{route('user.voting.show',1)}}">Vote</i></a>              
                  @endif  
                </div>
               </div>
              <div class="member-info">
                <h4>OptiGuide</h4>
                <span>A Futuristic Visual Aid Comprised Of An AI-Powered Phone Application And Two Tactile Wristbands.</span>
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