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
                                                        <a href="{{ langUrl('/activity/' . $row->slug) }}">
                                                            <div class="img-box">
                                                                <img style="height: 380px" class="card-img-top"
                                                                    src="{{ $row->img }}"
                                                                    alt="{{ $row->translation->title }}" class="border-0">
                                                            </div>
                                                        </a>

                                                        <div class="card-body">
                                                            <a href="{{ langUrl('/activity/' . $row->slug) }}">
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
@endsection
