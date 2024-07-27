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
        <div class="row">
                <div class="vision-polciy">
                    <h2 class="font-bold">{{ __("front.our_vision_section_title") }}</h2>
                    <p class="w-75 py-2" style="font-size: 18px">{{ appLangKey() == 'ar' ? $vision->content_ar : $vision->content_en }}
                    </p>
                </div>
                <div class="vision-target py-5">
                    <h2 class="font-bold">{{ __('front.our_target_section_title') }}</h2>
                    <ul class="py-3">
                        @foreach ($targets as $target)
                        <li>{{ appLangKey() == 'ar' ? $target->name_ar : $target->name_en }}</li>
                        <p class="py-2">{{ appLangKey() == 'ar' ? $target->content_ar : $target->content_en }}</p>
                        @endforeach
                    </ul>
                </div>
        </div>
    </div>



@endsection

@section('js')

@endsection
