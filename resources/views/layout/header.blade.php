<header class="header_area">
    <div class="container-fluid d-flex">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="/" class="logo"><img style="height: 80px" src="{{Setting::get('site_logo', '')}}" alt=""></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button>
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu mr-auto">
                    <li class="nav-item submenu active"><a class="nav-link" href="/">Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="driver">Become Driver</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="contact">Contact us</a></li>
                    <li class="nav-item"><a class="nav-link" href="privacy">Privacy Policy</a></li>
                    <li class="nav-item"><a class="nav-link" href="terms">Terms & Conditions</a></li>
                </ul>
            </div>
        </nav>
        <div class="menu_btn">
            <a href="login" class="book_btn">Login</a>
            <a href="register" class="book_btn">Register</a>
        </div>
    </div>
</header>