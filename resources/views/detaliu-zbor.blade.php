@extends('parts.template') @section('content')
<div style="overflow: hidden">
    <a class="top-link hide" href="" id="js-top">
        <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
        <span class="screen-reader-text">Back to top</span>
    </a>

    <img class="img-fluid w-100 mt-2" src="{{ route('thumb', ['width:2560', $flight->banner]) }}" alt="background" />

    <div id="navMenu" class="navMenu flex-row marBot1 halfOpacity">
        <a href="./index.html" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
        <div class="navSeparator whiteCol">|</div>
        <a href="./detalii_air_taxi.html" class="text-decoration-none whiteCol">{{$flight->name}}</a>
    </div>

    <section class="flex-col align-items-center">
        <div data-aos="fade-left">
            <div class="title center mt-3 whiteCol">
                {{$flight->name}}
            </div>

            <div class="center mb-3">
                <div class="titleMessage center whiteCol textCenter mb-3 center maxw50">
                    <p>{{$flight->description1}}</p>
                </div>
            </div>
        </div>
    </section>
    

    <section>
        <div class="row flex-wrap-reverse">
            <div class="col-lg-5 d-flex align-items-center mb-2 mt-2">
                <div data-aos="fade-left">
                    <div class="titleMessage whiteCol">{{$flight->description2}}</div>
                </div>
            </div>

            <div class="col-lg-7 mb-2 mt-2">
                <div data-aos="fade-right">
                    <img class="img-fluid w-100" src="{{ route('thumb', ['width:2560', $flight->image1]) }}" alt="detaliu1">
                </div>
            </div>
        </div>

        <div class="row marTop3 mb-5">
            <div class="col-lg-7 mb-2 mt-2">
                <div data-aos="fade-left">
                    <img class="img-fluid w-100" src="{{ route('thumb', ['width:2560', $flight->image2]) }}" alt="detaliu1">
                </div>
            </div>

            <div class="col-lg-5 d-flex align-items-center">
                <div data-aos="fade-right">
                    <div class="titleMessage whiteCol">{{$flight->description3}}</div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center marTop5">
                    
            <a href="@if($flight->services ==1) /booking?services=yes @else booking @endif" class="button">{{__('site.rezerve')}}</a>
        </div>
    </section>
</div>
@push('scripts')
@endpush
@endsection