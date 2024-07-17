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

        .nexts1 {
            background-color: #808080;
            width: 45px;
            height: 45px;
            z-index: 2;
            position: absolute;
            bottom: 50%;
            transform: translate(0, -50%);
            border-radius: 50%;
            right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .nexts1 i ,  .prevs1 i {
            font-size: 20px;
            color: #fff;
        }
        .prevs1 {
            background-color: #808080;
            width: 45px;
            height: 45px;
            z-index: 2;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            bottom: 50%;
            transform: translate(0, -50%);
            border-radius: 50%;
            left: 20px;
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
    <a href="{{ route('rewaq.versions') }}">
        <div class="section-heading pb-30 text-center shadow-sm mx-auto rounded-30 my-3">
            <h2 class="font-bold p-3">الاصدارات</h2>
        </div>
    </a>
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
                    <div class="nexts1">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <div class="prevs1">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                </div>
            </div>
        </section>
    @endif

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
                nextEl: '.nexts1',
                prevEl: '.prevs1',
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
