<!-- Navigation Bar-->
<header id="topnav" class="defaultscroll scroll-active">
    <!-- Menu Start -->
    <div class="container">
        <!-- Logo container-->
        <div>
            <a href="index.html" class="logo">
                <img src="{{ asset('images/front_img/logo-light.png') }}" alt="" class="logo-light" height="30"/>
                <img src="{{ asset('images/front_img/logo-dark.png') }}" alt="" class="logo-dark" height="30"/>
            </a>
        </div>
        <div class="buy-button">
            <a href="{{ url('login') }}" class="btn btn-secondary"><i class="mdi mdi-account-key"></i>
                <span>Job Seeker</span></a>
        </div><!--end job seeker button-->
        <div class="buy-button">
            <a href="{{ route('addJob') }}" class="btn btn-primary"><i class="mdi mdi-briefcase-upload"></i>
                <span>Employer</span></a>
        </div><!--end employer button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/job-list') }}">Job List</a></li>

                        <li><a href="{{ url('/add-job-category') }}">Add Job Category</a></li>
                        <li><a href="{{ url('/job-categories') }}">Job Categories</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('/about') }}">About</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">contact US</a>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
    <!--end end-->
</header><!--end header-->
<!-- Navbar End -->

