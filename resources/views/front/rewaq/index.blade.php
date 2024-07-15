@extends('layout.front.app')
@section('title', __('front.rewaq'))

@section('description', $rewaq->translation->content)
@section('page_img', $rewaq->img)

@section('content')

    <style>
        .section-heading {
            width: fit-content;
        }

        .section-heading h2 {
            color: var(--new-color);
        }

        .book {
            height: auto;
            margin-bottom: 20px;
        }

        .book a img {
            height: 400px !important;
        }

        .book .pb-3,
        .book .pt-3 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    {{-- bg-white-greding-green --}}
    <section class="about-us-sec my-5  ">
        <div class="container">
            <div class="row py-3 justify-content-center align-items-center">
                <div class="col-lg-8">
                    <strong class="fs-2 text-end d-block mb-3 text-white">
                        @yield('title')
                    </strong>
                    <p>{{ $rewaq->translation->content }}</p>
                    <div class="row justify-content-center align-items-end">

                        <div class="col-lg-6">
                            <div class="text">
                                <figure class="admin-thumb">
                                    <img width="27" height="27" src="{{ $rewaq->pm->pminfo->img }}" alt="LogoImage">
                                </figure>
                                <h4><a href="#">{{ $rewaq->pm->job_title }}: <span
                                            class="dar-emp-namecolor text-white">{{ $rewaq->pm->name }}</span></a></h4>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="text">
                                <figure class="admin-thumb">
                                    <img width="27" height="27" src="{{ $rewaq->am->aminfo->img }}" alt="LogoImage">
                                </figure>
                                <h4><a href="#">{{ $rewaq->am->job_title }}: <span
                                            class="dar-emp-namecolor text-white">{{ $rewaq->am->name }}</span></a></h4>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="text">
                                <figure class="admin-thumb">
                                    <img width="27" height="27" src="{{ $rewaq->ps->psinfo->img }}" alt="LogoImage">
                                </figure>
                                <h4><a href="#">{{ $rewaq->ps->job_title }}: <span
                                            class="dar-emp-namecolor text-white">{{ $rewaq->ps->name }}</span></a></h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img-box text-center shadow-sm rounded-30">
                        <img src="{{ $rewaq->img }}" alt="{{ __('front.rewaq') }}" class="border-0 w-50">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-heading pb-30 text-center shadow-sm mx-auto rounded-30 my-3">
        <h2 class="font-bold p-3">الاصدارات</h2>
    </div>
    @if (!$books->isEmpty())
        <section class="our-books">
            <div class="container">
                <div class="section-title text-right pb-30">
                </div>
                <div class="row overflow-hidden" data-aos="zoom-in" data-aos-duration="1000">
        
                    <div class="swiper-container overflow-hidden">
                        <div class="news-block-two swiper-wrapper">

                            @foreach ($books as $book)
                                <a class="swiper-slide" href="{{ langUrl('/rewaq/book/' . $book->slug) }}"
                                    title="{{ $book->translation->title }}">
                                    <div class="inner-box-book">
                                        <div class="img-box">
                                            <img src="{{ $book->img }}" alt="{{ $book->translation->title }}">
                                        </div>
                                        <div class="content">
                                            <p>{{ $book->translation->title }}</p>
                                        </div>
                                        
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="nexts"></div>
                    <div class="prevs"></div>
                </div>
            </div>
        </section>
    @endif

    <section class="activies-sec">
        <div class="container">
            <a href="">
                <div class="section-heading pb-30 text-center shadow-sm mx-auto rounded-30 my-3">
                    <h2 class="font-bold p-3">الاصدارات</h2>
                </div>
            </a>
            <div class="row justify-content-center align-items-center">
                @foreach ($books as $book)
                    <div class="col-md-3 book">
                        <a href="{{ langUrl('/rewaq/book/' . $book->slug) }}">
                            <div class="pb-3 pt-3">
                                <img src="{{ $book->img }}" alt="{{ $book->translation->title }}"
                                    class="border-0 rounded ">
                            </div>
                            <small class="title-sec mb-1">
                                <strong>{{ formatDate($book->created_at) }}</strong>
                            </small>
                            <strong class="pt-1 pb-1 d-block">{{ $book->translation->title }}</strong>
                            <p>{{ $book->translation->description }}</p>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- </div>
                </div> --}}
            {{-- <div class="col-lg-3 margin20">
                    <div class="widget_raper mt-3">
                        <p class="text-green">{{ __('front.new_site') }}</p>
                        <div class="recent_post">
                            @foreach ($latestNews as $latest)
                                <a href="{{ langUrl('/rewaq/book/'.$latest->slug) }}" class="single_recent_post">
                                    <span class="rp_img" style="background-image: url({{$latest->img}});"></span>
                                    <span>{{ formatDate($latest->created_at) }}</span>
                                    <h4>{{$latest->translation->title}}</h4>
                                </a>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                  <div class="widget_raper bg-light p-2 mt-3">
                    <p class="text-green">{{ __('front.most_watched') }}</p>
                    <div class="recent_post">
                        @foreach ($mostWatched as $most)
                            <a href="{{ langUrl('/rewaq/book/'.$most->slug) }}" class="single_recent_post">
                                <span>{{ formatDate($most->created_at) }}</span>
                                <h4>{{ $most->translation->title }}</h4>
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-12 mt-3 text-center  d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">
                {{ $books->links() }}
            </div> --}}
        </div>
    </section>

@endsection


@section('js')
    <script>
        var swipers = new Swiper(".our-books .swiper-container", {
            spaceBetween: 50,
            centeredSlides: false,
            slidesPerView: 4,
            loop: true,
            rtl: true,
            keyboard: true,
            draggable: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.nexts',
                prevEl: '.prevs',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                }
            }
        });
    </script>
@endsection
