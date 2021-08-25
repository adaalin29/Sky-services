@extends('parts.template') @section('content')
<div style="overflow: hidden">
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<section id="is1">
    <img class="img-fluid mainBackground" alt="background" src="./images/homepage_background.png " />

    <div class="welcomeContainer">
        <div>
            <h1 class="welcomeTitle whiteCol">{{settings('index.title')}}</h1>
        </div>

        <h5 class="welcomeMessage maxw30 whiteCol">{{settings('index.short-description')}}</h5>

        <a id="firstButton" href="about" class="button ">
            {{__('site.learn')}}
        </a>
    </div>
    <div class="icon-scroll"></div>
</section>

<section>
    <div data-aos="flip-left">
        <div id="s2columns" class="row text-center marTop30 ">
            <div class="col-lg-3 pl-0 pr-0">
                <img class="featureLogo" alt="plane1 " src="./images/aircraft.svg ">
                <div class="featureTitle">{{settings('index.description-title1')}}</div>
                <div class="d-flex justify-content-center w-100">
                    <div class="titleMessage w-75 text-center">{{settings('index.description-text1')}}</div>
                </div>
                <a href = "tours" class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
            </div>
            <div class="col-lg-3 whiteCol pl-0 pr-0">
                <img class="featureLogo " alt="plane1 " src="./images/airport.svg ">
                <div class="featureTitle ">{{settings('index.description-title2')}}</div>
                <div class="d-flex justify-content-center w-100">
                    <div class="titleMessage w-75 text-center">{{settings('index.description-text2')}} </div>
                </div>
                <a href = "detaliu-zbor/air-taxi" class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
            </div>
            <div class="col-lg-3 whiteCol  pl-0 pr-0">
                <img class="featureLogo " alt="plane1 " src="./images/chopper.svg ">
                <div class="featureTitle ">{{settings('index.description-title3')}}</div>
                <div class="d-flex justify-content-center w-100">
                    <div class="titleMessage w-75 text-center">{{settings('index.description-text3')}}</div>
                </div>
                <a href = "detaliu-zbor/medical" class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
            </div>
            <div class="col-lg-3 whiteCol pr-0">
                <img class="featureLogo " alt="plane1 " src="./images/airdrop.svg ">
                <div class="featureTitle ">{{settings('index.description-title4')}}</div>
                <div class="d-flex justify-content-center w-100">
                    <div class="titleMessage w-75 text-center">{{settings('index.description-text4')}}</div>
                </div>
                <a href = "detaliu-zbor/curierat" class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
            </div>
        </div>
    </div>

    <div data-aos="flip-left">
        <div id="s2swiper">
            <div class="swiper-container s2swiper">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide whiteCol d-flex flex-column justify-content-center">
                        <img class="featureLogo " alt="plane1 " src="./images/aircraft.svg ">
                        <div class="featureTitle ">{{settings('index.description-title1')}}</div>
                        <div class="titleMessage text-center w-75">{{settings('index.description-text1')}}</div>
                        <a href='tours' class="btn btn-outline-danger featureBtn marTopBot3 ">{{__('site.learn')}}</a>
                    </div>

                    <div class="swiper-slide whiteCol d-flex flex-column justify-content-center">
                        <img class="featureLogo " alt="plane1 " src="./images/airport.svg ">
                        <div class="featureTitle ">{{settings('index.description-title2')}}</div>
                        <div class="titleMessage text-center w-75">{{settings('index.description-text2')}} </div>
                        <a  href='detaliu-zbor/air-taxi' class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
                    </div>

                    <div class="swiper-slide whiteCol d-flex flex-column justify-content-center ">
                        <img class="featureLogo " alt="plane1 " src="./images/chopper.svg ">
                        <div class="featureTitle ">{{settings('index.description-title3')}}</div>
                        <div class="titleMessage text-center w-75">{{settings('index.description-text3')}} </div>
                        <a  href='detaliu-zbor/medical' class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
                    </div>

                    <div class="swiper-slide whiteCol d-flex flex-column justify-content-center ">
                        <img class="featureLogo " alt="plane1 " src="./images/airdrop.svg ">
                        <div class="featureTitle ">{{settings('index.description-title4')}}</div>
                        <div class="titleMessage text-center w-75">{{settings('index.description-text4')}}</div>
                        <a href='detaliu-zbor/curierat' class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div data-aos="fade-right">
        <div class="title center mt-5 mb-3 whiteCol ">{{__('site.tours')}}</div>
        <div id="swiperi1" class="swiper-container i1">
            <div class="swiper-wrapper ">
                @foreach($tours as $tour)

                <div class="swiper-slide sliderBackground whiteCol ">
                    <div class =  "tour-image-swiper">
                        <img class="full-width img-fluid w-100" alt="island" src="{{ route('thumb', ['width:600', $tour->images[0]]) }}">
                    </div>
                <div class="featureTitle2 ">{{$tour->name}}</div>
                    <div class="d-flex center">
                        <div class="titleMessage w-75 text-center">{{ substr(strip_tags($tour->description), 0, 120) }}...</div>
                    </div>
                <a href='tour-detail/{{$tour->slug}}' class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination "></div>
        </div>
    </div>
