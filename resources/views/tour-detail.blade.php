@extends('parts.template') @section('content')
<div id="detalii_delta">
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<div class="bannerTour w-100">
    <img class="img-fluid mt-2" src="{{ route('thumb', ['width:2560', $tour->banner]) }}" alt="background" />
</div>

<div id="navMenu" class="navMenu flex-row marBot1 halfOpacity">
    <a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
        <div class="navSeparator whiteCol">|</div>
    <a href="tour-detail/{{$tour->slug}}" class="text-decoration-none whiteCol">{{$tour->name}}</a>
</div>

<section>
        <div class="title center whiteCol mt-5">{{$tour->name}}</div>

        <div data-aos="fade-left">
            <div class="flex-col align-items-center">
                <div class="titleMessage whiteCol maxw50 textCenter">
                    <p class="mb-5">{!!$tour->description!!}</p>
                </div>

                <div class="d-flex justify-content-center marTop5">
                    
                    <a href="@if($tour->services ==1) /booking?services=yes @else booking @endif" class="button">{{__('site.rezerve')}}</a>
                </div>

            <div class="flex-row justify-content-between mt-5 mb-5">
                <div class="openSansL font16 whiteCol pr-3">{{__('site.share')}}</div>
                <div class="row flex-nowrap">
                    <div class="col-md-4">
                        <a target = "_blank" href="https://www.facebook.com/sharer/sharer.php?u={{URL::to('/')}}/tour-detail/{{$tour->slug}}"><img alt="facebook" src="./images/facebook.svg" /> </a>
                    </div>

                    <div class="col-md-4">
                        <a target = "_blank" href="https://www.linkedin.com/sharing/share-offsite/?url={{URL::to('/')}}/tour-detail/{{$tour->id}}"><img alt="linkedin" src="./images/linkedin.svg" /></a>
                    </div>

                    <div class="col-md-4">
                        <a target = "_blank" href="https://www.instagram.com/?url={{URL::to('/')}}/tour-detail/{{$tour->slug}}"><img alt="instagram" src="./images/instagram-sketched.svg" /></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @if($tour->images!=null)
        <div data-aos="fade-right">
            <div class="center mb-5">
                <div class="swiper-container s2 ">
                    <div class="swiper-wrapper ">
                        @foreach($tour->images as $image)
                        <div class=" swiper-slide whiteCol d-flex align-items-center">
                            <div class = "swiper-imagine-modificat">
                                <img class=" full-width img-fluid" src="{{ route('thumb', ['width:2560', $image]) }}" alt="detaliu_tur" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class=" swiper-pagination swiper-pagination1 "></div>
                </div>
            </div>
        </div>
        @endif
</section>

<section>
    <div data-aos="fade-right">
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
            <div class=" swiper-pagination swiper-pagination1 "></div>
        </div>
    </div>
</section>

<section id="findUsMobile">
    <div data-aos="fade-left">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="title mt-5 mb-3 ">{{__('site.find-us')}}</div>
            <img class="img-fluid redPin mb-1" src="./images/red_pin.svg" alt="pin">
            <div class="titleMessage mb-3">{{settings('contact.address')}}</div>

            <img class="img-fluid redPhone mb-1" src="./images/red_phone.svg" alt="phone">
            <a href = "tel:{{settings('contact.phone1')}}" class="titleMessage mb-1">{{settings('contact.phone1')}}</a>
            <a href = "tel:{{settings('contact.phone2')}}" class="titleMessage mb-3">{{settings('contact.phone2')}}</a>
            <img class="img-fluid redMail mb-1" src="./images/red_mail.svg" alt="redmail">
            <a href = "mailto:{{settings('contact.email')}}" class="titleMessage">{{settings('contact.email')}}</a>

            <div class="container-fluid contactMapBackground marTopBot3 marL3 marR3">
            </div>
        </div>
    </div>
</section>

<section id="seventhSection">
    <div id="findUsDesktop">
    <div data-aos="zoom-in-down">
        <div class="d-flex flex-row">
            <div class="d-flex flex-column pl-0 containerInfo">
                <div class="title marBot5">{{__('site.find-us')}}</div>
                <div class="flex-row whiteCol mb-2">
                    <img id="pin" alt="pin " src="./images/pin.svg " />
                    <div class="titleMessage">{{settings('contact.address')}}</div>
                </div>

                <div class="flex-row whiteCol mb-2">
                    <img id="phone" alt="phone " src="./images/phone.svg " />
                    <a href = "tel:{{settings('contact.phone1')}}" class="titleMessage ">{{settings('contact.phone1')}}</a>
                </div>

                <div class="flex-row whiteCol mb-2 ">
                    <a href = "tel:{{settings('contact.phone2')}}" id="secondNumber" class="titleMessage ">{{settings('contact.phone2')}}</a>
                </div>

                <div class="flex-row whiteCol mb-2 ">
                    <img id="mail" alt="mail " src="./images/mail.svg " />
                <a href = "mailto:{{settings('contact.email')}}" class="titleMessage">{{settings('contact.email')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
@endsection
@push('scripts')
<script>
    var swiper1 = new Swiper('.swiper-container.s1', {
        loop: true,
        pagination: {
            el: '.swiper-pagination1',
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
                spaceBetween: 20,
            },
            1: {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 10,
            }
        }
    });

    var swiper2 = new Swiper('.swiper-container.s2', {
        loop: true,
        pagination: {
            el: '.swiper-pagination1',
            clickable: true,
            dynamicBullets: true,
        },
        breakpoints: {
            1025: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            769: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1: {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 10,
            }
        }
    })
</script>
@endpush