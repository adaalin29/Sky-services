@extends('parts.template') @section('content')
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<div class="containerVideo w-100 pad0 mt-3">
    <video class="video">
        <source src="{{settings('about-us.video')}}" type="video/mp4" />
    </video>
    <div class="playpause"></div>
</div>

<div id="navMenu" class="navMenu flex-row halfOpacity">
<a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
    <div class="navSeparator whiteCol">|</div>
<a href="about " class="text-decoration-none whiteCol">{{__('site.about')}}</a>
</div>

<section>
    <div data-aos="fade-left">
        <div id="aboutUsDesktop">
            <div class="row center marTop5 marBot7">
                <div class="col-md-6 pl-0 whiteCol">
                    <div class="title mb-4">{{settings('about-us.title')}}</div>
                    <div class="titleMessage whiteCol">{{settings('about-us.description')}}</div>
                </div>

                <div class="col-md-6 pr-0">
                    <img class="img-fluid aboutImg1 floatRight" alt="plane" src="{{ route('thumb', ['width:700', settings('about-us.image1')]) }}" />
                </div>
            </div>

            <div class="row center">
                <div class="col-md-6 pl-0">
                    <img class="img-fluid aboutImg2" alt="plane" src="{{ route('thumb', ['width:700', settings('about-us.image2')]) }}" />
                </div>

                <div class="col-md-6 pr-0">
                    <div class="titleMessage whiteCol">{{settings('about-us.description2')}}</div>
                </div>
            </div>
        </div>

        <div id="aboutUsMobile">
            <div class="title center mt-3 mb-2">
                {{settings('about-us.title')}}
            </div>

            <div class="titleMessage">{{settings('about-us.description')}}</div>

            <div class="row mt-3 flex-nowrap">
                <div class="col-lg-6 pl-0 padR15px mt-5 mb-5">
                    <img class="img-fluid paralelImg1" src="{{ route('thumb', ['width:700', settings('about-us.image1')]) }}" alt="couch">
                </div>

                <div class="col-lg-6 pr-0 pl-0">
                    <img class="img-fluid paralelImg2" src="{{ route('thumb', ['width:700', settings('about-us.image2')]) }}" alt="about_us">
                </div>
            </div>

            <div class="titleMessage">{{settings('about-us.description2')}}</div>
        </div>
    </div>
</section>

<section id="offersDesktop">
    <div data-aos="fade-right">
        <div class="row center marTopBot6">
            <div class="col-md-7 pad0">
                <div class="title mb-4 whiteCol">{{__('site.offer')}}</div>
                <div class="row">
                    <div class="col-md-6 pl-0">
                        <div class="flex-row padBot10px">
                            <img class="img-fluid padR15px" src="./images/red_case.svg" alt="red_case" />
                            <div class="align-self-center whiteCol">{{settings('about-us.offer-title1')}}</div>
                        </div>
                        <div class="titleMessage maxw80 whiteCol halfOpacity">{{settings('about-us.offer-description1')}}</div>
                    </div>

                    <div class="col-md-6">
                        <div class="flex-row padBot10px">
                            <img class="img-fluid padR15px" src="./images/red_chopper.svg" alt="red_case" />
                            <div class="align-self-center whiteCol">{{settings('about-us.offer-title2')}}</div>
                        </div>
                        <div class="titleMessage maxw80 whiteCol halfOpacity">{{settings('about-us.offer-description2')}}</div>
                    </div>
                </div>

                <div class="row marTopBot6">
                    <div class="col-md-6 pl-0">
                        <div class="flex-row padBot10px">
                            <img class="img-fluid padR15px" src="./images/red_plane_taxi.svg" alt="red_case" />
                            <div class="align-self-center whiteCol">{{settings('about-us.offer-title3')}}</div>
                        </div>
                        <div class="titleMessage maxw80 whiteCol halfOpacity">{{settings('about-us.offer-description3')}}</div>
                    </div>

                    <div class="col-md-6">
                        <div class="flex-row padBot10px">
                            <img class="img-fluid padR15px" src="./images/red_currier.svg" alt="red_case" />
                            <div class="align-self-center whiteCol">{{settings('about-us.offer-title4')}}</div>
                        </div>
                        <div class="titleMessage maxw80 whiteCol halfOpacity">{{settings('about-us.offer-description4')}}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 pl-0">
                        <div class="flex-row padBot10px">
                            <img class="img-fluid padR15px" src="./images/red_aircraft.svg" alt="red_case" />
                            <div class="align-self-center whiteCol">{{settings('about-us.offer5-title')}}</div>
                        </div>
                        <div class="titleMessage maxw80 whiteCol halfOpacity">{{settings('about-us.offer5-description')}}</div>
                    </div>

                    <div class="col-md-6">
                        <div class="flex-row padBot10px">
                            <img class="img-fluid padR15px" src="./images/red_menu.svg" alt="red_case" />
                            <div class="align-self-center whiteCol">{{settings('about-us.offer6-title')}}</div>
                        </div>
                        <div class="titleMessage maxw80 whiteCol halfOpacity">{{settings('about-us.offer6-description')}} </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 pr-0">
                <img id="offer_plane" class="img-fluid aboutOferrImg floatRight" src="{{ route('thumb', ['width:700', settings('about-us.offers-image')]) }}" alt="">
            </div>
        </div>
    </div>
</section>