</section>

<section>
    <div data-aos="zoom-in">
        <div id="s4columns" class="row align-items-center marTop10">
            <div class="col-md-4 pl-0 whiteCol ">
                <div class="title marBot3">{{settings('index.about-title')}}</div>
            <div class="titleMessage marBot3 maxw85 whiteCol ">{{settings('index.about-description')}}</div>
                <a href = "about" class="btn btn-outline-danger featureBtn ">{{__('site.learn')}}</a>
            </div>
            <div class="col-md-4">
                <img class="img-fluid img1" alt="plane1" src="{{ route('thumb', ['width:500', settings('index.about-image1')]) }}" />
            </div>

            <div class="col-md-4 pr-0 ">
                <img id="secondPlane" class="img-fluid img2 marBot20" alt="plane2" src="{{ route('thumb', ['width:500', settings('index.about-image2')]) }}" />
            </div>
        </div>
    </div>

    <div id="s4mobile">
        <div data-aos="zoom-out">
            <div class="row mt-3 flex-nowrap">
                <div class="col-md-6 pl-0">
                    <img class="img-fluid marTop20 padR15px paralelImg1" src="{{ route('thumb', ['width:500', settings('index.about-image1')]) }}">
                </div>

                <div class="col-md-6 pr-0">
                    <img class="img-fluid paralelImg2" src="{{ route('thumb', ['width:500', settings('index.about-image2')]) }}" alt="poza2">
                </div>
            </div>

            <div class="d-flex flex-column justify-content-center mt-3">
            <div class="title center mb-3">{{settings('index.about-title')}}</div>
                <div class="titleMessage">{{settings('index.about-description')}}</div>
            </div>

            <div class="center mt-3 mb-3">
                <a href = "about" class="btn btn-outline-danger featureBtn">{{__('site.learn')}}</a>
            </div>
        </div>
    </div>
</section>
{{-- form service --}}

<section>
    <div data-aos="zoom-in-up">
        <div class="d-flex center title mt-5 mb-3">{{__('site.gallery')}}</div>
  
        <div id="swiperDesktop" class="swiper-container idesktop">
            <div class="swiper-wrapper">
                @foreach($gallery->images as $image)
                <div class="swiper-slide">
                    <img src="{{ route('thumb', ['width:2560', $image]) }}" alt="couch">
                </div>
                @endforeach
            </div>
        </div>

        <div class="swiper-container i2">
            <div class="swiper-wrapper">
                @foreach($gallery->images as $image)
                    <div class="swiper-slide">
                        <img src="{{ route('thumb', ['width:2560', $image]) }}" alt="couch">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center mb-3">
            <a href="gallery" class="button">{{__('site.see-gallery')}}</a>
        </div>

    </div>
</section>

<section id="findUsMobile">
    <div data-aos="fade-left">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="title mb-3 ">{{__('site.find-us')}}</div>
            <img class="img-fluid redPin mb-1" src="./images/red_pin.svg" alt="pin">
            <div class="titleMessage mb-3">{{settings('contact.address')}}</div>

            <img class="img-fluid redPhone mb-1" src="./images/red_phone.svg" alt="phone">
            <a href = "tel:{{settings('contact.phone1')}}" class="titleMessage mb-1">{{settings('contact.phone1')}}</a>
            <a href = "tel:{{settings('contact.phone2')}}" class="titleMessage mb-3">{{settings('contact.phone2')}}</a>
            <img class="img-fluid redMail mb-1" src="./images/red_mail.svg" alt="redmail">
            <a href = "mailto:{{settings('contact.email')}}" class="titleMessage">{{settings('contact.email')}}</a>

            <div class="container-fluid contactMapBackground marTopBot3">
            </div>
        </div>
    </div>
