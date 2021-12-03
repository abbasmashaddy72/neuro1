<div class="rspn-hdr">
    <div class="rspn-mdbr">
        <div class="rspn-scil d-inline-flex flex-wrap">
            <a class="twitter-hvr" href="https://twitter.com/" title="Twtiiter" target="_blank"><i
                    class="fab fa-twitter"></i></a>
            <a class="facebook-hvr" href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                    class="fab fa-facebook-f"></i></a>
            <a class="youtube-hvr" href="https://www.youtube.com/" title="Youtube" target="_blank"><i
                    class="fab fa-youtube"></i></a>
            <a class="linkedin-hvr" href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i
                    class="fab fa-linkedin-in"></i></a>
        </div>
        <form class="rspn-srch">
            <input type="text" placeholder="Enter Your Keyword">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="lg-mn">
        <div class="logo">
            <h1 class="mb-0 d-block">
                <a href="{{ route('home') }}" title="Home">
                    <img src="web-assets/images/logo.png" alt="Logo">
                </a>
            </h1>
        </div>
        <div class="rspn-cnt">
            <span><i class="thm-clr far fa-envelope"></i><a href="mailto:info@youremailid.com"
                    title="">info@youremailid.com</a></span>
            <span><i class="thm-clr fas fa-phone-alt"></i>+96 125 554 24 5</span>
        </div>
        <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
    </div>
    <div class="rsnp-mnu">
        <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
        <ul class="mb-0 list-unstyled w-100">
            <li><a href="{{ route('home') }}" title="">Home</a></li>
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Services</a>
                <ul class="mb-0 list-unstyled">
                    <li><a href="{{ route('services') }}" title="">Services</a></li>
                    <li><a href="{{ route('services-details') }}" title="">Service Detail</a></li>
                </ul>
            </li>
            <li><a href="{{ route('blogs') }}" title="">Blogs</a></li>
            <li><a href="{{ route('about') }}" title="">About Us</a></li>
            <li><a href="{{ route('contact') }}" title="">Contact</a></li>
        </ul>
    </div>
</div>