<section id="offersMobile">
    <div data-aos="fade-left">
        <div class="title center mb-3">{{__('site.offer')}}</div>

        <div class="flex-column mb-3">
            <div class="flex-row padBot10px">
                <img class="img-fluid padR15px" src="./images/red_case.svg" alt="red_case" />
                <div class="align-self-center whiteCol">{{settings('about-us.offer-title1')}}</div>
            </div>
            <div class="titleMessage">{{settings('about-us.offer-description1')}}</div>
        </div>

        <div class="flex-column mb-3">
            <div class="flex-row padBot10px">
                <img class="img-fluid padR15px" src="./images/red_plane_taxi.svg" alt="red_case" />
                <div class="align-self-center whiteCol">{{settings('about-us.offer-title3')}}</div>
            </div>
            <div class="titleMessage">{{settings('about-us.offer-description3')}}</div>
        </div>

        <div class="flex-column mb-3">
            <div class="flex-row padBot10px">
                <img class="img-fluid padR15px" src="./images/red_aircraft.svg" alt="red_case" />
                <div class="align-self-center whiteCol">{{settings('about-us.offer5-title')}}</div>
            </div>
            <div class="titleMessage">{{settings('about-us.offer5-description')}}</div>
        </div>

        <div class="flex-column mb-3">
            <div class="flex-row padBot10px">
                <img class="img-fluid padR15px" src="./images/red_chopper.svg" alt="red_case" />
                <div class="align-self-center whiteCol">{{settings('about-us.offer-title2')}}</div>
            </div>
            <div class="titleMessage">{{settings('about-us.offer-description2')}}</div>
        </div>

        <div class="flex-column mb-3">
            <div class="flex-row padBot10px">
                <img class="img-fluid padR15px" src="./images/red_currier.svg" alt="red_case" />
                <div class="align-self-center whiteCol">{{settings('about-us.offer-title4')}}</div>
            </div>
            <div class="titleMessage">{{settings('about-us.offer-description4')}}</div>
        </div>

        <div class="flex-column">
            <div class="flex-row padBot10px">
                <img class="img-fluid padR15px" src="./images/red_menu.svg" alt="red_case" />
                <div class="align-self-center whiteCol">{{settings('about-us.offer6-title')}}</div>
            </div>
            <div class="titleMessage">{{settings('about-us.offer5-description')}}</div>
        </div>
    </div>
</section>

<section>
    <div data-aos="zoom-in-up">
        <div class=" title mb-3 whiteCol center">{{__('site.team')}}</div>

        <div id="swiperdn1" class="swiper-container dn1">
            <div class="swiper-wrapper ">

                @foreach($team as $person)

                    <div class=" swiper-slide whiteCol pad0 ">
                        <img class=" img-fluid" src="{{ route('thumb', ['width:700', $person->image]) }} " alt=" pers1 ">
                        <div class=" flex-col whiteCol center ">
                            <div class=" font20 openSansL marTop2 ">{{$person->name}}</div>
                            <div class=" font16 openSansL marTop1 ">{{$person->function}}</div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="swiper-pagination swiper-paginationz5"></div>
        </div>
    </div>
</section>

<section>
    <div data-aos="fade-left">
        <div class="swiper-container s1 ">
            <div class="swiper-wrapper ">

                @foreach($reviews as $review)
                <div class=" swiper-slide whiteCol d-flex align-items-center ">
                    <div class="w-75 d-flex flex-column ">
                        <div class="titleMessage ">{{$review->review}}</div>

                    <div class="subTitle text-align-left ">{{$review->name}}</div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class=" swiper-pagination swiper-pagination1 "></div>
        </div>
    </div>
</section>

<div data-aos="flip-right">
    <div id="logosLineMobile" class="flex-column">
        <div class="darkBlueBackground flex-column">
            <div class="row pad0 mt-3 mb-3">
                <div class="col-lg-12 flex-row justify-content-between mt-4 mb-3 pad0">
                    <img class="img-fluid grayLogo ml-5" src=" ./images/3.png " alt="logo1 ">
                    <img class="img-fluid grayLogo" src="./images/logo2.svg " alt="logo1 ">
                    <img class="img-fluid grayLogo mr-5" src="./images/logo3.svg " alt="logo1 ">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 flex-row justify-content-between mb-4 pad0">
                    <img class="img-fluid grayLogo ml-5" src="./images/3.png " alt="logo1 ">
                    <img class="img-fluid grayLogo" src="./images/logo2.svg " alt="logo1 ">
                    <img class="img-fluid grayLogo mr-5" src="./images/logo3.svg " alt="logo1 ">
                </div>
            </div>
        </div>
    </div>
</div>

<div data-aos="fade-right">
    <div id="logosLineDesktop" class="container-fluid mt-5 pad0 ">
        <div class="darkBlueBackground ">
            <div class="d-flex flex-row justify-content-between flex-wrap marL15 marR15 padTopBot3 ">
                <img class="img-fluid grayLogo" src=" ./images/3.png " alt="logo1 ">
                <img class="img-fluid grayLogo" src="./images/logo2.svg " alt="logo1 ">
                <img class="img-fluid grayLogo" src="./images/logo3.svg " alt="logo1 ">

                <img class="img-fluid grayLogo" src="./images/3.png " alt="logo1 ">
                <img class="img-fluid grayLogo" src="./images/logo2.svg " alt="logo1 ">
                <img class="img-fluid grayLogo" src="./images/logo3.svg " alt="logo1 ">
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    var swiper = new Swiper('.swiper-container.dn1', {
        loop: true,
        pagination: {
            el: '.swiper-paginationz5',
            clickable: true,
            dynamicBullets: true,
        },
        breakpoints: {
            1025: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            769: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 20,
            },
            481: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 10,
            },
            1: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 10,
            }
        }
    });

    var swiper1 = new Swiper('.swiper-container.s1', {
        loop: true,
        pagination: {
            el: '.swiper-pagination1',
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1025: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            769: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            481: {
                spaceBetween: 10,
            }
        }
    });
</script>
@endpush