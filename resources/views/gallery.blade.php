@extends('parts.template') @section('content')
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<div id="navMenu" class="navMenu flex-row marTop3 halfOpacity">
    <a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
    <div class="navSeparator whiteCol">|</div>
    <a href="gallery" class="text-decoration-none whiteCol">{{__('site.gallery')}}</a>
</div>

<div data-aos="fade-left">
    <div class="title whiteCol center mt-3">{{__('site.gallery')}}</div>
</div>

<section>
    <div data-aos="fade-left">
        <div class="gallery-container">
            @foreach($gallery->images as $image)
            <div class="gallery-item ">
                <a href="{{ route('thumb', ['width:1920', $image]) }}" data-fancybox="gallery ">
                    <img class="full-width" src="{{ route('thumb', ['width:400', $image]) }}" alt="gallery1 ">
                    <div class="overlay">
                        <div class="fs"><img src="{{ route('thumb', ['width:400', $image]) }}" alt=""></div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection