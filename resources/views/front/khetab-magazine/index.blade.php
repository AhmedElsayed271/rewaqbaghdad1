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
    <section class="activies-sec">
        <div class="container">
            <a href="">
                <div class="section-heading pb-30 text-center shadow-sm mx-auto rounded-30 my-3">
                    <h2 class="font-bold p-3">{{ __('front.our_blogs') }}</h2>
                </div>
            </a>
            <div class="row justify-content-center align-items-stretch">
                @foreach ($blogs as $blog)
                    <div class="col-md-3 book position-relative my-3 ">
                        <a href="{{ langUrl('/magazine/blog/' . $blog->slug) }}">
                            <div class="pb-3 pt-3">
                                <img src="{{ $blog->img }}" alt="{{ $blog->translation->title }}"
                                    class="border-0 rounded ">
                            </div>
                            <small class="title-sec mb-1">
                                <strong>{{ formatDate($blog->created_at) }}</strong>
                            </small>
                            <strong class="pt-1 pb-1 d-block">{{ $blog->translation->title }}</strong>
                            <p >{{ $blog->translation->description }}</p>
                        </a>
                        <div class="btns pos-absolute d-flex justify-content-around align-items-end">
                            <a href="{{ $blog->pdf }}" target="_blank"
                                class="p-2 rounded ">{{ __('front.read_more') }}</a>
                            <a href="{{ $blog->promo_url }}" target="_blank"
                                class="p-2 rounded">{{ __('front.promo_number') }}</a>
                        </div>

                    </div>
                @endforeach
            </div>
            <div
                class="col-lg-12 mt-3 text-center m-auto justify-content-center  d-none d-xl-flex d-lg-flex d-md-flex d-sm-none d-xs-none">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>
@endsection


@section('js')
@endsection
