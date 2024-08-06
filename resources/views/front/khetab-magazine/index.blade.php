@extends('layout.front.app')
@section('title', __('front.khetab_magazine'))

@section('description', $magazine->translation->content)
@section('page_img', $magazine->img)

@section('content')

    {{-- bg-white-greding-browen --}}
    <section class="about-us-sec my-5 ">
        <div class="container">
            <div class="khetab-magazine row py-3  justify-content-center align-items-center">
                <div class="col-lg-8 text-white">
                    <strong class="fs-2 d-block mb-3">
                        @yield('title')
                    </strong>
                    {!! $magazine->translation->content !!}
                    <div class="col-lg-6">
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
                                            class=" magazine-emp-namecolor text-white">{{ $cbd->translation->name }}</span></a>
                                @endif
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                    </div>
                </div>
                <div class="col-lg-4 img-container ">
                    <div class="img-box text-center shadow-sm rounded-30 ">
                        <img src="{{ $magazine->img }}" alt="@yield('title')" class="border-0 w-50 ">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row py-3 justify-content-center align-items-center">
            <div class="col-lg-8">
                <div class="image">
                    <img src="" alt="">
                </div>
                <p class="py-2"></p>
            </div>

        </div>
    </div>

@endsection


@section('js')
@endsection
