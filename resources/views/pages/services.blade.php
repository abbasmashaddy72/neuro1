@extends('layouts.home')
@section('main')
    <section>
        <div class="w-100 pt-90 pb-110 position-relative">
            <div class="container">
                <div class="serv-wrap2 position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src={{ asset('web-assets/images/resources/serv-img1-1.jpg') }}
                                        alt="Services Image 1">
                                    <a class="position-absolute" href="{{ route('services-details') }}" title=""><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('services-details') }}" title="">Child
                                            Psychotherapy</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src={{ asset('web-assets/images/resources/serv-img1-2.jpg') }}
                                        alt="Services Image 2">
                                    <a class="position-absolute" href="{{ route('services-details') }}" title=""><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('services-details') }}" title="">Couples
                                            Psychotherapy</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src={{ asset('web-assets/images/resources/serv-img1-3.jpg') }}
                                        alt="Services Image 3">
                                    <a class="position-absolute" href="{{ route('services-details') }}" title=""><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('services-details') }}" title="">Family
                                            Psychotherapy</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src={{ asset('web-assets/images/resources/serv-img1-4.jpg') }}
                                        alt="Services Image 4">
                                    <a class="position-absolute" href="{{ route('services-details') }}" title=""><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('services-details') }}"
                                            title="">Individual
                                            Coaching</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src={{ asset('web-assets/images/resources/serv-img1-5.jpg') }}
                                        alt="Services Image 5">
                                    <a class="position-absolute" href="{{ route('services-details') }}" title=""><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('services-details') }}" title="">Group
                                            Therapy</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src={{ asset('web-assets/images/resources/serv-img1-6.jpg') }}
                                        alt="Services Image 6">
                                    <a class="position-absolute" href="{{ route('services-details') }}" title=""><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('services-details') }}" title="">Stress
                                            Issues</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrap mt-60 text-center w-100">
                    <div class="pagination-inner d-inline-block">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);" title="">01</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);"
                                    title="">02</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);" title="">03</a>
                            </li>
                            <li class="page-item next"><a class="page-link" href="javascript:void(0);" title="">Next
                                    Page<i class="flaticon-double-angle-pointing-to-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