</section>

<section id="seventhSection">
    <div data-aos="zoom-in-down">
        <div id="findUsDesktop">
            <div class="d-flex flex-row">
                <div class="d-flex flex-column pl-0 containerInfo">
                    <div class="title marBot5">{{__('site.find-us')}}</div>
                    <div class="flex-row whiteCol mb-2">
                        <img id="pin" alt="pin " src="./images/pin.svg " />
                        <div class="titleMessage">{{settings('contact.address')}}</div>
                    </div>

                    <div class="flex-row whiteCol mb-2">
                        <img id="phone" alt="phone " src="./images/phone.svg " />
                        <a id="phone1" href = "tel:{{settings('contact.phone1')}}" class="titleMessage ">{{settings('contact.phone1')}}</a>
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
@push('scripts')
<script language="javascript">
    var swiper = new Swiper('.swiper-container.i1', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
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
                slidesPerGroup: 2,
                spaceBetween: 20,
            },
            481: {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 10,
            }
        }
    });

    function removeClasses(slide, index) {
        for (let i = 1; i < 6; i++) {
            if (i != index) {
                slide.classList.remove('slide-' + i);
            }
        }
    }

    var swiperx = new Swiper('.swiper-container.idesktop', {
        loop: true,
        // autoHeight: true,
        breakpoints: {
            1024: {
                slidesPerView: 5,
                    slidesPerGroup: 1,
                    spaceBetween: 50,
            },
        },
        on: {
            slideChange: function() {
                if (screen.width >= 1024) {
                    this.slides[this.activeIndex - 1].className += ' slide-5 ';

                    this.slides[this.activeIndex].className += ' slide-1 ';
                    removeClasses(this.slides[this.activeIndex], 1);

                    this.slides[this.activeIndex + 1].className += ' slide-2 ';
                    removeClasses(this.slides[this.activeIndex + 1], 2);

                    this.slides[this.activeIndex + 2].className += ' slide-3 ';
                    removeClasses(this.slides[this.activeIndex + 2], 3);

                    this.slides[this.activeIndex + 3].className += ' slide-4 ';
                    removeClasses(this.slides[this.activeIndex + 3], 4);

                    this.slides[this.activeIndex + 4].className += ' slide-5 ';
                    removeClasses(this.slides[this.activeIndex + 4], 5);

                    if (this.slides[this.activeIndex + 5])
                        this.slides[this.activeIndex + 5].className += ' slide-5 ';
                }
            },
            breakpoint: function() {
                try{
                    if (screen.width >= 1024) {
                        this.slides[this.activeIndex - 1].className += ' slide-5 ';

                        this.slides[this.activeIndex].className += ' slide-1 ';
                        removeClasses(this.slides[this.activeIndex], 1);

                        this.slides[this.activeIndex + 1].className += ' slide-2 ';
                        removeClasses(this.slides[this.activeIndex + 1], 2);

                        this.slides[this.activeIndex + 2].className += ' slide-3 ';
                        removeClasses(this.slides[this.activeIndex + 2], 3);

                        this.slides[this.activeIndex + 3].className += ' slide-4 ';
                        removeClasses(this.slides[this.activeIndex + 3], 4);

                        this.slides[this.activeIndex + 4].className += ' slide-5 ';
                        removeClasses(this.slides[this.activeIndex + 4], 5);

                        if (this.slides[this.activeIndex + 5])
                            this.slides[this.activeIndex + 5].className += ' slide-5 ';
                    }
                } catch {
                    console.log('err')
                }
            }
        }
    });

    var swiper1 = new Swiper('.swiper-container.i2', {
        loop: true,
        // autoHeight: true,
        breakpoints: {
            1: {
                centeredSlides: true,
                slidesPerView: 3,
                slidesPerGroup: 1,
                spaceBetween: 100,
            },
        },
    });

    var swiper2 = new Swiper('.swiper-container.s2swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1025: {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 30,
            },
            769: {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 20,
            },
            481: {
                spaceBetween: 10,
            }
        }
    });
</script>
@endpush
@endsection
