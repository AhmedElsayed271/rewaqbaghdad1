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
                </div>
                <div class="col-lg-4">
                    <div class="img-box text-center border-0 rounded-30">
                        <img src="{{ $iraqmeterInfo->img }}" alt="aboutImage" class=" w-50">
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
    @if (!$IraqmeterSurveys->isEmpty())
    <section class="our-books">
        <div class="container">
            <div class="section-title text-right pb-30">
            </div>
            <div class="row overflow-hidden" data-aos="zoom-in" data-aos-duration="1000">

                <div class="swiper-container overflow-hidden">
                    <div class="news-block-two swiper-wrapper">

                        @foreach ($IraqmeterSurveys as $IraqmeterSurvey)
                            <div class="swiper-slide position-relative">
                                <a class="" href="{{ langUrl('/rewaq/book/' . $IraqmeterSurvey->slug) }}"
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
                                        class="p-2 rounded ">{{ __('front.read_more') }}</a>
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
    </section> --}}

    {{-- <section class="parlmente-sec mb-5 h-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-right pb-1 mb-1">
                        <h2 class="title ">عراق ميتر </h2>
                    </div>
                  <p>

                    تطبيق الكتروني متطور تم استحداثه بدعم من مؤسسة كونراد ادناور الالمانية، لخلق حلقة وصل فعالة بين الناخب والمرشح، بالشكل الذي يضمن اختيار المرشح الاكفأ وتحقيق عملية انتخابية نزيهة و شفافة.


                </p>
                <p>
                    يتيح التطبيق للناخب فرصة التعرف والاطلاع على البيانات والبرنامج الانتخابي الخاص بكل مرشح، ضمن المرشحين في دائرته الانتخابية، بما يسهل عليه عملية اختيار الافضل منهم. ويكفل له حق ابداء الرأي بالمرشح عبر الرفض، القبول، اوالحياد.

                </p>
                <p>
                    يعمل التطبيق على تأسيس قاعدة بيانات متكاملة لكل من الناخبين والمرشحين بتوفير خاصية التسجيل ضمن الدوائر التي سينتخبون او سيرشحون فيها. كما و يتيح التطبيق للمرشح فرصة عرض بياناته للناخبين بما تتضمنه من (السيرة ذاتية، البرنامج الانتخابي، الدعايات... وغيرها).

                </p>
                </div>
                <div class="col-lg-6">
                    <div class="img-box text-center">
                        <img src="{{url('front/assets/img/meters (2).png')}}" alt="aboutImage">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="title with-gold mt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        استطلاعات الراي
                    </h3>
                </div>
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
