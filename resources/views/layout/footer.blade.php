<footer class="footer_area sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="f_widget about_widget text-center">
                    <a href="index.html" class="f_logo"><img style="height: 80px" src="{{Setting::get('site_logo', '')}}" alt="" style="margin-top: 10px;"></a>
                    <div class="f_social_icon">
                        <a href="{{Setting::get('f_f_link', '')}}" class="ti-facebook"></a>
                        <a href="{{Setting::get('f_t_link', '')}}" class="ti-twitter-alt"></a>
                        <a href="{{Setting::get('f_l_link', '')}}" class="ti-linkedin"></a>
                        <a href="{{Setting::get('f_i_link', '')}}" class="ti-instagram"></a>
                    </div>
                    <p>Copyright © 2020 <a href="/">{{Setting::get('site_title', '')}}</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 ">
                <div class="get_app_content text-center" style=" margin: auto;
                width: 100%;
                padding: 10px;">
                    <h2 style="color: white; margin-bottom: 50px; margin-top: -15px">Applications</h2>
                    <a href="{{Setting::get('f_u_url', '')}}" class="app_btn slider_btn" style="margin-bottom: 20px"><img src="img/icon/play-store.png" alt="">Google Play</a>
                    <a href="{{Setting::get('f_ui_url', '')}}" class="app_btn slider_btn"><img src="img/icon/apple-store.png" alt="">Apple Store</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="f_widget link_widget">
                    <h2 class="f_title">Help?</h2>
                    <ul class="list-unstyled f_list">
                        <li><a href="contact">Contact us</a></li>
                        <li><a href="privacy">Privacy Policy</a></li>
                        <li><a href="terms">Terms & conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>