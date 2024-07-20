@extends('layout.front.app')
{{-- @section('title', 'صفحة فارغة') --}}

{{-- @section('breadcrumb')
    <li class="breadcrumb-item">@yield('title')</li>
@endsection --}}

{{-- @section('style')@endsection --}}

@section('js')
    <script>
        $(document).ready(function() {
            @if (!$etmamCategories->isEmpty())


                @foreach ($etmamCategories as $index => $activityCategory)

                    var swiper = new Swiper(".etmams{{ $index }} .swiper-container", {
                        spaceBetween: 30,
                        centeredSlides: true,
                        slidesPerView: 3,
                        draggable: true,
                        loop: true,
                        rtl: true,
                        keyboard: true,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next1',
                            prevEl: '.swiper-button-prev1',
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
                @endforeach
            @endif
        })
    </script>
@endsection

@section('content')
    <style>
        .swiper-button-next1 {
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

        .swiper-button-next1 i,
        .swiper-button-prev1 i {
            font-size: 20px;
            color: #fff;
        }

        .swiper-button-prev1 {
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
                        {{ __('front.etmam') }}
                    </strong>
                    <p>
                        يتيح التطبيق للناخب فرصة التعرف والاطلاع على البيانات والبرنامج الانتخابي الخاص بكل مرشح، ضمن
                        المرشحين في دائرته الانتخابية، بما يسهل عليه عملية اختيار الافضل منهم. ويكفل له حق ابداء الرأي
                        بالمرشح عبر الرفض، القبول، اوالحياد.
                    </p>

                </div>
                <div class="col-lg-4">
                    <div class="img-box text-center border-0 rounded-30">
                        <img src="/uploads/files/shares/projects/img5.png" alt="aboutImage" class=" w-50">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container our-vision my-5">
        <div class="row">
            @if (!$etmamCategories->isEmpty())
                @foreach ($etmamCategories as $index => $etmamCategory)
                    <section class="mt-6 etmams{{ $index }} etmams-categories">
                        <div class="container">
                            <div class="section-title text-right pb-30">
                                <h2 class="title">{{ $etmamCategory->translation->name }}</h2>
                            </div>
                            <div class="row d-flex align-items-center news-sction">
                                <div class="col-12 ">
                                    <div class="swiper-container ">
                                        <div class="swiper-wrapper">
                                            @foreach ($etmamCategory->emamnews as $key => $row)
                                                <div class="swiper-slide">
                                                    <div class="card" style="border: none ">
                                                        <a href="{{ langUrl('/etmam/' . $row->slug) }}">
                                                            <div class="img-box">
                                                                <img style="height: 380px" class="card-img-top"
                                                                    src="{{ $row->img }}"
                                                                    alt="{{ $row->translation->title }}" class="border-0">
                                                            </div>
                                                        </a>

                                                        <div class="card-body">
                                                            <a href="{{ langUrl('/etmam/' . $row->slug) }}">
                                                                <small class="title-sec mb-1">
                                                                    <strong>{{ formatDate($row->created_at) }}</strong>
                                                                </small>
                                                                <strong
                                                                    class="pt-1 pb-1 d-block">{{ $row->translation->title }}</strong>
                                                                <div>{{ $row->translation->description }}</div>
                                                                <strong
                                                                    class="department-name mb-4">{{ $row->category->name }}</strong>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-button-next1"> <i class="fa-solid fa-chevron-right"></i></i>
                                        </div>
                                        <div class="swiper-button-prev1"> <i class="fa-solid fa-chevron-left"></i></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                @endforeach
            @endif
        </div>
    </div>
    <section class="contact-page-section asking asking-visit">
        <div class="container p-5">
            <form class="row justify-content-start align-items-start" action="{{ url()->current() }}" method="post">@csrf
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
                                            placeholder="{{ __('front.company_name') }}">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label for="text"> <span class="req">*</span>
                                            {{ __('front.phone') }}</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" required
                                            placeholder="{{ __('front.purpose_visit') }}">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label for="text"> <span class="req">*</span>
                                            {{ __('front.entity_name') }}</label>
                                        <input type="text" name="entity_name" value="{{ old('entity_name') }}" required
                                            placeholder="{{ __('front.visitor_name') }}">
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
                                    <div class="d-flex col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-two bg-green">
                                            <span class="txt">{{ __('front.btn_send') }}</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
