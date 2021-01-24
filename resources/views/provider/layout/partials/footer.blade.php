<section class="tj-footer">

<div class="container">

    <div class="row">

        <div class="col-md-4 text-center">

            <div class="about-widget widget">

                <h3>About {{Setting::get('site_title', '')}}</h3>

                <p>{{Setting::get('f_text27', '')}}</p>

                <ul class="fsocial-links">

                    <li><a href="{{Setting::get('f_f_link', '')}}"><i class="fab fa-facebook-f"></i></a></li>

                    <li><a href="{{Setting::get('f_t_link', '')}}"><i class="fab fa-twitter"></i></a></li>

                    <li><a href="{{Setting::get('f_l_link', '')}}"><i class="fab fa-linkedin-in"></i></a></li>

                    <li><a href="{{Setting::get('f_i_link', '')}}"><i class="fab fa-instagram"></i></a></li>

                </ul>

            </div>

        </div>

        <div class="col-md-4 text-center">

            <div class="links-widget widget">

                <h3>Explore</h3>

                <ul class="flinks-list">

                    <li><a href="contact">Contact Us</a></li>

                    <li><a href="privacy">Privacy Policy</a></li>

                    <li><a href="terms">Terms & Condition</a></li>

                </ul>

            </div>

        </div>

        <div class="col-md-4 text-center">

            <div class="contact-info widget">

                <h3>Contact</h3>

                <ul class="contact-box">

                    <li>

                        <i class="fas fa-home" aria-hidden="true"></i>   {{Setting::get('contact_address', '')}}

                    </li>

                    <li>

                        <i class="far fa-envelope-open"></i>

                        <a href="mailto:primecab@booking.com">

                        {{Setting::get('contact_email', '')}}</a>

                    </li>

                    <li>

                        <i class="fas fa-phone-square"></i>

                        {{Setting::get('contact_number', '')}}

                    </li>

                
                </ul>

            </div>

        </div>

    </div>

</div>

</section>

<!--Footer Content End-->

<!--Footer Copyright Start-->

<section class="tj-copyright">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4" align="center">
                <span >{{Setting::get('site_copyright', '')}}</span>
            </div>
            <div class="col-md-4 col-sm-4"></div>
        </div>
    </div>

</section>
