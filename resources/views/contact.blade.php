@extends('parts.template') @section('content')
<a class="top-link hide" href="" id="js-top">
    <img class="img-fluid" src="./images/scroll.svg" alt="scroll">
    <span class="screen-reader-text">Back to top</span>
</a>

<div id="navMenu" class="navMenu marTop3 flex-row halfOpacity">
    <a href="/" class="text-decoration-none whiteCol">{{__('site.home')}}</a>
    <div class="navSeparator whiteCol">|</div>
    <a href="contact" class="text-decoration-none whiteCol">Contact</a>
</div>

<section id="contactDesktop">
    <div class="row">
        <form id="desktop_form" class="col-lg-5 pl-0" action='send_contact' method="post">
            <div data-aos="fade-right">
                {{ csrf_field() }}
                <div class="title marTopBot6 whiteCol">{{__('site.contact-us')}}</div>
                <div class="row marBot3">
                    <div class="col-md-4 pl-0">
                        <input class="btn formInput" name="name" type="text" placeholder="{{__('site.name')}}" />
                    </div>

                    <div class="col-md-4 pl-0">
                        <input class="btn formInput" name="email" type="text" placeholder="Email" />
                    </div>

                    <div class="col-md-4 pl-0">
                        <input class="btn formInput" name="phone" type="text" placeholder="{{__('site.phone')}}" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 pl-0">
                        <textarea class="btn formInputMesaj w-100" name="message" placeholder="{{__('site.message')}}" rows="5"
                            cols="50"></textarea>
                    </div>
                </div>

                <input name="terms" id="agreement" style="margin-left: 7px;" class="marTopBot6 pad0" type="radio"
                    value="rb">
                <label class="font16 openSansL marL2 whiteCol">{{__('site.agree')}}</label> <a href="policy"
                    class="whiteCol font16 openSansSB">{{__('site.policy')}}</a>

                <button id="desktop_send" type="submit" class="btn button">{{__('site.send')}}</button>
            </div>
        </form>

        <div class="col-lg-7 mapBackground center">
            <div class="row center">
                <div class="col-md-12 containerInfo">
                    <div data-aos="fade-left">
                        <div id="findUs" class="title whiteCol">{{__('site.find-us')}}</div>
                        <div class="flex-row whiteCol rowInfo">
                            <img id="pin" alt="pin" src="./images/red_pin.svg" />
                            <div class="halfOpacity">{{settings('contact.address')}}</div>
                        </div>

                        <div class="flex-row whiteCol rowInfo">
                            <img id="phone" alt="phone" src="./images/red_phone.svg" />
                            <a style="color:white;" href="tel:{{settings('contact.phone1')}}"
                                class="halfOpacity whiteCol">{{settings('contact.phone1')}}</a>
                        </div>

                        <div class="flex-row whiteCol rowInfo">
                            <a style="color:white;" href="tel:{{settings('contact.phone2')}}" id="secondNumber"
                                class="halfOpacity">{{settings('contact.phone2')}}</a>
                        </div>

                        <div class="flex-row whiteCol rowInfo">
                            <img id="mail" alt="mail" src="./images/red_mail.svg" />
                            <a style="color:white;" href="mailto:{{settings('contact.email')}}"
                                class="halfOpacity">{{settings('contact.email')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="contactMobile">
<div data-aos="fade-left">
    <form id = "mobile_form" action='send_contact' method="post">
        {{ csrf_field() }}
        <div class="title center marTopBot3">{{__('site.contact-us')}}</div>
        <div class="row marL7 marR7">
            <div class="col-lg-12">
                <input class="btn formInput" name="name" type="text" placeholder="Nume" />
            </div>
        </div>

        <div class="row marL7 marR7">
            <div class="col-lg-12">
                <input class="btn formInput" name="email" type="text" placeholder="Email" />
            </div>
        </div>

        <div class="row marL7 marR7">
            <div class="col-lg-12">
                <input class="btn formInput" name="phone" type="text" placeholder="Telefon" />
            </div>
        </div>

        <div class="row marL7 marR7">
            <div class="col-lg-12">
                <textarea class="btn formInputMesaj w-100" name="message" placeholder="Mesaj" rows="3"
                    cols="50"></textarea>
            </div>
        </div>

        <div class="marL7 flex-row align-items-center flex-nowrap">
            <input id="agreement" name = "terms" style="margin-left: 7px;" class="mt-4 mb-4 mr-4" type="radio" value="rb">
            <div class="font16 openSansL whiteCol mr-1">{{__('site.agree')}}</div>
            <a href="policy" class="d-flex flew-wrap whiteCol font16 openSansSB">{{__('site.policy')}}</a>
        </div>
        <div class="d-flex justify-content-center mt-3 mb-5">
            <button id="sendM" type="submit" class="btn button">
                {{__('site.send')}}
            </button>
        </div>
    </form>
</div>

<div data-aos="fade-right">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="title marBot5 ">{{__('site.find-us')}}</div>
        <img class="img-fluid redPin mb-1" src="./images/red_pin.svg" alt="pin">
        <div class="titleMessage mb-3">{{settings('contact.address')}}</div>

        <img class="img-fluid redPhone mb-1" src="./images/red_phone.svg" alt="phone">
        <a style="color:white;" href="tel:{{settings('contact.phone1')}}"
            class="titleMessage mb-1">{{settings('contact.phone1')}}</a>
        <a style="color:white;" href="tel:{{settings('contact.phone2')}}"
            class="titleMessage mb-3">{{settings('contact.phone2')}}</a>
        <img class="img-fluid redMail mb-1" src="./images/red_mail.svg" alt="redmail">
        <a style="color:white;" href="mailto:{{settings('contact.email')}}"
            class="titleMessage">{{settings('contact.email')}}</a>

        <div class="container-fluid contactMapBackground marTopBot3 marL3 marR3">
        </div>
    </div>
</div>
</div>

<div id="map" class="marTopBot6">
<div data-aos="fade-left">
</div>
</div>

<div id="locatii">

</div>
@endsection
@push('scripts')
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmM1P-D5Zka0kPEbZSrsR90gpBlDxgm18&callback=initMap&libraries=&v=weekly"
    defer></script>
<script>
    var allLocations = {!!$locations!!};
    var locations = [];
    for (var i = 0; i < allLocations.length; i++) {
        var markerCreate = {
            label: allLocations[i]['name'],
            location: {
                lat: parseFloat(allLocations[i]['latitude']),
                lng: parseFloat(allLocations[i]['longitude'])
            }
        };
        locations.push(markerCreate);
    }

    let map, Popup;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 44.8560255,
                lng: 24.8384835
            },
            zoom: 7
        });

        class Popup extends google.maps.OverlayView {
            constructor(position, content) {
                super();
                this.position = position;
                content.classList.add("popup-bubble");
                const bubbleAnchor = document.createElement("div");
                bubbleAnchor.classList.add("popup-bubble-anchor");
                bubbleAnchor.appendChild(content);
                this.containerDiv = document.createElement("div");
                this.containerDiv.classList.add("popup-container");
                this.containerDiv.appendChild(bubbleAnchor);
                Popup.preventMapHitsAndGesturesFrom(this.containerDiv);
            }
            onAdd() {
                this.getPanes().floatPane.appendChild(this.containerDiv);
            }
            onRemove() {
                if (this.containerDiv.parentElement) {
                    this.containerDiv.parentElement.removeChild(this.containerDiv);
                }
            }
            draw() {
                const divPosition = this.getProjection().fromLatLngToDivPixel(
                    this.position
                );
                const display =
                    Math.abs(divPosition.x) < 4000 && Math.abs(divPosition.y) < 4000 ?
                    "block" :
                    "none";

                if (display === "block") {
                    this.containerDiv.style.left = divPosition.x + "px";
                    this.containerDiv.style.top = divPosition.y + "px";
                }

                if (this.containerDiv.style.display !== display) {
                    this.containerDiv.style.display = display;
                }
            }
        }

        locations.forEach((element) => {
            new google.maps.Marker({
                position: element.location,
                map,
                icon: './images/maps_pin.svg',
                animation: google.maps.Animation.DROP,
            });

            var pop = document.createElement("div");
            pop.setAttribute('id', 'content' + locations.indexOf(element));

            var text = document.createElement("div");
            text.classList.add("openSansSB");
            text.classList.add("font20");
            text.innerText = element.label;

            pop.appendChild(text);
            document.getElementById("locatii").appendChild(pop);

            popup = new Popup(
                new google.maps.LatLng(element.location.lat, element.location.lng),
                document.getElementById('content' + locations.indexOf(element))
            )
            popup.setMap(map);
        });
    }
</script>
<script src="./js/notify.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        var formContact = $('#desktop_form');
        $('#desktop_send').on('click', function (event) {
            event.preventDefault();
            $.ajax({
                method: 'POST',
                url: '{{ url("send_contact") }}',
                data: formContact.serializeArray(),
                context: this,
                async: true,
                cache: false,
                dataType: 'json'
            }).done(function (res) {
                console.log(res);
                if (res.success == true) {
                    $.notify(res.successMessage, "success");
                    setTimeout(function () {
                        window.location.reload();

                    }, 4000);
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
        var formContact = $('#mobile_form');
        $(document).on('click','#sendM', function (event) {
            event.preventDefault();
            $.ajax({
                method: 'POST',
                url: '{{ url("send_contact") }}',
                data: formContact.serializeArray(),
                context: this,
                async: true,
                cache: false,
                dataType: 'json'
            }).done(function (res) {
                console.log(res);
                if (res.success == true) {
                    $.notify(res.successMessage, "success");
                    setTimeout(function () {
                        window.location.reload();

                    }, 4000);
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
@endpush