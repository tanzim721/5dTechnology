<header class="header_section">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="{{ asset('asset/img/REAID Profile.png') }}" alt="website_logo"></a>
                <h2 class="tagline">Your Tech Solution</h2>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

                    <li>
                        <a class="page-scroll" href="{{ route('home') }}">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ route('service') }}">Products</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ route('home') }}">Our Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ route('home') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>
