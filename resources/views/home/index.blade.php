<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.head')

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    @include('home.header')

    <section id="main-slider" class="main-slider">

        <div class="row">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="{{ asset('asset/slider/images/1.jpg') }}" data-thumb="slider/images/1.jpg" alt=""
                        title="This is a caption 1" />
                    <a href="#"><img src="{{ asset('asset/slider/images/2.jpg') }}"
                            data-thumb="slider/images/2.jpg" alt="" title="This is a caption 2" /></a>
                    <img src="{{ asset('asset/slider/images/5.jpg') }}" data-thumb="slider/images/5.jpg" alt=""
                        title="This is a caption 3" data-transition="slideInLeft" />
                    <img src="{{ asset('asset/slider/images/6.jpg') }}" data-thumb="slider/images/6.jpg" alt=""
                        title="This is a caption 4" />
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    @include('home.about')


    {{-- Product section  --}}
    @include('home.product')

    <!-- Services Section -->

    <!-- Team Section -->
    <section id="team" class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- BEGAIN ABOUT HEADING -->
                    <div class="heading">

                        <h1 class="wow fadeInLeftBig">Our Team</h1>
                    </div>
                    <div class="team_area">
                        <!-- BEGAIN TEAM SLIDER -->
                        <div class="team_slider">
                            <!-- BEGAIN SINGLE TEAM SLIDE#1 -->
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="single_team wow fadeInUp">
                                    <div class="team_img">
                                        <img src="{{ asset('asset/img/team-1.jpg') }}" alt="img">
                                    </div>
                                    <h5 class=""><a href="#">Md. Rafsan Jami</a></h5>
                                    <span>Management Head</span>
                                    <p>Greetings from 5D Technology. I believe to lead the 4th Industrial Revolution
                                        with Made in Bangladesh Product from here.</p>
                                    <div class="team_social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- BEGAIN SINGLE TEAM SLIDE#2 -->
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="single_team wow fadeInUp">
                                    <div class="team_img">
                                        <img src="{{ asset('asset/img/team-2.jpg') }}" alt="img">
                                    </div>
                                    <h5><a href="#">Md. Shakhawat</a></h5>
                                    <span>CEO</span>
                                    <p>We work to ensure quality so that we can reduce technical dependence on foreign
                                        products and we can earn foreign revenue.</p>
                                    <div class="team_social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- BEGAIN SINGLE TEAM SLIDE#3 -->
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="single_team wow fadeInUp">
                                    <div class="team_img">
                                        <img src="{{ asset('asset/img/team-4.jpg') }}" alt="img">
                                    </div>
                                    <h5><a href="#">Prianka</a></h5>
                                    <span>Finance</span>
                                    <p>Now, we serve our clients over the national boundary. Our goal is to capture and
                                        grow this market through quality and productivity.</p>
                                    <div class="team_social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- BEGAIN SINGLE TEAM SLIDE#4 -->
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="single_team wow fadeInUp">
                                    <div class="team_img">
                                        <img src="{{ asset('asset/img/team-3.jpg') }}" alt="img">
                                    </div>
                                    <h5><a href="#">Bijnan Debnath</a></h5>
                                    <span>CTO</span>
                                    <p>The advantages of 5D products are user-friendly and customizable. Products
                                        performance are more than satisfactory level.</p>
                                    <div class="team_social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    @include('home.contact')


    <!--contact feature section-->
    @include('home.footer')

    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('asset/js/jquery.ui.map.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('asset/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="{{ asset('asset/js/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('asset/js/scrolling-nav.js') }}"></script>

    <!-- wow slider jquery files -->
    <script type="text/javascript" src="{{ asset('asset/slider/engine1/wowslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/slider/engine1/script.js') }}"></script>

    <script type="text/javascript" src="{{ asset('asset/slider/jquery.nivo.slider.js') }}"></script>

    <!-- owl carousel js file-->
    <script>
        $(document).ready(function() {

            $("#owl-example").owlCarousel();

        });
    </script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>


    <script src="{{ asset('asset/js/owl.carousel.js') }}"></script>

</body>

</html>