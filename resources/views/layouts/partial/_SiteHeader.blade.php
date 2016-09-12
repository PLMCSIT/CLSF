<header class="site-header">
        <div class="container for-navi">
            <div class="site-logo">
                <h1>
                    <a href="{{ url('home') }}">
                        <span class="logo-icon"><i class="fa fa-heart"></i></span>
                        <span class="logo-text">Christ <span>The Living Stone Fellowship</span></span>
                        <span class="logo-tagline"></span>
                    </a>
                </h1>
            </div>
            <!-- Main Navigation -->
            <nav class="main-navigation" role="navigation">
                <ul class="sf-menu">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="javascript:void(0)">About us</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('about/overview') }}">Overview</a></li>
                            <li><a href="{{ url('about/new-here') }}">New Here?</a></li>
                            <li><a href="{{ url('about/staff') }}">Our Staff</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('events/index') }}">Events</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Member</a></li>
                </ul>
            </nav>
            <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
        </div>
    </header>