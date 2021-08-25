@extends('parts.template') @section('content')
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<div id="navMenu" class="navMenu flex-row mt-5 marBot1 halfOpacity">
<a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
    <div class="navSeparator whiteCol">|</div>
    <a href="/policy" class="text-decoration-none whiteCol">{{__('site.policy')}}</a>
</div>

<div class="confidentialitate center whiteCol title marBot1">{{__('site.policy')}}</div>

<section>
    <div class="openSansL font16 whiteCol">
       {!!settings('site.policy')!!}
    </div>
</section>
@endsection