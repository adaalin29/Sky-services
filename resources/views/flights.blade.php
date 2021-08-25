@extends('parts.template') @section('content')
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<div class="bannerTour">
    <img class="img-fluid w-100 marTopBot1" src="{{ route('thumb', ['width:2560', settings('flights.banner')]) }}" alt="background" />
</div>

<div id="navMenu" class="navMenu flex-row halfOpacity">
<a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
    <div class="navSeparator whiteCol">|</div>
<a href="flights" class="text-decoration-none whiteCol">{{__('site.flights')}}</a>
</div>

<section>
    <div data-aos="flip-left">
        <div id="zboruriDesktop">
            <div class="row center marTop5 mb-5">
                <div class="col-md-6 pl-0">
                    <div class="title marBot3">{{__('site.flights')}}</div>
                <div class="titleMessage maxw80 marBot10 whiteCol">{{settings('flights.description')}}</div>
                    <img class="img-fluid pr-5 w-100" src="{{ route('thumb', ['width:2560', settings('flights.image2')]) }}" alt="flights1">
                </div>

                <div class="col-md-6 pr-0 marBot10">
                    <img class="img-fluid floatRight" src="{{ route('thumb', ['width:2560', settings('flights.image1')]) }}" alt="flights2">
                </div>
            </div>
        </div>

        <div id="zboruriMobile">
            <div class="title center mt-4 mb-3">{{__('site.flights')}}</div>
            <div class="titleMessage">{{settings('flights.description')}}</div>
            <div class="row mt-3 mb-4 flex-nowrap">
                <div class="col-md-6 pr-3 marTop40">
                    <img class="img-fluid paralelImg1 marTop20" src="{{ route('thumb', ['width:2560', settings('flights.image2')]) }}" alt="about_us">
                </div>

                <div class="col-md-6">
                    <img class="img-fluid floatRight paralelImg2" src="{{ route('thumb', ['width:2560', settings('flights.image1')]) }}" alt="couch">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="slider1">
    @foreach($flights as $flight)
    @if($flight->id%2==0)
    <div data-aos="zoom-in-up">
        <div class="row sliderBackground mt-5 mb-5 flex-wrap-reverse align-items-center">
            <div class="col-lg-6 d-flex flex-column justify-content-center mt-3">
                <div class="d-flex flex-column container-fluid justify-content-center padL5">
                    <div class="flex-row">
                        @if($flight['icon']!=null)
                            <img class="redLogos marR5" src="{{Voyager::image($flight['icon'][0]['download_link'])}}" alt="red_aircraft">
                        @endif
                        <div class="redLogosTitle">{{$flight->name}}</div>
                    </div>

                    <div class="marTopBot6 titleMessage whiteCol">{{$flight->description1}}</div>

                    <a href = "@if($flight->id==1) tours @else detaliu-zbor/{{$flight->slug}} @endif" class="btn featureBtn mb-3 openSansReg font16">
                        <div>{{__('site.learn')}}</div>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 pad1">
                <div class="swiper-container z3">
                    <div class="swiper-wrapper">
                        @foreach($flight->images as $image)
                            <img class="swiper-slide img-fluid" src="{{ route('thumb', ['width:2560', $image]) }}" alt="flights4">
                        @endforeach
                    </div>
                    <div class="swiper-pagination swiper-paginationz3"></div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div data-aos="flip-left">
        <div class="row sliderBackground mb-3 align-items-center">
            <div class="col-lg-6 pad1 d-flex">
                <div class="swiper-container z4 ml-0">
                    <div class="swiper-wrapper ">
                        @foreach($flight->images as $image)
                            <img class="swiper-slide img-fluid" src="{{ route('thumb', ['width:2560', $image]) }}" alt="flights4">
                        @endforeach
                    </div>
                    <div class="swiper-pagination swiper-paginationz4">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 center flex-col flex-wrap-reverse padL5 mt-3">
                <div class="d-flex flex-column container-fluid justify-content-center">
                    <div class="flex-row">
                        @if($flight['icon']!=null)
                            <img class="redLogos marR5" src="{{Voyager::image($flight['icon'][0]['download_link'])}}" alt="red_plane">
                        @endif
                        <div class="redLogosTitle">{{$flight->name}}</div>
                    </div>

                    <div class="titleMessage marTopBot6 maxw85 whiteCol">{{$flight->description1}}</div>
                    <a href = "@if($flight->id==1) tours @else detaliu-zbor/{{$flight->slug}} @endif" class="btn featureBtn mb-3 openSansReg font16">
                        <div>{{__('site.learn')}}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</section>

<section>
    <div data-aos="fade-right">
        <div class="title center mt-5 mb-3 whiteCol ">{{__('site.tours')}}</div>

        <div id="swiperi1" class="swiper-container z5">
            <div class="swiper-wrapper ">
                @foreach($tours as $tour)
                <div class="swiper-slide sliderBackground whiteCol ">
                    <div class="tour-image-swiper">
                        <img class="img-fluid full-width w-100" alt="island" src="{{ route('thumb', ['width:600', $tour->images[0]]) }}">
                    </div>
                <div class="featureTitle2 ">{{$tour->name}}</div>
                    <div class="d-flex center">
                        <div class="titleMessage w-75 text-center">{{ substr(strip_tags($tour->description), 0, 120) }}...</div>
                    </div>
                    <a href='tour-detail/{{$tour->slug}}' class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-paginationz5"></div>
        </div>
    </div>
</section>
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

    var swiper = new Swiper('.swiper-container.z3', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        slidesPerColumn: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-paginationz3',
            clickable: true,
            dynamicBullets: true,
        }
    });

    var swiper = new Swiper('.swiper-container.z4', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        slidesPerColumn: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-paginationz4',
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
                slidesPerView: 3,
                spaceBetween: 30,
            },
            769: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 20,
            },
            479: {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 10,
            }
        }
    });
</script>
@endpush
@endsection