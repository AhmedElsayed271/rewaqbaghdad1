@extends('layout.front.app')
@section('title', 'boadcast')

@section('content')


    <section class="about-us-sec my-5">
        <div class="container">
            <div class="iraq-meter row py-3 justify-content-center align-items-center">
                <div class="col-lg-8">
                    <strong class="fs-2 d-block mb-3 text-white">
                        بــودكــاست فــكــر
                    </strong>
                    <p>من الشباب للشباب..
                        نسلط الضوء على تجارب الشباب العراقي الملهمة..
                        فنروي تجاربهم و ما يتخللها من تحديات و العقبات و نشاركهم بهجة النجاح و نشوته
                        و نروي حكايات تسير على درب النجاح و نُسمِع العالم صوتها علنا نكون عونا لها في النجاح</p>
                </div>
                <div class="col-lg-4">
                    <div class="img-box text-center border-0 rounded-30">
                        <img src="{{ url('/front/assets/img/Fakkerlogo.png') }}" alt="aboutImage" class=" w-50">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="title blue mt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title-sec-b">
                        لمعرفة بودكاست فكر
                    </h3>
                </div>

            </div>
        </div>
    </section>

    <section class="vector vector-2 booking-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <img src="{{ url('/front/assets/img/micknew.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-12">
                    <p>
                        يمكنك زيارة منصتنا للأستماع الى البودكاست بكامل حلقاته , كذلك يمكنك مشاهدتها <br> على اليوتوب ايضا.
                    </p>
                    <div class="btns">
                        <a href="https://linktr.ee/fakker.podcast" class="btn btn-1">
                            للاستماع للبودكاست
                        </a>
                        <a href="https://www.youtube.com/channel/UCd_Jrcqu00p6Yj12w4DtshA/" class="btn btn-1">
                            الذهاب لليوتوب
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
                    <img src="{{ url('/front/assets/img/vector-bg.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <img src="{{ url('/front/assets/img/micknew.png') }}" class="top-img img-fluid" alt="">
                    <div class="content-box">
                        <p>
                            أو يمكنكم التواصل مباشرةً معنا
                        </p>
                        <ul class="social-box">
                            <li>
                                <img src="{{ url('/front/assets/img/facebook.png') }}" alt="">

                                <a href="https://www.youtube.com/channel/UCd_Jrcqu00p6Yj12w4DtshA/" class="underline">
                                    Fakker-فکّر</a>
                            </li>
                            <li>
                                <img src="{{ url('/front/assets/img/insta.png') }}" alt="">
                                <a href="https://www.instagram.com/podcast_fakker/" class="underline">Fakker</a>
                            </li>
                            <li>
                                <img src="{{ url('/front/assets/img/email.png') }}" alt="">
                                <a href="mailto:podcastthink82@gmail.com">podcastthink82@gmail.com</a>
                            </li>
                            <li>
                                <img src="{{ url('/front/assets/img/whatsapp.png') }}" alt="">
                                +9647837803788
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
