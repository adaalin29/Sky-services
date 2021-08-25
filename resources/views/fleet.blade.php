@extends('parts.template') @section('content')
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<div class="bannerTour">
    <img class="img-fluid w-100 marTopBot1" src="./images/flota1.jpg" alt="background" />
</div>

<div id="navMenu" class="navMenu flex-row halfOpacity ">
    <a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
    <div class="navSeparator whiteCol">|</div>
    <a href="fleet" class="text-decoration-none whiteCol">{{__('site.fleet')}}</a>
</div>

<section>
    <div data-aos="fade-left">
        <div class="center">
            <div class="flex-column marTop3 maxw40 text-center">
                <div class="title">{{__('site.fleet')}}</div>
            <div class="titleMessage text-center mt-3 mb-3">{{settings('fleet.description')}}</div>
            </div>
        </div>
    </div>
</section>

<section id="slider1">
    @foreach($fleet as $jet)
        @if($jet->id%2==0)
        <div data-aos="zoom-in-down">
            <div class="row sliderBackground mb-3 flex-wrap-reverse align-items-center">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex flex-column container-fluid justify-content-center padL5">
                        <div class="flex-row">
                            <div class="redLogosTitle">{{$jet->name}}</div>
                        </div>

                        <div class="marTopBot6 titleMessage whiteCol">{{$jet->description}}</div>
                    </div>
                </div>

                <div class="col-lg-6 pad1 align-items-center">
                    <div class="swiper-container z1 pad0">
                        <div class="swiper-wrapper">
                            @foreach($jet->images as $image)
                            <img class="swiper-slide img-fluid" src="{{ route('thumb', ['width:1200', $image]) }}" alt="flights4">
                            @endforeach
                        </div>
                        <div class="swiper-pagination swiper-paginationz1"></div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div data-aos="fade-left">
            <div class="row sliderBackground mb-3 align-items-center">
                <div class="col-lg-6 pad1 d-flex">
                    <div class="swiper-container z2 justify-content-center">
                        <div class="swiper-wrapper ">
                            @foreach($jet->images as $image)
                            <img class="swiper-slide img-fluid" src="{{ route('thumb', ['width:1200', $image]) }}" alt="flights4">
                            @endforeach
                        </div>
                        <div class="swiper-pagination swiper-paginationz2">
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-6 center flex-col flex-wrap-reverse padL5">
                    <div class="d-flex flex-column container-fluid justify-content-center">
                        <div class="flex-row">
                            <div class="redLogosTitle">{{$jet->name}}</div>
                        </div>
        
                        <div class="titleMessage marTopBot6 maxw85 whiteCol">{{$jet->description}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
</section>

<section>
    <div class="title mt-5 mb-3 center ">{{__('site.team')}}</div>

    <div data-aos="flip-right">
    <div class="swiper-container z5">
        <div class="swiper-wrapper ">

            @foreach($team as $person)
                <div class=" swiper-slide whiteCol pad0 ">
                    <img class=" img-fluid" src=" {{ route('thumb', ['width:700', $person->image]) }} " alt=" pers1 ">
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

<div data-aos="flip-left">
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
    var swiper = new Swiper('.swiper-container.z1', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        slidesPerColumn: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-paginationz1',
            clickable: true,
            dynamicBullets: true,
        }
    });

    var swiper = new Swiper('.swiper-container.z2', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        slidesPerColumn: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-paginationz2',
            clickable: true,
            dynamicBullets: true,
        }
    });

    var swiper = new Swiper('.swiper-container.z5', {
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
</script>
@endpush