@extends('layouts.home')
@section('main')
    <section>
        <div class="w-100 pt-110 pb-110 position-relative">
            <div class="container">
                <div class="page-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-8">
                            <div class="post-detail blog-detail w-100">
                                <div class="social-links5 d-inline-flex flex-wrap position-absolute">
                                    <span class="d-inline-block scndry-clr"><i class="fas fa-share-alt"></i>45</span>
                                    <a class="rounded-circle twitter-hvr" href="https://twitter.com/" title="Twtiiter"
                                        target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a class="rounded-circle facebook-hvr" href="https://www.facebook.com/" title="Facebook"
                                        target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="rounded-circle youtube-hvr" href="https://www.youtube.com/" title="Youtube"
                                        target="_blank"><i class="fab fa-youtube"></i></a>
                                    <a class="rounded-circle linkedin-hvr" href="https://www.linkedin.com/" title="Linkedin"
                                        target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="rounded-circle rss-hvr" href="https://rss.com/" title="RSS" target="_blank"><i
                                            class="fas fa-rss"></i></a>
                                    <a class="rounded-circle pinterest-hvr" href="https://www.pinterest.com/"
                                        title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                                <div class="post-feat-img brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src={{ asset('web-assets/images/resources/blog-detail-img.jpg') }}
                                        alt="Blog Detail Image">
                                </div>
                                <ul class="meta3 list-unstyled d-flex flex-wrap align-items-center w-100">
                                    <li><span class="post-detail-date rounded-pill scndry-bg">Jan 20, 2021</span></li>
                                    <li><i class="fas fa-tag thm-clr"></i><a href="javascript:void(0);" title="">Chrity</a>,
                                        <a href="javascript:void(0);" title="">poor</a>, <a href="javascript:void(0);"
                                            title="">people</a>, <a href="javascript:void(0);" title="">ideas</a>
                                    </li>
                                    <li><i class="fas fa-user thm-clr"></i><a href="archive.html" title="">James Smith</a>
                                    </li>
                                    <li><i class="fas fa-comment-dots thm-clr"></i>20</li>
                                </ul>
                                <p class="mb-0">Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor
                                    sit amet, con lorim ectetur Nulla fringilla purus at leo dignisntum accumsan leo vel
                                    tempor. Sit amet ukmi cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis
                                    at felis. Sed do alim consectetur Nulla fringillatetur adipisicing elit at leo dignissim
                                    congue. Mauris ele yum mentum accumsan leo vel tempor.</p>
                                <p class="mb-0">Viverra quis at felis et netus et malesuada fames ac turpis
                                    egestas. Aenean com ileo modbus et magnis dis parturient montes vilmes. Cursus nisl
                                    aliquam. Aliquam et elite consectetur Nulla fringillatetur adipisicing elit at leo
                                    dignissim congue. Mauris ele yum mentum accumsan leo vel tempor eu nunc rhoncus viverra
                                    quis at felis.</p>
                                <blockquote class="blockquote text-center thm-bg brd-rd10">
                                    <i class="flaticon-quote d-block"></i>
                                    <p class="mb-0">dolor st amet, consetetur sadipscing elit dolore lorime smagna
                                        aliquyam.</p>
                                </blockquote>
                                <p class="mb-0"><img class="img-fluid alignright"
                                        src={{ asset('web-assets/images/resources/blog-detail-img2.jpg') }}
                                        alt="Blog Detail Image 2">Lorem
                                    ipsum dosectetur adipisicing elit, sed ectetur Nulla fringilla purus at leo dignisntum
                                    cursus nisl aliquam. Aliquam et elit eu nunci consectetur Nulla fringillatetur
                                    adipisicing elit mentum accumsan leo vel tempor.</p>
                                <ul class="mb-0 list-unstyled">
                                    <li>Aliquam et elit eu nunci consectetur.</li>
                                    <li>Nulla fringillatetur adipisic</li>
                                    <li>Dosectetur adipisicing elit, sed acte</li>
                                    <li>Malesuada fames ac turpis egestas</li>
                                    <li>Charity Education poor people.</li>
                                </ul>
                                <div class="post-detail-gal d-inline-block position-relative w-100">
                                    <div class="row mrg30">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <a class="brd-rd10 d-block overflow-hidden"
                                                href={{ asset('web-assets/images/resources/blog-detail-gal-img1.jpg') }}
                                                data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                    src={{ asset('web-assets/images/resources/blog-detail-gal-img1.jpg') }}
                                                    alt="Blog Detail Gallery Image 1"></a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <a class="brd-rd10 d-block overflow-hidden"
                                                href={{ asset('web-assets/images/resources/blog-detail-gal-img2.jpg') }}
                                                data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                    src={{ asset('web-assets/images/resources/blog-detail-gal-img2.jpg') }}
                                                    alt="Blog Detail Gallery Image 2"></a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">Cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis
                                    at felis. Sed do alim consectetur Nulla fringillatetur adipisicing elit at leo dignissim
                                    congue. Mauris ele yum mentum accumsan leo vel tempor.</p>
                                <div class="author-box z1 position-relative w-100 d-flex flex-wrap">
                                    <span class="brd-rd10"><img class="img-fluid w-100"
                                            src={{ asset('web-assets/images/resources/author-img1.jpg') }}
                                            alt="Author Image 1"></span>
                                    <div class="author-info">
                                        <h4 class="mb-0">About Admin</h4>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur alim Vivamus scele
                                            Don malesuada sodales neque in faucibus.</p>
                                        <div
                                            class="social-links6 z1 d-inline-flex flex-wrap align-items-center position-absolute">
                                            <a class="twitter" href="https://twitter.com/" title="Twtiiter"
                                                target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a class="facebook" href="https://www.facebook.com/" title="Facebook"
                                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a class="youtube" href="https://www.youtube.com/" title="Youtube"
                                                target="_blank"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-wrap d-inline-block w-100">
                                    <h3 class="mb-0">01 Reviews</h3>
                                    <ul class="comments-thread mb-0 list-unstyled w-100">
                                        <li>
                                            <div class="comment d-flex flex-wrap position-relative w-100">
                                                <span class="rounded-circle"><img class="img-fluid rounded-circle"
                                                        src={{ asset('web-assets/images/resources/comment-img1.jpg') }}
                                                        alt="Comment Image 1"></span>
                                                <div class="comment-info">
                                                    <h4 class="mb-0 d-inline-block">Jockon Dom</h4>
                                                    <span class="d-inline-block thm-clr">10 months ago</span>
                                                    <p class="mb-0">Cupcake ipsum dolor sit amet. Dragée sweet
                                                        roll tiramisuet croissant lollipop candy.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-reply-wrap d-inline-block w-100">
                                    <h3 class="position-relative">Post Review<span class="d-inline-block">Praising pain was
                                            born give you a complete.</span></h3>
                                    <form class="w-100">
                                        <div class="row mrg10">
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <div class="field-box position-relative w-100"><input class="brd-rd5"
                                                        type="text" placeholder="Complete Name"></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="field-box position-relative w-100"><input class="brd-rd5"
                                                        type="tel" placeholder="Phone No"></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="field-box position-relative w-100"><input class="brd-rd5"
                                                        type="email" placeholder="Email Address"></div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <div class="field-box position-relative w-100"><textarea
                                                        class="brd-rd5" placeholder="Review"></textarea></div>
                                                <p class="mb-0"><input type="checkbox" id="terms-check"><label
                                                        class="mb-0" for="terms-check">please check this box to
                                                        agree to terms & services</label></p>
                                                <button class="thm-btn scndry-bg brd-rd5 position-relative overflow-hidden"
                                                    type="submit">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-4">
                            <aside class="sidebar w-100">
                                <div class="widget-box v3 brd-rd10 bg-color6 overflow-hidden w-100">
                                    <h4 class="position-relative tit-shp thm-shp widget-title3">Popular News</h4>
                                    <div class="mini-posts-wrap w-100">
                                        <div class="mini-post-box d-flex flex-wrap align-items-center">
                                            <a class="brd-rd5 overflow-hidden" href="blog-detail.html" title=""><img
                                                    class="img-fluid"
                                                    src={{ asset('web-assets/images/resources/mini-post-img1-1.jpg') }}
                                                    alt="Mini Post Image 1"></a>
                                            <div class="mini-post-info">
                                                <h5 class="mb-0"><a href="blog-detail.html" title="">Stop Using
                                                        the Term Depression Casually</a></h5>
                                                <span class="scndry-clr d-block">Nov 15, 2020</span>
                                            </div>
                                        </div>
                                        <div class="mini-post-box d-flex flex-wrap align-items-center">
                                            <a class="brd-rd5 overflow-hidden" href="blog-detail.html" title=""><img
                                                    class="img-fluid"
                                                    src={{ asset('web-assets/images/resources/mini-post-img1-2.jpg') }}
                                                    alt="Mini Post Image 2"></a>
                                            <div class="mini-post-info">
                                                <h5 class="mb-0"><a href="blog-detail.html" title="">Am I
                                                        Depressed? 6 You Should Know</a></h5>
                                                <span class="scndry-clr d-block">Aug 23, 2020</span>
                                            </div>
                                        </div>
                                        <div class="mini-post-box d-flex flex-wrap align-items-center">
                                            <a class="brd-rd5 overflow-hidden" href="blog-detail.html" title=""><img
                                                    class="img-fluid"
                                                    src={{ asset('web-assets/images/resources/mini-post-img1-3.jpg') }}
                                                    alt="Mini Post Image 3"></a>
                                            <div class="mini-post-info">
                                                <h5 class="mb-0"><a href="blog-detail.html" title="">Steps to
                                                        Overcoming Teenage Anger</a></h5>
                                                <span class="scndry-clr d-block">Jun 10, 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-box v3 brd-rd10 bg-color6 categories_widget overflow-hidden w-100">
                                    <h4 class="position-relative tit-shp thm-shp widget-title3">Categories</h4>
                                    <ul class="mb-0 list-unstyled w-100">
                                        <li><a href="javascript:void(0);" title="">Adoption, Guardianship</a>[10]</li>
                                        <li><a href="javascript:void(0);" title="">Anxiety and Stress</a>[05]</li>
                                        <li><a href="javascript:void(0);" title="">Child Anxiety</a>[04]</li>
                                        <li><a href="javascript:void(0);" title="">Depression</a>[20]</li>
                                        <li><a href="javascript:void(0);" title="">Infographics</a>[16]</li>
                                        <li><a href="javascript:void(0);" title="">Parenting and Families</a>[13]</li>
                                    </ul>
                                </div>
                                <div class="widget-box v3 brd-rd10 bg-color6 useful_links_widget overflow-hidden w-100">
                                    <h4 class="position-relative tit-shp thm-shp widget-title3">Useful Links</h4>
                                    <ul class="mb-0 list-unstyled w-100">
                                        <li><a href="javascript:void(0);" title="">Psychology Emy</a></li>
                                        <li><a href="javascript:void(0);" title="">Magazines</a></li>
                                        <li><a href="javascript:void(0);" title="">Neurology</a></li>
                                        <li><a href="javascript:void(0);" title="">Psychiatry</a></li>
                                        <li><a href="javascript:void(0);" title="">Psychology</a></li>
                                        <li><a href="javascript:void(0);" title="">Psychoteraphy</a></li>
                                    </ul>
                                </div>
                                <div class="widget-box v3 thm-bg brd-rd10 nesletter_widget overflow-hidden w-100">
                                    <div class="nesletter-form text-center w-100">
                                        <h4 class="mb-0">Subscribe Now to Get Daily Updates.</h4>
                                        <form class="w-100">
                                            <input class="brd-rd5 w-100" type="email" placeholder="Enter your Email here">
                                            <button
                                                class="thm-btn scndry-bg brd-rd5 d-inline-block position-relative overflow-hidden w-100"
                                                type="submit"><i class="flaticon-email"></i>Subscribe Now</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget-box v3 brd-rd10 bg-color6 instagram_widget overflow-hidden w-100">
                                    <h4 class="position-relative tit-shp thm-shp widget-title3">Instagram Stories</h4>
                                    <ul class="insta-gal-list list-unstyled d-flex flex-wrap align-items-center">
                                        <li><a href={{ asset('web-assets/images/resources/insta-gal-img1-1.jpg') }}
                                                data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                    src={{ asset('web-assets/images/resources/insta-gal-img1-1.jpg') }}
                                                    alt="Instagram Gallery Image 1"></a></li>
                                        <li><a href={{ asset('web-assets/images/resources/insta-gal-img1-2.jpg') }}
                                                data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                    src={{ asset('web-assets/images/resources/insta-gal-img1-2.jpg') }}
                                                    alt="Instagram Gallery Image 2"></a></li>
                                        <li><a href={{ asset('web-assets/images/resources/insta-gal-img1-3.jpg') }}
                                                data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                    src={{ asset('web-assets/images/resources/insta-gal-img1-3.jpg') }}
                                                    alt="Instagram Gallery Image 3"></a></li>
                                        <li><a href={{ asset('web-assets/images/resources/insta-gal-img1-4.jpg') }}
                                                data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                    src={{ asset('web-assets/images/resources/insta-gal-img1-4.jpg') }}
                                                    alt="Instagram Gallery Image 4"></a></li>
                                        <li><a href={{ asset('web-assets/images/resources/insta-gal-img1-5.jpg') }}
                                                data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                    src={{ asset('web-assets/images/resources/insta-gal-img1-5.jpg') }}
                                                    alt="Instagram Gallery Image 5"></a></li>
                                        <li><a href={{ asset('web-assets/images/resources/insta-gal-img1-6.jpg') }}
                                                data-fancybox="gallery" title=""><img class="img-fluid w-100"
                                                    src={{ asset('web-assets/images/resources/insta-gal-img1-6.jpg') }}
                                                    alt="Instagram Gallery Image 6"></a></li>
                                    </ul>
                                    <div
                                        class="insta-gal-bottom d-flex flex-wrap justify-content-between align-items-center w-100">
                                        <div class="insta-gal-bottom-inner">
                                            <span class="d-block">Instagram</span>
                                            <h5 class="mb-0">@Nauthemes</h5>
                                        </div>
                                        <a class="thm-btn thm-bg brd-rd5 d-inline-block position-relative overflow-hidden"
                                            href="javascript:void(0);" title="">Follow Us</a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
