@extends('layout.front.app')
@section('title', __('front.ourvision'))

<style>
    .vision-polciy h2,
    .vision-target h2,
    .vision-target ul li {
        color: var(--new-color);
    }

    .vision-target ul {
        list-style: decimal;
    }

    .vision-target ul li {
        font-size: 20px;
    }
</style>

@section('content')

    <div class="container our-vision my-5">
        <div class="vision-polciy">
            <h2 class="font-bold">رؤية مركز رواق بغداد للسياسات العامة:</h2>
            <ul class="py-3">
                @foreach($visions as $vision)
                    <li>{{ appLangKey() == 'ar' ? $vision->content_ar : $vision->content_en }}</li>
                @endforeach
            </ul>
        </div>
        <div class="vision-target py-5">
            <h2 class="font-bold">أهداف مركز رواق بغداد للسياسات العامة:</h2>
            <ul class="py-3">
                @foreach($targets as $target)
                    <li>{{ appLangKey() == 'ar' ? $target->content_ar : $target->content_en }}</li>
                @endforeach
            </ul>
        </div>
    </div>




@endsection

@section('js')

@endsection
