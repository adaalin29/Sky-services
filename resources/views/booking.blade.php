@extends('parts.template') @section('content')
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<div class="bannerTour">
    <img class="img-fluid marTopBot1 w-100" src="./images/booking1.svg" alt="booking1">
</div>

<div id="navMenu" class="navMenu flex-row marBot2 halfOpacity">
<a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
    <div class="navSeparator whiteCol">|</div>
    <a href="booking" class="text-decoration-none whiteCol">{{__('site.rezervation')}}</a>
</div>

<section id="progressBar">
    <div class="container-fluid marTopBot2 pad0 darkBlueBackground ">
        <div class="row flex-nowrap">
            <div class="col-lg-4 flex-row justify-content-center align-items-center padTopBot2 flex-wrap">
                <img id="pas1Img" class="marR5 imgPas" src="./images/pas1.svg" alt="pas1">
                <div id="pas1" class="flex-col whiteCol">
                    <div class="pasTitle">{{__('site.step')}} 1</div>
                <div class="pasMessage">{{__('site.available')}}</div>
                </div>
            </div>

            <div class="col-lg-4 flex-row justify-content-center align-items-center padTopBot2 flex-wrap">
                <img id="pas2Img" class="marR5 imgPas" src="./images/pas2.svg" alt="pas2">
                <div id="pas2" class="flex-col fadedText whiteCol">
                    <div class="pasTitle">{{__('site.step')}} 2</div>
                    <div class="pasMessage">{{__('site.personal-data')}}</div>
                </div>
            </div>

            <div class="col-lg-4 flex-row justify-content-center align-items-center padTopBot2 flex-wrap">
                <img id="pas3Img" class="marR5 imgPas" src="./images/pas3.svg" alt="pas3">
                <div id="pas3" class="flex-col fadedText whiteCol">
                    <div class="pasTitle">{{__('site.step')}} 3</div>
                    <div class="pasMessage">{{__('site.finish')}}</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    {{-- FORM 1 --}}
    <form id="booking1" action='validate_part1' method="post">
        {{ csrf_field() }}
        <div class="flex-col mt-3 mb-3">
            <div class="title center whiteCol marBot1">{{__('site.rezervation')}}</div>
            <div class="titleMessage text-center maxw50 align-self-center">{{settings('site.booking-page')}}</div>
        </div>

        <div class="d-flex justify-content-center mb-3 title whiteCol ">{{__('site.available')}}</div>

        <div class="row padTopBot1">
            <div class="col-lg-3 pl-0 ">
                <select name="service" class="btn dropbtn form1_service">
                <option  value="" selected disabled>{{__('site.service-type')}}</option>
                        @foreach($flights as $service)
                            <option  value="{{$service->name}}">{{$service->name}}</option>
                        @endforeach
                </select>
            </div>

            <div class="col-lg-3">
                <div class="dropdown">
                <input id="datePicker" class="btn dropbtn dateBackground form1_date " name = "date" type="text " placeholder="{{__('site.select-date')}}" />
                </div>
            </div>

            <div class="col-lg-3">
            <input id="timePicker" class="btn dropbtn timeBackground form1_hour_departure" name = "hour_departure" type="text " placeholder="{{__('site.select-hour-departure')}}">
            </div>
            <div class="col-lg-3 pr-0 ">
                <input id="timePicker" class="btn dropbtn timeBackground form1_hour_arival" name = "hour_arival" type="text " placeholder="{{__('site.select-hour-arival')}}">
                </div>
        </div>

        <div class="row">
            <div class="col-lg-4 pl-0">
                <select class="btn dropbtn form1_duration" name = "duration">
                        <option value="" selected disabled>{{__('site.select-duration')}}</option>
                        <option value="{{__('site.zi')}}">{{__('site.zi')}}</option>
                        <option value="2 {{__('site.zile')}}">2 {{__('site.zile')}}</option>
                        <option value="3 {{__('site.zile')}}">3 {{__('site.zile')}}</option>
                        <option value="4 {{__('site.zile')}}">4 {{__('site.zile')}}</option>
                        <option value="5 {{__('site.zile')}}">5 {{__('site.zile')}}</option>
                        <option value="6 {{__('site.zile')}}">6 {{__('site.zile')}}</option>
                        <option value="7 {{__('site.zile')}}">7 {{__('site.zile')}}</option>
                        <option value="8 {{__('site.zile')}}">8 {{__('site.zile')}}</option>
                        <option value="9 {{__('site.zile')}}">9 {{__('site.zile')}}</option>
                        <option value="10 {{__('site.zile')}}">10 {{__('site.zile')}}</option>
                        <option value="11 {{__('site.zile')}}">11 {{__('site.zile')}}</option>
                        <option value="12 {{__('site.zile')}}">12 {{__('site.zile')}}</option>
                        <option value="13 {{__('site.zile')}}">13 {{__('site.zile')}}</option>
                        <option value="14 {{__('site.zile')}}">14 {{__('site.zile')}}</option>
                    </select>
            </div>

            <div class="col-lg-4 ">
                <select name = "persons" class="btn dropbtn form1_persons">
                        <option value="" selected disabled>{{__('site.persons')}}</option>
                        <option value="{{__('site.person')}}">{{__('site.person')}}</option>
                        <option value="2 {{__('site.persons')}}">2 {{__('site.persons')}}</option>
                        <option value="3 {{__('site.persons')}}">3 {{__('site.persons')}}</option>
                        <option value="4 {{__('site.persons')}}">4 {{__('site.persons')}}</option>
                        <option value="5 {{__('site.persons')}}">5 {{__('site.persons')}}</option>
                        <option value="6 {{__('site.persons')}}">6 {{__('site.persons')}}</option>
                        <option value="7 {{__('site.persons')}}">7 {{__('site.persons')}}</option>
                    </select>
            </div>

            <div class="col-lg-4 pr-0 ">
                <select name = "departure" class="btn dropbtn form1_departure">
                        <option value="" selected disabled>{{__('site.departure')}}</option>
                        @foreach($departures as $departure)
                            <option value="{{$departure->name}} ">{{$departure->name}}</option>
                        @endforeach
                    </select>
            </div>
        </div>

        <div id="disponibility" class="d-flex justify-content-center whiteCol">
            <button id ="book1Button" type="submit" class="btn whiteCol button mt-3 font16 openSansReg marBot5 ">{{__('site.rezerve')}} </button>
        </div>
    </form>
