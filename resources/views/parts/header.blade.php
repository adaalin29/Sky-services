<header id="header">
    <nav id="headerDesktop" class="row justify-content-between">
        <div class="row w-100 align-items-center">
            <div class="col-md-2 pl-0 pr-0 flex-row align-items-center">
                <img id="wingsLogo" alt="logo" src=images/Logo_wings.svg />
            </div>

            <div class="col-md-8 flex-row align-items-center">
                <a href="/" class="@if(Request::path() =="/") whiteCol @endif headerLink padR8 text-decoration-none">{{__('site.home')}}</a>
                <a href="about" class="@if(Request::path() =="about") whiteCol @endif headerLink padR8 text-decoration-none">{{__('site.about')}}</a>
                <a href="flights" class="@if(Request::path() =="flights") whiteCol @endif headerLink padR8 text-decoration-none">{{__('site.flights')}}</a>
                <a href="fleet" class="@if(Request::path() =="fleet") whiteCol @endif headerLink padR8 text-decoration-none">{{__('site.fleet')}}</a>
                <a href="contact" class="@if(Request::path() =="contact") whiteCol @endif headerLink padR8 text-decoration-none">Contact</a>
                <div class = "lang-container headerLink">
                    <a class = "headerLink text-decoration-none" href = "locale/ro" class = "language-link">RO</a>
                    <div class = "linie">\</div>
                    <a class = "headerLink text-decoration-none" href = "locale/en" class = "language-link">EN</a>
                </div>
            </div>

            <div class="col-md-2 pr-0 flex-row">
                <a href="booking" class="btnReserve ml-auto floatRight">{{__('site.rezerve')}}</a>
            </div>
        </div>
    </nav>

    <div id="headerMobile">
        <div id="nav" class="navOverlay d-flex flex-column align-items-center">
            <div class="navCloseBtn">
                <img onclick="closeNav()" src="./images/close_btn.svg" alt="close">
            </div>
            <div class="flex-row marTop30 marBot20 align-items-center">
                <img id="wingsLogo" alt="logo" src=images/Logo_wings.svg />
            </div>

            <div class="d-flex flex-column marBot10 h-100 justify-content-between align-items-center marBot30">
                <a href="/" class="headerLink font21 muliRegular text-decoration-none">{{__('site.home')}}</a>
                <a href="about" class="headerLink font20 openSansReg text-decoration-none">{{__('site.about')}}</a>
                <a href="flights" class="headerLink font20 openSansReg text-decoration-none">{{__('site.flights')}}</a>
                <a href="fleet" class="headerLink font20 openSansReg text-decoration-none">{{__('site.fleet')}}</a>
                <a href="contact" class="headerLink font20 openSansReg text-decoration-none">Contact</a>

                <div class = "lang-container headerLink">
                    <a class = "headerLink text-decoration-none" href = "locale/ro" class = "language-link">RO</a>
                    <div class = "linie">\</div>
                    <a class = "headerLink text-decoration-none" href = "locale/en" class = "language-link">EN</a>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row justify-content-between mt-3">
            <a class="align-self-center" onclick="openNav()"><img src="./images/navbar.svg" alt="navbar"></a>
            <a href="booking" class="btnReserve ml-auto">{{__('site.rezerve')}}</a>
        </div>
    </div>
</header>