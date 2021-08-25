@extends('parts.template') @section('content')
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<div id="navMenu" class="navMenu flex-row mt-5 marBot1 halfOpacity">
<a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
    <div class="navSeparator whiteCol">|</div>
    <a href="/terms" class="text-decoration-none whiteCol">{{__('site.terms')}}</a>
</div>

<div data-aos="fade-left">
    <div class="confidentialitate center whiteCol title marBot1">{{__('site.terms')}}</div>
</div>

<section>
    <div data-aos="fade-right">
        <div class="openSansL font16 whiteCol">
        {!!settings('site.terms')!!}
        </div>
    </div>
</section>
@endsection