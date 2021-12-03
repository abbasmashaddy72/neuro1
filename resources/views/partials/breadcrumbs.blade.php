<section>
    <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
        <div class="fixed-bg" style="background-image: url(web-assets/images/pag-top-bg.jpg);"></div>
        <div class="container">
            <div class="page-title-wrap text-center w-100">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Contact Us</h1>
                    @unless($breadcrumbs->isEmpty())
                        <ol class="breadcrumb mb-0 justify-content-center">
                            @foreach ($breadcrumbs as $breadcrumb)

                                @if (!is_null($breadcrumb->url) && !$loop->last)
                                    <li class="breadcrumb-item"><a
                                            href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                                @else
                                    <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                                @endif

                            @endforeach
                        </ol>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</section>
