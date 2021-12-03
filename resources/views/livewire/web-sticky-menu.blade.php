<div class="sticky-menu">
    <div class="container">
        <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
            <div class="logo">
                <h1 class="mb-0">
                    <a class="d-block" href="{{ route('home') }}" title="Home">
                        <img class="img-fluid" src="web-assets/images/logo.png" alt="Logo"
                            srcset="web-assets/images/retina-logo.png">
                    </a>
                </h1>
            </div>
            <nav class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="header-left">
                    <ul class="mb-0 list-unstyled d-inline-flex">
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
            </nav>
        </div>
    </div>
</div>