</section>

<section>
    {{-- FORM 2 --}}
    <form id="booking2" style="display: none" action='validate_part2' method="post">
        {{ csrf_field() }}
        <div class="flex-col mt-3 mb-3">
            <div class="title center whiteCol marBot1">{{__('site.rezervation')}}</div>
            <div class="titleMessage text-center maxw50 align-self-center">{{settings('site.booking-page')}}</div>
        </div>

        <input type = "hidden" name = "service" id = "final_service" value = "">
        <input type = "hidden" name = "date" id = "final_date" value = "">
        <input type = "hidden" name = "hour_departure" id = "final_hour_departure" value = "">
        <input type = "hidden" name = "hour_arival" id = "final_hour_arival" value = "">
        <input type = "hidden" name = "duration" id = "final_duration" value = "">
        <input type = "hidden" name = "persons" id = "final_persons" value = "">
        <input type = "hidden" name = "departure" id = "final_departure" value = "">

        <div class="row marBot1 pad0">
            <div class="col-lg-4 pl-0">
                <input class="btn formInput pad2 form2Name" type="text" name = "name" placeholder="{{__('site.name')}}" />
            </div>

            <div class="col-lg-4 ">
                <input class="btn emailBackground formInput pad2 form2Email" name = "email" type="text" placeholder="Email" />
            </div>

            <div class="col-lg-4 pr-0">
                <input class="btn phoneBackground formInput pad2 form2Phone" name = "phone" type="text" placeholder="{{__('site.phone')}}" />
            </div>
        </div>

        <div class="row pad0 marBot1">
            <div class="col-lg-6 pl-0">
                <input class="btn formInput pad2 goRoute" name = "go-route" type="text" placeholder="{{__('site.go-route')}}" />
            </div>

            <div class="col-lg-6 pr-0">
                <input class="btn formInput pad2 comeRoute" name = "come-route" type="text" placeholder="{{__('site.come-route')}}" />
            </div>
        </div>

        <div class="row pad0">
            <div class="col-lg-12 pl-0 pr-0">
                <input id="detaliiInput" class="btn formInput pad05" name = "message" type="text" placeholder="{{__('site.more-informations')}}" />
            </div>
        </div>
        @if(  Request::get('services'))
        <div class="flex-row flex-wrap mt-3 mb-3">
            @foreach($services as $service)
            
            <div class="btn whiteCol mr-4 darkGrayBackground selectElement">
                <div class="flex-row">
                    <div class="font20 openSansL padL15px">{{$service->service}}</div> <span class="padR15px"></span>
                <div class="font20 openSansB">{{$service->price}}</div> <span class="padR5px"></span>
                </div>
            </div>
            @endforeach
            <input type = "hidden" name = "options" id = "options">

        </div>
        @endif

        <div class=" flex-row align-items-center flex-nowrap">
            <input id="agreement" name = "terms" style="margin-left: 7px;" class="mt-4 mb-4 mr-4" type="radio" value="rb">
            <div class="font16 openSansL whiteCol mr-1">{{__('site.agree')}}</div>
            <a href="policy" class="d-flex flew-wrap whiteCol font16 openSansSB">{{__('site.policy')}}</a>
        </div>

        <div class="flex-col mt-2 align-items-center">
            <button id ="book2Button"  type="submit" class="btn whiteCol button mt-3 font16 openSansReg marBot5 final">{{__('site.finish')}}</button>
        </div>
    </form>
