<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>JuryVote - Voting</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/mobile_logo_1_0.png" rel="icon">
    <link href="/assets/mobile_logo_1_0.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
        #radio {
            margin-left: 20px;
        }

        .lablered {

            font-size: 20px;

        }

        .submit {
            background: none !important;
            display: flex !important;
            justify-content: center !important;
            margin-bottom: 0px !important;
        }

        .btn:hover {
            color: white;
            background-color: #ff7900;
            border-color: white;
        }

        #radio::before {
            content: "" !important;
            width: 0.65em !important;
            height: 0.65em !important;
            border-radius: 50% !important;
            transform: scale(0) !important;
            transition: 120ms transform ease-in-out !important;
            box-shadow: inset 1em 1em #ff7900 !important;
        }

        #radio:checked::before {
            transform: scale(1) !important;
        }
    </style>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

          <h1 class="logo me-auto"><a href="{{route('user.voting.index')}}" class="logo me-auto"><img src="/assets/logo.svg" alt=""></a><a href="index.html">JuryVote</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- @if (session()->get('voted'))
                <div class="alert alert-primary" role="alert" id="dev" style="margin-right: 4rem;">
                    The team was voted in successfully
                </div>
                 @endif
            <script>
                setTimeout(function() {
                    document.getElementById('dev').style.display = 'none';
                }, 4000);
            </script> --}}

            <nav id="navbar" class="navbar order-last order-lg-0">
                <h6 style="
                              color: white;
                          "><span style="
                              color: #ff7900;
                          "> Welcom, </span>
                    {{ $user->name }}</h6>
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


    {{-- {{dd($data)}} --}}
    @foreach ($data as $team)

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
                <div class="container" style="margin-top: 16px;">

                    <ol>
                        <li><a href="{{ route('user.voting.index') }}">OSC #2023</a></li>
                        <li>Voting</li>
                    </ol>
                    {{-- <h2>OptiGuide</h2> --}}
                    <h2>{{ $team->team_name }}</h2>
                    {{-- <h2>{{$id=$team->team_id}}</h2> --}}
                    {{-- {{dd($team->id)}} --}}
                    <?php $team_id = $team->id; ?>
                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg ">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>{{ $team->team_name }}</h2>
                        <p>{{ $team->description }}</p>

                  </div>
    @endforeach
    <form action="{{ route('user.voting.store') }}" method="POST">
        @csrf

        <div class="row" style="justify-content: center;">


            <div class="col-lg-6 col-md-8">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-shop"></i>
                    <h4>Adaptation To The Market</h4>
                        <div style="  margin-top: 29px;">
                            <label class="lablered"  for="contactChoice1"style="margin-left: 20px;font-size: 15px;">Very Poor</label> 
                            <input type="radio" id="radio" name="adaptation_to_the_market"value="1" required />
                            <input type="radio" id="radio" name="adaptation_to_the_market" value="2" />
                            <input type="radio" id="radio" name="adaptation_to_the_market" value="3" />
                            <input type="radio" id="radio" name="adaptation_to_the_market" value="4" />
                            <input type="radio" id="radio" name="adaptation_to_the_market" value="5" />
                            <label class="lablered" for="contactChoice3" style="margin-left: 20px;    font-size: 15px;">Very Good</label>
                        </div>
                </div>
            </div>



            <div class=" col-lg-6 col-md-8 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-coin"></i>
                    <h4>Robustness Of the Economic Model</h4>

                    <div style="  margin-top: 29px;">
                      <label class="lablered"  for="contactChoice1"style="margin-left: 20px;font-size: 15px;">Very Poor</label> 
                      <input type="radio" id="radio" name="robustness_of_the_economic_model"value="1" required />
                      <input type="radio" id="radio" name="robustness_of_the_economic_model" value="2" />
                      <input type="radio" id="radio" name="robustness_of_the_economic_model" value="3" />
                      <input type="radio" id="radio" name="robustness_of_the_economic_model" value="4" />
                      <input type="radio" id="radio" name="robustness_of_the_economic_model" value="5" />
                      <label class="lablered" for="contactChoice3" style="margin-left: 20px;    font-size: 15px;">Very Good</label>
                  </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-8 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-clipboard2-check"></i>
                    <h4>Solution Maturity</h4>
                    <div style="  margin-top: 29px;">
                      <label class="lablered"  for="contactChoice1"style="margin-left: 20px;font-size: 15px;">Very Poor</label> 
                      <input type="radio" id="radio" name="solution_maturity"value="1" required />
                      <input type="radio" id="radio" name="solution_maturity" value="2" />
                      <input type="radio" id="radio" name="solution_maturity" value="3" />
                      <input type="radio" id="radio" name="solution_maturity" value="4" />
                      <input type="radio" id="radio" name="solution_maturity" value="5" />
                      <label class="lablered" for="contactChoice3" style="margin-left: 20px;    font-size: 15px;">Very Good</label>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h4>Scalability And Innovation</h4>
                    <div style="  margin-top: 29px;">
                      <label class="lablered"  for="contactChoice1"style="margin-left: 20px;font-size: 15px;">Very Poor</label> 
                      <input type="radio" id="radio" name="scalability_and_innovation"value="1" required />
                      <input type="radio" id="radio" name="scalability_and_innovation" value="2" />
                      <input type="radio" id="radio" name="scalability_and_innovation" value="3" />
                      <input type="radio" id="radio" name="scalability_and_innovation" value="4" />
                      <input type="radio" id="radio" name="scalability_and_innovation" value="5" />
                      <label class="lablered" for="contactChoice3" style="margin-left: 20px;    font-size: 15px;">Very Good</label>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 mt-4 mt-md-0">
                <div class="icon-box" >
                    <i class="bi bi-award-fill"></i>
                    <h4>Pitch Quality</h4>
                    <div style="  margin-top: 29px;">
                      <label class="lablered"  for="contactChoice1"style="margin-left: 20px;font-size: 15px;">Very Poor</label> 
                      <input type="radio" id="radio" name="pitch_quality"value="1" required />
                      <input type="radio" id="radio" name="pitch_quality" value="2" />
                      <input type="radio" id="radio" name="pitch_quality" value="3" />
                      <input type="radio" id="radio" name="pitch_quality" value="4" />
                      <input type="radio" id="radio" name="pitch_quality" value="5" />
                      <label class="lablered" for="contactChoice3" style="margin-left: 20px;    font-size: 15px;">Very Good</label>
                  </div>
                    <input type="hidden" name="team_id" value="{{ $team_id }}" />

                </div>
            </div>
            <!-- <div class="col-md-8 mt-4 mt-md-0">
              <div class="icon-box submit" data-aos-delay="600">
                <button type="submit" class="btn btn-dark" style="
                font-size: 20px;
                width: 149px;
            " value="Submit">Submit</button>

                     </div>
            </div> -->

        </div>

        <div class="row">
            <div class="icon-box submit" data-aos-delay="200">
                <button type="submit" class="btn btn-dark"
                    style="
                  font-size: 20px;
                  width: 149px;
                  "
                    value="Submit">Submit</button>
            </div>
        </div>

    </form>
    </div>
    </section>
    <!-- End Services Section -->

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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
