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
        .btns a {
            background-color: var(--new-color);
            color: var(--white-color);
            transition: .2s all linear;
        }
        .btns a:hover{
        background-color: var(--secondary-color);

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

    <section class="about-us-sec my-5">
        <div class="container">
            <div class="iraq-meter row py-3 justify-content-center align-items-center">
                <div class="col-lg-8">
                    <strong class="fs-2 d-block mb-3 text-white">
                        عراق ميتر
                    </strong>
                    {!! $iraqmeterInfo->translation->content !!}
                </div>
                <div class="col-lg-4">
                    <div class="img-box text-center border-0 rounded-30">
                        <img src="{{ $iraqmeterInfo->img }}" alt="aboutImage" class=" w-50">
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- <section class="perlament-sec with-gold mt-10 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        نبذة عن عراق ميتر
                    </h3>
                </div>
            </div>
        </div>
    </section>  --}}

    <section class="title with-gold mt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        
                        <a href="{{ route('iraqmeter.allsurvey') }}">{{__('front.surveys')}}</a>
                    </h3>
                </div>
            </div>
        </div>
    </section>


    @if (!$IraqmeterSurveys->isEmpty())
    <section class="our-surveys mt-5 mb-5">
        <div class="container">
            <div class="section-title text-right pb-30">
            </div>
            <div class="row overflow-hidden" data-aos="zoom-in" data-aos-duration="1000">

                <div class="swiper-container overflow-hidden">
                    <div class="news-block-two swiper-wrapper">

                        @foreach ($IraqmeterSurveys as $IraqmeterSurvey)
                            <div class="swiper-slide position-relative">
                                <a class="" href="{{ route('iraqmeter.serveyDetails', $IraqmeterSurvey->slug) }}"
                                    title="{{ $IraqmeterSurvey->translation->title }}">
                                    <div class="inner-box-book">
                                        <div class="img-box">
                                            <img src="{{ $IraqmeterSurvey->photo }}" alt="{{ $IraqmeterSurvey->translation->title }}">
                                        </div>
                                        <div class="content">
                                            <p class="py-4">{{ $IraqmeterSurvey->translation->title }}</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="btns d-flex justify-content-around align-items-center position-absolute ">
                                    <a href="{{ $IraqmeterSurvey->pdf }}" target="_blank"
                                        class="p-2 rounded " style="margin-left: 10px">{{ __('front.read_more') }}</a>
                                    <a href="" target="_blank"
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






    <section class="title with-gold mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        
                        طلب استبيان
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-page-section asking asking-visit">
        <div class="container p-5">
            <form class="row" action="#" method="post">@csrf
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            @if ($errors->all())
                                @foreach ($errors->all() as $message)
                                    <div class="alert alert-warning p-1 mb-1"><i class="fas fa-exclamation-triangle"></i>
                                        {{ $message }}</div>
                                @endforeach
                            @endif
                            <div id="contact-form" novalidate="novalidate">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label for="name"> <span class="req">*</span> {{ __('front.name') }}</label>
                                        <input type="text" name="name" required value="{{ old('name') }}"
                                            placeholder="{{ __('front.name') }}">
                                    </div>
                                
                               
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label for="email"> <span class="req">*</span>
                                            {{ __('front.email') }}</label>
                                        <input type="email" name="email" required value="{{ old('email') }}"
                                            placeholder="{{ __('front.email') }}">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label for="text"> <span class="req">*</span>
                                            {{ __('front.subject') }}</label>
                                        <textarea name="subject" required placeholder="{{ __('front.subject') }}">{{ old('list_visitors') }}</textarea>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <button class="theme-btn btn-style-two bg-green">
                        <span class="txt">{{ __('front.btn_send') }}</span>
                    </button>
                </div>
            </form>
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
                        <a href="{{url('iraq/meter/blogs')}}" class="btn btn-2">
                        للذهاب الى الاستبيانات
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
        var swipers = new Swiper(".our-surveys .swiper-container", {
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
