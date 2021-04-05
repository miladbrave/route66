@extends('front.fa.layout.master')

@section('content')

    @include('front.fa.layout.header')
    <div class="page-wrapper">
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>خدمات</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">خانه</a></li>
                    <li>خدمات </li>
                </ul>
            </div>
        </section>
        <section class="services-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>خدمات ملک</h2>
                    <div class="text">ما در حال ارائه بهترین املاک و مستغلات هستیم</div>
                </div>
                <div class="row">
                    <div class="image-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="/front/images/icons/empty.png" data-src="/front/images/resource/image-2.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house"></span>
                                    <h4><a href="javascript:void(0);">خانه برای فروش</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.</div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="javascript:void(0);">خانه برای اجاره</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.</div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-architecture-and-city"></span>
                                    <h4><a href="javascript:void(0);">خانه وام دار</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12 order-3">
                        <div class="inner-column">
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-buyer"></span>
                                    <h4><a href="javascript:void(0);">تطبیق خریدار</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.</div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-analytics"></span>
                                    <h4><a href="javascript:void(0);">تجزیه و تحلیل قیمت</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.</div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-3"></span>
                                    <h4><a href="javascript:void(0);">خانه های اجاره ای</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="call-to-action" style="background-image: url(/front/images/background/2.jpg);" data-stellar-background-ratio="0.5">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="text">در چند دقیقه خانه خود انتخاب و بخرید.</div>
                    <h2 style="font-family: 'Times New Roman',sans-serif">Route 66</h2>
                </div>
            </div>
        </section>
        <section class="agents-section-two alternate">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>ملاقات با مشاوران ما</h2>
                    <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</div>
                </div>
                <div class="carousel-outer">
                    <div class="agents-carousel-two owl-carousel owl-theme">

                        @foreach($agents as $agent)
                            <div class="agent-block-two">
                                <div class="row">
                                    <div class="image-column col-lg-5 col-md-12 col-sm-12 order-2">
                                        <div class="image-box">
                                            @if(isset($agent->photo->path))
                                                <figure class="image">
                                                    <a href="{{route('agent',$agent->faname)}}">
                                                        <img src="images/icons/empty.png"
                                                             data-src="{{asset($agent->photo->path)}}"
                                                             alt="{{$agent->faname}}">
                                                    </a>
                                                </figure>
                                            @else
                                                <figure class="image">
                                                    <a href="{{route('agent',$agent->faname)}}">
                                                        <img src="images/icons/empty.png"
                                                             data-src="/front/images/resource/agent-55.jpg"
                                                             alt="{{$agent->faname}}">
                                                    </a>
                                                </figure>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                                        <div class="inner-column clearfix">
                                            <h3 class="name">{{$agent->enname}}</h3>
                                            <span class="designation">مشاور املاک</span>
                                            <div class="text">
                                                {!! $agent->fades !!}
                                            </div>
                                            <ul class="contact-info">
                                                <li><span class="icon fa fa-phone-volume"></span><a
                                                        href="#">{{$agent->phone}}</a></li>
                                                <li><span class="icon fa fa-envelope"></span><a
                                                        href="#">{{$agent->email}}</a></li>
                                            </ul>
                                            <ul class="follow-us social-icon-colored">
                                                <li class="title">صفحات اجتماعی :</li>
                                                <li><a href="{{$agent->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="{{$agent->telegram}}"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li><a href="{{$agent->twitter}}"><i
                                                            class="fab fa-instagram text-danger"></i></a></li>
                                                <li><a href="{{$agent->whatsup}}"><i
                                                            class="fab fa-whatsapp text-success"></i></a></li>
                                            </ul>
                                            <div class="btn-box"><a href="{{route('agent',$agent->faname)}}"
                                                                    class="theme-btn btn-style-one"><span
                                                        class="btn-title">بیشتر</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('front.fa.layout.footer')
@endsection