</section>

<section id="booking3" style="display: none">
    <div class="row align-items-center pad0 booking3Background mt-3">
        <div class="col-lg-5 dottedBorder center flex-col">
            <img class="mb-3" src="./images/travel_plane.svg" alt="plane" />
            <div class="title mb-3 whiteCol">{{__('site.thanks')}}</div>
            <div class="titleMessage whiteCol textCenter maxw80">{{settings('site.booking-thank')}}</div>
        </div>

        <div class="col-lg-7 logoBackground whiteCol mt-5 mb-5" id ="printItem">
            <div class="row padL5 d-flex marBot1 flex-nowrap">
                <div class="col-lg-4">
                    <div class="font18 openSansSB">{{__('site.name')}}:</div>
                </div>

                <div class="col-lg-3">
                    <div class="font16 openSansL booking3_name">Popescu Ionel</div>
                </div>
            </div>

            <div class="row padL5 d-flex align-items-center marBot1 flex-nowrap">
                <div class="col-lg-4">
                    <div class="font18 openSansSB">{{__('site.service-type')}}:</div>
                </div>

                <div class="col-lg-3">
                    <div class="font16 openSansL booking3_service">Curierat</div>
                </div>
            </div>

            <div class="row padL5 d-flex align-items-center marBot1 flex-nowrap">
                <div class="col-lg-4">
                    <div class="font18 openSansSB">{{__('site.departure-hour')}}:</div>
                </div>

                <div class="col-lg-3">
                    <div class="font16 openSansL booking3_departure_hour">12:00 AM</div>
                </div>
            </div>

            <div class="row padL5 d-flex align-items-center marBot5 flex-nowrap">
                <div class="col-lg-4">
                    <div class="font18 openSansSB ">{{__('site.arival-hour')}}:</div>
                </div>

                <div class="col-lg-3">
                    <div class="font16 openSansL booking3_arival_hour">13:00 AM</div>
                </div>
            </div>

            <div class="row padL5 d-flex align-items-center marBot1 flex-nowrap">
                <div class="col-lg-4">
                    <div class="font18 openSansSB">{{__('site.number-persons')}}:</div>
                </div>

                <div class="col-lg-3">
                    <div class="font16 openSansL booking3_people">2</div>
                </div>
            </div>

            <div class="row padL5 d-flex align-items-center marBot1 flex-nowrap">
                <div class="col-lg-4">
                    <div class="font18 openSansSB">{{__('site.route')}}:</div>
                </div>

                <div class="col-lg-3">
                    <div class="font16 openSansL booking3_route">Constanta - Cluj Napoca</div>
                </div>
            </div>

            <div class="row padL5 d-flex align-items-center marBot1 flex-nowrap">
                <div class="col-lg-4">
                    <div class="font18 openSansSB">Email:</div>
                </div>

                <div class="col-lg-3">
                    <div class="font16 openSansL booking3_email">popescu@gmail.com
                    </div>
                </div>
            </div>

            <div class="row padL5 d-flex align-items-center marBot1 flex-nowrap">
                <div class="col-lg-4">
                    <div class="font18 openSansSB">{{__('site.phone')}}:</div>
                </div>

                <div class="col-lg-3">
                    <div class="font16 openSansL booking3_phone">0777 111 111</div>
                </div>
            </div>
            <div class="row padL5">
                <div id="print" class="col-lg-12 mt-5">
                    <div class = "button print">{{__('site.print')}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
<script src="./js/notify.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        var formContact = $('#booking1');
        $('#book1Button').on('click', function (event) {
            event.preventDefault();
            $.ajax({
                method: 'POST',
                url: '{{ url("validate_part1") }}',
                data: formContact.serializeArray(),
                context: this,
                async: true,
                cache: false,
                dataType: 'json'
            }).done(function (res) {
                console.log(res);
                if (res.success == true) {
                    $('#final_service').attr('value', $('.form1_service').val());
                    $('#final_date').attr('value', $('.form1_date').val());
                    $('#final_hour_departure').attr('value', $('.form1_hour_departure').val());
                    $('#final_hour_arival').attr('value', $('.form1_hour_arival').val());
                    $('#final_duration').attr('value', $('.form1_duration').val());
                    $('#final_persons').attr('value', $('.form1_persons').val());
                    $('#final_departure').attr('value', $('.form1_departure').val());
                    $('#pas1').removeClass('whiteCol');
                    $('#pas1').css({ color: '#000' });
                    $('#pas1Img').addClass('blackFilter');

                    $('#pas2').removeClass('fadedText');
                    $('#pas2Img').addClass('whiteFilter');

                    $('#booking1').hide(600, 'swing');
                    $('#booking2').fadeIn(400, 'swing');
                } else {
                    var eroare = res.error;
                    for (var i = 0; i < eroare.length; i++) {
                        eroare[i] = eroare[i] + "\n";
                    }
                    $.notify(res.error, {
                        type: "error",
                        breakNewLines: true,
                        gap: 2
                    });
                }
            });
            return;
        });

    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        var formContact = $('#booking2');
        $('#book2Button').on('click', function (event) {
            event.preventDefault();
            $.ajax({
                method: 'POST',
                url: '{{ url("validate_part2") }}',
                data: formContact.serializeArray(),
                context: this,
                async: true,
                cache: false,
                dataType: 'json'
            }).done(function (res) {
                console.log(res);
                if (res.success == true) {
                    $('#final_service').attr('value', $('.form1_service').val());
                    $('#booking2').hide(600, 'swing');
                    $('#booking3').fadeIn(400, 'swing');
                    $('#progressDesktop').hide(600, 'swing');
                    // populate 
                    
                    $(".booking3_name").text($('.form2Name').val());
                    $(".booking3_service").text($('#final_service').val());
                    $(".booking3_departure_hour").text($('#final_hour_departure').val());
                    $(".booking3_arival_hour").text($('#final_hour_arival').val());
                    $(".booking3_people").text($('#final_persons').val());
                    $(".booking3_route").text($('.goRoute').val()+" - "+$('.comeRoute').val());
                    $(".booking3_email").text($('.form2Email').val());
                    $(".booking3_phone").text($('.form2Phone').val());
                    
                    $("#progressBar").hide();
                } else {
                    var eroare = res.error;
                    for (var i = 0; i < eroare.length; i++) {
                        eroare[i] = eroare[i] + "\n";
                    }
                    $.notify(res.error, {
                        type: "error",
                        breakNewLines: true,
                        gap: 2
                    });
                }
            });
            return;
        });

    });
</script>
<script>
    $('document').ready(function(){
        $('.print').click(function(){
            jQuery.print('#printItem')
        });

    $('.selectElement').click(function() {
        var options = $( "#options" );
        if($(this).hasClass( "active" )){
            $(this).removeClass('active');
            $(this).removeClass('grayBackground');
            $(this).addClass('darkGrayBackground');
            options.val( options.val().replace($(this).children().find('.openSansL').text(),''));

        }
        else{
            $(this).addClass('active');

            $(this).removeClass('darkGrayBackground');
            $(this).addClass('grayBackground');
        //    $('#options').val(append());
            options.val( options.val() + $(this).children().find('.openSansL').text() + " " );
        }
     });
    });
</script>
@endpush
@endsection

