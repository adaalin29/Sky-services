<footer>
    <div id="footerDesktop">
        <div id="footerRow1" class="row ">
            <div class="col-md-4 pl-0 ">
                <a href = "{{settings('site.facebook')}}"><img id="facebook" class="img-fluid mr-3" alt="facebook " src="./images/facebook.svg " /></a>
                <a href = "{{settings('site.linkedin')}}"><img id="linkedin" class="img-fluid mr-3" alt="linkedin " src="./images/linkedin.svg " /></a>
                <a href = "{{settings('site.instagram')}}"><img id="instagram" class="img-fluid " alt="instagram " src="./images/instagram-sketched.svg " /></a>
            </div>

            <div class="col-md-4 ">
                <div class="flex-row center ">
                    <img id="wingsLogo" alt="logo" src=images/Logo_wings.svg />
                </div>
            </div>

            <div class="col-md-4 pr-0 ">
                <div class="flex-row footerLink whiteCol ">
                <a href="/ " class="text-decoration-none whiteCol ">{{__('site.home')}}</a>
                    <div class="verticalSeparator ">|</div>
                    <a href="about " class="text-decoration-none whiteCol ">{{__('site.about')}}</a>
                    <div class="verticalSeparator ">|</div>
                    <a href="flights " class="text-decoration-none whiteCol ">{{__('site.flights')}}</a>
                    <div class="verticalSeparator ">|</div>
                    <a href="fleet " class="text-decoration-none whiteCol ">{{__('site.fleet')}}</a>
                    <div class="verticalSeparator ">|</div>
                    <a href="contact " class="text-decoration-none whiteCol ">Contact</a>
                </div>
            </div>
        </div>

        <div id="footerRow2" class="row d-flex justify-content-between ">
            <div class="col-md-6 pl-0 ">
                <div id="copyright " class="whiteCol ">
                    &copy;  {{__('site.copy')}} <a style = "color:white;" href = "https://www.touch-media.ro/">Touch Media</a>
                </div>
            </div>

            <div id="legals " class="col-md-6 pr-0 ">
                <div class="flex-row footerLink halfOpacity ">
                    <a href="terms " class="text-decoration-none whiteCol ">{{__('site.terms')}}</a>
                    <div class="verticalSeparator whiteCol ">|</div>
                    <a href="policy " class="text-decoration-none whiteCol ">{{__('site.policy')}}</a>
                    <div class="verticalSeparator whiteCol ">|</div>
                    <a href="cookies " class="text-decoration-none whiteCol ">{{__('site.cookies')}}</a>
                </div>
            </div>
        </div>

    </div>

    <div id="footerMobile">
        <div class="center flex-col whiteCol">
            <div class="titleMessage flex-col center opacity30 marTopBot1 text-decoration-none">
                <a href = "terms" class="whiteCol" href="confidentialitate.html ">{{__('site.terms')}}</a>
                <a href = "policy" class="whiteCol" class="marTopBot1" href="confidentialitate.html ">{{__('site.policy')}}</a>
                <a href = "cookies" class="whiteCol" href="# ">{{__('site.cookies')}}</a>
            </div>
            <div class="flex-row justify-content-between width15 marTopBot3 ">
                <a href="{{settings('site.facebook')}} "><img class="img-fluid " alt="facebook " src="./images/facebook.svg " /> </a>
                <a href="{{settings('site.linkedin')}} "><img class="img-fluid " alt="linkedin " src="./images/linkedin.svg " /></a>
                <a href="{{settings('site.instagram')}} "><img class="img-fluid " alt="instagram " src="./images/instagram-sketched.svg " /></a>
            </div>

            <div class="font16 openSansReg marTop3 marBot1 ">
                © 2020 Wings n Dreams.
            </div>

            <div class="font16 openSansReg marBot3">
                {{__('site.developed')}} <a style = "color:white;" href = "https://www.touch-media.ro/">Touch Media</a>
            </div>
        </div>
    </div>
</footer>