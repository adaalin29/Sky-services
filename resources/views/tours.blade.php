@extends('parts.template') @section('content')
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>


<img class="img-fluid w-100 marTopBot1" src="{{ route('thumb', ['width:2560', settings('flights.tours-background')]) }}" alt="background" />

<div id="navMenu" style="padding-left: 15px;" class="navMenu flex-row marBot1 halfOpacity">
    <a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
    <div class="navSeparator whiteCol">|</div>
    <a href="tours" class="text-decoration-none whiteCol">{{__('site.tours')}}</a>
</div>

<section>
    <div data-aos="fade-left">
        <div class="title center">
            {{__('site.tours')}}
        </div>

        <div class="d-flex center align-items-center">
            <div class="titleMessage whiteCol marTopBot1 maxw50 textCenter">
                <p class="marBot5">{{settings('flights.tours')}}</div>
        </div>
    </div>
</section>

<section>
    <div data-aos="fade-left">
        <div class="tour-container">
            @foreach($tours as $tour)
                <div class=" whiteCol text-center pb-3 tour-item">
                    <div class="sliderBackground">
                        <div class = "tour-swiper-image">
                            <img class="full-width img-fluid w-100" alt="island" src="{{ route('thumb', ['width:800', $tour->images[0]]) }}">
                        </div>
                        <div class="featureTitle2 ">{{$tour->name}}</div>
                        <div class="d-flex center">
                        <div class="titleMessage w-75 text-center">{{ substr(strip_tags($tour->description), 0, 120) }}...</div>
                        </div>
                        <a href = "tour-detail/{{$tour->slug}}" class="btn btn-outline-danger featureBtn marTopBot3">{{__('site.learn')}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection