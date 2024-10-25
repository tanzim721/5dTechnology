<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.head')
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

	 <!-- Font awesome css file-->
    <link href="{{ asset('asset/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('asset/css/scrolling-nav.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/service-style.css') }}" rel="stylesheet">

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    @include('home.header')

    <section class="service-area">
		<div class="container">
			<div class="row service">
			<h3 align="center" style="color:#4d79ff;">Industrial Bag Filter Dust Collector Controller</h3>
			<h2><br></h2>
				<div class="col-lg-9 hardware-project">
					<img src="{{ asset('asset/img/Dust Collector.png') }}">
					<p id="answers1">At present about 35 cement industries, 402 auto and semi auto rice mills and 280 auto and semi auto flour mills are using dust collector for the product filtration process. They need to clean after a while automatically.</p>
					<div id="disappears" >
					<button class="btn btn-large view-more-btn" onclick="btn01()">View More</button>
					</div>


					<script>
					function btn01(){
						document.getElementById("answers1").innerHTML = "At present about 35 cement industries, 402 auto and semi auto rice mills and 280 auto and semi auto flour mills are using dust collector for the product filtration process. These filter bags need to clean after a certain time period by applying pulse jet. The entire process is done by PLC device. These bag filters are the heart of these industries. Whenever a controller fails you need to hire a PLC expert and factory production is stopped completely until he comes and the troubleshooting process is completed. Sometimes it requires a 10 to 15 days to solve and each day more than 3 Lac taka production loss occurs. To solve this issue we have designed 5D Dust Collector Controller System which ensures easy installation and programmable by any technician. Moreover it provides the same stability as like as any PLC Device.";
						document.getElementById("disappears").innerHTML = "";
						}
					</script>
				</div>
				<div class="col-lg-3 project-list">
					<ul>
						<li><i class="fa fa-angle-right"></i><a href="{{ asset('asset/img/Dust Collector.png') }}">Product Images</a></li>
						<li><i class="fa fa-angle-right"></i><a href="https://www.youtube.com/watch?v=5He74EI4VPo">Product Video</a></li>
						<li><i class="fa fa-angle-right"></i><a href="doc/brochure_1.pdf" download="Brochure_1">Product Brochure</a></li>

					</ul>
				</div>
			</div>
			<h2><br></h2>
			<h3 align="center" style="color:#4d79ff;">Automatically filling and weighting machine</h3>
			<h2><br></h2>
				<div class="col-lg-9 hardware-project">
					<img src="{{ asset('asset/img/Automatic Filling Machine.jpg') }}">
					<p id="answers2">Automatically filling and weighting machine. The machine is capable to fill-up 50gm, 100gm or 200gm power type product in plastic bottle or any types of container. Digital display cntrolable.</p>
					<div id="disappears2" >
					<button class="btn btn-large view-more-btn" onclick="btn02()">View More</button>
					</div>


					<script>
					function btn02(){
						document.getElementById("answers2").innerHTML = "Automatically filling and weighting machine. The machine is capable to fill-up 50gm, 100gm or 200gm power type product in plastic bottle or any types of container. Digital display cntrolable. The machine is completely made of food grade SS metal. Designed and developed by 5D Technology and will be distributed through 5D Service. We ensure you a worldclass product at affordable price. Our start up is working with such type of machinary from 2015. The entire machine has 2 parts, i.e. an auger filler portion and a belt conveyour system. You can see product image galary, video and brochure for more details about the product.";
						document.getElementById("disappears2").innerHTML = "";
						}
					</script>

				</div>
				<div class="col-lg-3 project-list">
					<ul>
						<li><i class="fa fa-angle-right"></i><a href="{{ asset('asset/img/Automatic Filling Machine.jpg') }}">Product Images</a></li>
						<li><i class="fa fa-angle-right"></i><a href="https://www.youtube.com/watch?v=5He74EI4VPo">Product Video</a></li>
						<li><i class="fa fa-angle-right"></i><a href="" download="Brochure_1">Product Brochure</a></li>
					</ul>
				</div>
			</div>
			<div class="row service">
				<div class="col-lg-9 hardware-project">

				</div>
				<div class="col-lg-3 project-list">

				</div>
			</div>
		</div>
	</section>

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

    <!-- jQuery -->
    <script src="{{ asset('asset/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="{{ asset('asset/js/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('asset/js/scrolling-nav.js') }}"></script>

</body>

</html>
