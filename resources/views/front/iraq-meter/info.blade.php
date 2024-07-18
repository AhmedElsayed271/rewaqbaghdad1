@extends('layout.front.app')
@section('title', __('front.iraqmeter'))

@section('content')

    <style>
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

        .nexts1 i,
        .prevs1 i {
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

    <section class="about-us-sec my-5">
        <div class="container">
            <div class="iraq-meter row py-3 justify-content-center align-items-center">
                <div class="col-lg-8">
                    <strong class="fs-2 d-block mb-3 text-white">
                        عراق ميتر
                    </strong>
                    {!! $iraqmeterInfo->translation->content !!}
                    {{-- <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                @if (isset($cbd))
                                    <img width="27" height="27" src="{{ $cbd->img }}"
                                        alt="{{ $cbd->translation->name }}">
                                @endif
                            </figure>
                            <h4>
                                @if (isset($cbd))
                                    <a href="#">{{ $cbd->translation->job_title }}: <span
                                            class=" magazine-emp-namecolor text-white"></span></a>
                                @endif
                            </h4>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                @if (isset($ec))
                                    <img width="27" height="27" src="{{ $ec->img }}"
                                        alt="{{ $ec->translation->name }}">
                                @endif
                            </figure>
                            <h4>
                                @if (isset($ec))
                                    <a href="#">{{ $ec->translation->job_title }}: <span
                                            class=" magazine-emp-namecolor text-white">{{ $ec->translation->name }}</span></a>
                                @endif
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                @if (isset($dec))
                                    <img width="27" height="27" src="{{ $dec->img }}"
                                        alt="{{ $dec->translation->name }}">
                                @endif
                            </figure>
                            <h4>
                                @if (isset($dec))
                                    <a href="#">{{ $dec->translation->job_title }}: <span
                                            class=" magazine-emp-namecolor text-white">{{ $dec->translation->name }}</span></a>
                                @endif
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text">
                            <figure class="admin-thumb">
                                @if (isset($me))
                                    <img width="27" height="27" src="{{ $me->img }}"
                                        alt="{{ $me->translation->name }}">
                                @endif
                            </figure>
                            <h4>
                                @if (isset($me))
                                    <a href="#">{{ $me->translation->job_title }}: <span
                                            class="magazine-emp-namecolor text-white">{{ $me->translation->name }}</span></a>
                                @endif
                            </h4>
                        </div>
                    </div> --}}
                    <div class="col-lg-12">
                        <div class="text">
                            <figure class="admin-thumb">
                                {{-- {{ $rewaq->ps->psinfo->img }} --}}
                                <img width="27" height="27" src="" alt="LogoImage">
                            </figure>
                            {{-- {{ $rewaq->ps->job_title }} --}}
                            <h4><a href="#">: المدير <span
                            class="dar-emp-namecolor text-white">احمد </span></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img-box text-center border-0 rounded-30">
                        <img src="{{ $iraqmeterInfo->img }}" alt="aboutImage" class=" w-50">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="title with-gold mt-2">
        <div class="container">
            <div class="section-heading pb-30 text-center shadow-sm mx-auto rounded-30 my-3">
                <h2 class="font-bold p-3">استطلاعات الراي</h2>
            </div>
        </div>
    </section>

    <section class="vector booking-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <img src="{{ url('front') }}/assets/img/vector1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-12">
                    <p>
                        يمكنك طلب استبيانك الخاص واترك لنا باقي الامر .. فريق مختص بعمل
                        <br>
                        استبيانات في جميع محافظات العراق
                    </p>
                    <div class="btns">
                        <a href="{{ url('request-survey') }}" class="btn btn-1">
                            لطلب استبيان
                        </a>
                        {{-- <a href="{{url('iraq/meter/blogs')}}" class="btn btn-2">
                        للذهاب الى الاستبيانات
                    </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (!$books->isEmpty())
        <section class="our-books">
            <div class="container">
                <div class="section-title text-right pb-30">
                </div>
                <div class="row overflow-hidden" data-aos="zoom-in" data-aos-duration="1000">

                    <div class="swiper-container overflow-hidden">
                        <div class="news-block-two swiper-wrapper">

                            @foreach ($books as $book)
                                <div class="swiper-slide position-relative">
                                    <a class="" href="{{ langUrl('/rewaq/book/' . $book->slug) }}"
                                        title="{{ $book->translation->title }}">
                                        <div class="inner-box-book">
                                            <div class="img-box">
                                                <img src="{{ $book->photo }}" alt="{{ $book->translation->title }}">
                                            </div>
                                            <div class="content">
                                                <p class="py-4">{{ $book->translation->title }}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="btns d-flex justify-content-around align-items-center position-absolute ">
                                        <a href="{{ $book->pdf }}" target="_blank"
                                            class="p-2 rounded ">{{ __('front.read_more') }}</a>
                                        <a href="{{ $book->promo_url }}" target="_blank"
                                            class="p-2 rounded">{{ __('front.reserve_copy') }}</a>
                                    </div>
                                </div>
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

    <section class="vector-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <img src="{{ url('front') }}/assets/img/vector-bg.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <img src="{{ url('front') }}/assets/img/meters.png" class="top-img img-fluid" alt="">
                    <div class="content-box">
                        <p>
                            أو يمكنكم التواصل مباشرةً معنا
                        </p>
                        <ul class="social-box">
                            <li>
                                <img src="{{ url('front') }}/assets/img/facebook.png" alt="">
                                عراق ميتر
                            </li>
                            <li>
                                <img src="{{ url('front') }}/assets/img/insta.png" alt="">
                                عراق ميتر
                            </li>
                            <li>
                                <img src="{{ url('front') }}/assets/img/email.png" alt="">
                                <a href="mailto:iraq_meter@gamil.com">iraq_meter@gamil.com</a>
                            </li>
                            <li>
                                <img src="{{ url('front') }}/assets/img/whatsapp.png" alt="">
                                +964 783 577 4084
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
