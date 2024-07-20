@extends('layout.front.app')
@section('title', __('front.rewaq'))

@section('description', '')
@section('page_img', '')

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

  
    <section class="title with-gold mt-7 mb-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        
                        <a href="{{ route('iraqmeter.allsurvey') }}">استطلاعات الراي</a>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="activies-sec">
        <div class="container">
    
            <div class="row justify-content-center align-items-center">
                @foreach ($iraqmeterSurveys as $iraqmeterSurvey)
                    <div class="col-md-3 book">
                        <a href="{{ route('iraqmeter.serveyDetails', $iraqmeterSurvey->slug) }}">
                            <div class="pb-3 pt-3">
                                <img src="{{ $iraqmeterSurvey->photo }}" alt="{{ $iraqmeterSurvey->translation->title }}"
                                    class="border-0 rounded ">
                            </div>
                            <small class="title-sec mb-1">
                                {{-- <strong>{{ formatDate($iraqmeterSurvey->created_at)  }}</strong> --}}
                            </small>
                            <strong class="pt-1 pb-1 d-block">{{ $iraqmeterSurvey->translation->title }}</strong>
                            <p>{{ $iraqmeterSurvey->translation->description }}</p>
                     
                        </a>

                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection


@section('js')
@endsection
