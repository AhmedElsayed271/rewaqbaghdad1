@extends('layout.front.app')
@section('title', __('front.iraqmeter'))

@section('content')

    <style>
        .faqQuetions h3 {
            font-weight: bold;
            color: var(--new-color);
        }

        .faqQuetions ul {
            list-style-type: square;
        }
    </style>

    <section class="container py-5">
        <div class="faqQuetions py-5">
            <h3 class="fa-3x pb-3">الاسئله الشائعة</h3>
            <ul>
                <li class="fa-2x">ما هو مركز رواق بغداد للسياسات العامة ؟</li>
                <p class="py-2">اجابه اجابه اجابه اجابه اجابه</p>
            </ul>
        </div>
    </section>

@endsection
