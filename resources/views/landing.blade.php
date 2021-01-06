<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="/eecl-logo-1-color-02.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>EEC LINE Co., Ltd. </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <link rel="stylesheet" href="{{ mix('css/landing.css') }}">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
          integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ mix('css/landing-font.css') }}">
    <link rel="stylesheet" href="{{ mix('css/landing-icon.css') }}">
    <style>

        .navbar-logo {
            background-image: url('/img/EECL-Logo-narrow.png');
            background-size: 100px;
            background-repeat: no-repeat;
            margin-top: 15px !important;
        }
    </style>
</head>

<body id="skrollr-body">
{{--  <div class="loading ">--}}
{{--  <div class="loading-container">--}}
{{--    <p>Just a sec...</p>--}}
{{--    <img class="loader" src="assets/img//rubik.svg"/>--}}
{{--  </div>--}}
</div>
<!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation">

    <div class="container">
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a href="/" class="navbar-brand" role="logo">
                EEC Line
            </a>
        </div>

        <div class="navbar-scroll-to collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right navbar-uppercase">
                <li>
                    <a href="" data-scroll="true" data-id="#whoWeAre" class="active">
                        About
                    </a>
                </li>
                <li>
                    <a href="" data-scroll="true" data-id="#services">
                        Services
                    </a>
                </li>
                <li>
                    <a href="" data-scroll="true" data-id="#advantage">
                        Why Us
                    </a>
                </li>
                <li>
                    <a href="" data-scroll="true" data-id="#numbers">
                        Numbers
                    </a>
                </li>
                <li>
                    <a href="" data-scroll="true" data-id="#contact">
                        Contact
                    </a>
                </li>

                @auth()
                    <li>
                        <a href="/login">
                            To Console
                        </a>
                    </li>
                @endauth

                @guest()
                    <li>
                        <a href="/login">
                            Sign in
                        </a>
                    </li>
                @endguest
                <li class="social-links">
                    <a href="https://line.me/R/ti/p/%40lww4836w">
                        <i style="font-weight: normal;" class="fab fa-line"></i>
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>


<div class="wrapper">

    <div class="section section-header">
        <div class="full-image pattern-image">
            <img src="/img/All-com.jpg"/>
            {{--            <img src="/images/bg-1-2000x938 origin.jpg"/>--}}

            <div class="container">
                <div class="content content-with-opacity">
                    <p>EEC Line Company Limited
                    <p>
                        <img style="width: 500px; margin-top: 25px;" src="/img/EECL-Logo-White-narrow.png"/>
                    <div class="separator-container">
                        <div style="width: 30em;" class="separator line-separator">⌘</div>
                    </div>
                    <h5>Next level logistical solutions</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-we-are-2 radu" id="whoWeAre">
        <div class="text-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="title add-animation">
                            <h5 class="text-gray">your complete</h5>
                            <h2>Solution</h2>
                            <div class="separator-container">
                                <div class="separator line-separator">⌘</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-md-offset-1">
                        <p class="add-animation animation-1">EEC LINE works to resolve all your land transportation needs. Our overland truck service works to provide you
                            the best complete logistic solutions
                            when transporting chemicals or general cargo.</p>
                        <p class="add-animation animation-2">At EECL, we work tirelessly to ensure that your cargo arrives safely and on time to its destination.
                            Your cargo is safe while on one of our certified trucks. </p>
                        <p class="add-animation animation-3">Feel free to get in touch with us and tell us about your plans. We think you’ll love working with us.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #efefef;" class="section section-we-made-3 section-with-hover" id="services">
        <div style="background-color: #efefef; " class="text-area">
            <div class="title add-animation">
                <h2>Our Service</h2>
                <div class="separator-container">
                    <div class="separator line-separator">✻</div>
                </div>
                <p>Our truck operators are trained and experienced in over land chemical transport. They are also experienced with the safe handling of hazard chemicals.
                    With EECL drivers, you are ensured safe and speedy delivery of shipment across Thailand.</p>
            </div>
        </div>
        <div class="container">
            <div class="row" id="projectsLine1">
                <div class="col-md-4">
                    <div class="project add-animation-stopped animation-1">
                        <img src="/img/Chemical-10-W_GROUP-com.jpg"/>
                        <a class="over-area color-2" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_1">
                            <div class="content">
                                <h4>10W Chemical Tank</h4>
                                <p>Click for more detail.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project add-animation-stopped animation-2">
                        <img src="/img/Chemical-Truck-22-W_GROUP-com.jpg"/>
                        <a class="over-area color-1" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_2">
                            <div class="content">
                                <h4>22W Chemical Tank</h4>
                                <p>Click for more detail.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project add-animation-stopped animation-3">
                        <img src="/img/Container-Trailor_GROUP-com.jpg"/>
                        <a class="over-area color-4 " href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_2">
                            <div class="content">
                                <h4>22W Flat Bed</h4>
                                <p>Click for more detail.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project add-animation-stopped animation-1">
                        <img src="/img/Container-10-W_GROUP-com.jpg"/>
                        <a class="over-area color-4" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_3">
                            <div class="content">
                                <h4>10W Container</h4>
                                <p>Click for more detail.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project add-animation-stopped animation-2">
                        <img src="/img/Container-18-W_GROUP-com.jpg"/>
                        <a class="over-area color-2" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_3">
                            <div class="content">
                                <h4>18W Container</h4>
                                <p>Click for more detail.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project add-animation-stopped animation-3">
                        <img src="/img/Isotank_GROUP-com.jpg"/>
                        <a class="over-area color-3" href="#" target="_blank">
                            <div class="content">
                                <h4>22W Low Bed</h4>
                                <p>Click for more detail.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-we-do-2" id="advantage">
        <div class="text-area">
            <div class="container">
                <div class="row">
                    <div class="title add-animation">
                        <h5 class="text-gray">Here's why our customers</h5>
                        <h2>choose us</h2>
                        <div class="separator-container">
                            <div class="separator line-separator">✻</div>
                        </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card add-animation animation-1">
                                    <div class="icon">
                                        <i style="color: #c2000b" class="landing-icon icon-money-coins"></i>
                                    </div>
                                    <h3>Competitive Pricing</h3>
                                    <p>A cost effective and comprehensive service that compels customers to return to EECL again and again.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card add-animation animation-2">
                                    <div class="icon">
                                        <i style="color: #c2000b" class="landing-icon icon-time-machine"></i>
                                    </div>
                                    <h3>Timely Delivery</h3>
                                    <p>Knowledgeable and familiar with regional transport routes and local roads, you are ensured safe and speedy delivery of
                                        shipment.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card add-animation animation-3">
                                    <div class="icon">
                                        <i style="color: #c2000b " class="landing-icon icon-verified"></i>
                                    </div>
                                    <h3>Certified Trucks</h3>
                                    <p>Each truck is certified to transport hazardous chemicals safely and efficiently to its final destination. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-numbers-2" id="numbers">
        <div class="parallax pattern-image">
            <img src="assets/img//rubik_background.jpg"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="description">
                        <div class="title">
                            <h5>it's a fact that</h5>
                            <h2>Numbers don't lie</h2>
                            <div class="separator-container">
                                <div class="separator line-separator">∎</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-plain">
                        <h3>Customers</h3>
                        <h5>Enterprises and private</h5>
                        <div class="number" id="customersNo">
                            106
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-plain">
                        <h3>Licenses</h3>
                        <h5>Our own, certified licensed truck</h5>
                        <div class="number" id="projectsNo">
                            186
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-plain">
                        <h3>Growth</h3>
                        <h5>Revenue growth in 3 years</h5>
                        <div class="number" id="citiesNo">
                            4x
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-clients-1" id="clients1">
        <div class="container">
            <div class="text-area">
                <div class="title add-animation">
                    <h5 class="text-gray">Some of Our</h5>
                    <h2>Beloved Customers</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">✻</div>
                    </div>
                </div>
            </div>
            <div class="list-logos">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo add-animation animation-1">
                            <a name="#">
                                <img alt="..." src="/img/svg/ptt.svg"/>
                                <img alt="..." src="/img/svg/ptt-h.svg"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo add-animation animation-2">
                            <a name="#">
                                <img alt="..." src="/img/svg/ea.svg"/>
                                <img alt="..." src="/img/svg/ea-h.svg"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo add-animation animation-3">
                            <a name="#">
                                <img alt="..." src="/img/svg/thaimc.svg"/>
                                <img alt="..." src="/img/svg/thaimc-h.svg"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo add-animation animation-4">
                            <a name="#">
                                <img alt="..." src="/img/svg/ivict.svg"/>
                                <img alt="..." src="/img/svg/ivict-h.svg"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo add-animation animation-1">
                            <a name="#">
                                <img alt="..." src="/img/svg/toshi.svg"/>
                                <img alt="..." src="/img/svg/toshi-h.svg"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo add-animation animation-2">
                            <a name="#">
                                <img alt="..." src="/img/svg/samsung.svg"/>
                                <img alt="..." src="/img/svg/samsung-h.svg"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo add-animation animation-3">
                            <a name="#">
                                <img alt="..." src="/img/svg/irpc.svg"/>
                                <img alt="..." src="/img/svg/irpc-h.svg"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="logo add-animation animation-4">
                            <a name="#">
                                <img alt="..." src="/img/svg/bbf.svg"/>
                                <img alt="..." src="/img/svg/bbf-h.svg"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-contact-2" id="contact">
        <div class="container">
            <div class="text-area">
                <div class="title add-animation">
                    <h5 class="text-gray">here you can</h5>
                    <h2>Contact Us</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group add-animation animation-1">
                            <label>Your Full Name</label>
                            <input type="text" value="" placeholder="Michael Jordan" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group add-animation animation-2">
                            <label>Your Email</label>
                            <input type="text" value="" placeholder="michael.j@gmail.com" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group add-animation animation-3">
                            <label>Subject</label>
                            <input type="text" value="" placeholder="Say hi to you" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group add-animation animation-3">
                            <textarea class="form-control" placeholder="Here you can write your nice text" rows="8"></textarea>
                        </div>
                        <div>
                            <div class="col-md-2 col-md-offset-5">
                                <button class="btn btn-lg btn-black btn-contact">
                                    SEND <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-big footer-color-black" id="footerTrigger">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info add-animation-stopped animation-1">
                        <h5 class="title">Company</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="/">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="https://account.eecl.co.th">
                                        Accounting
                                    </a>
                                </li>
                                <li>
                                    <a href="https://mail.eecl.co.th">
                                        Web Mail
                                    </a>
                                </li>
                                <li>
                                    <a href="/login">
                                        Truck Management
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info add-animation-stopped animation-2">
                        <h5 class="title"> Business Hours</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a name="#" style="cursor: default;">
                                        Mon-Sat
                                    </a>
                                </li>
                                <li>
                                    <a name="#" style="cursor: default;">
                                        8:30 AM - 5:30 PM
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="info add-animation-stopped animation-3">
                        <h5 class="title">Address</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a name="#" style="cursor: default;">
                                        47/9 Samnak Ai Ngon,
                                        Map Kha, Amphoe Nikhom Phatthana,
                                        Rayong 21180
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info add-animation-stopped animation-4">
                        <h5 class="title">Contact</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a name="#" style="cursor: default;">
                                        Email: sales@eecl.co.th
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+66942944299">
                                        Phone: +669 4294 4299
                                    </a>
                                </li>
                                <li>
                                    <a href="https://line.me/R/ti/p/%40lww4836w">
                                        LINE
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                © 2021 EEC LINE Co., Ltd. - All Rights Reserved
            </div>
        </div>
    </footer>
</div> <!-- end wrapper -->

<div class="project-content" id="project_1">
    <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
    <div>
        <div class="project-details">
            <div class="container">
                <div class="project-title">
                    <h5>PUE, Mexico<span>.</span></h5>
                    <h2>Sol 52</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-text">
                            <p><span>Type</span>Private house</p>
                            <p><span>Status</span>Built</p>
                            <p><span>Year</span>2013</p>
                            <p><span>Size</span>1000sqft</p>
                            <br>
                            <p>Sol 25 is a house in San Pedro Cholula Puebla, Mexico. Located in a residential subdivision outside of the city, adjacent to Mount
                                Zapoteca, a protected nature reserve. Sol 25 emerges as a home with the premise of creating spaces that are visually integrated with
                                nature in addition to maximizing the size of the house.</p>
                            <p>A distinct architectural layout is generated; located on the ground floor are two bedrooms, a garden, and a lobby. Going up to the first
                                level is the living room and kitchen, all in an open-plan concept into a double-height space where you can enjoy the view to the green
                                areas. Going up a level is a loft with a studio. The roof space was allocated to a roof garden where you can enjoy an outdoor environment
                                that is visually attractive in 360 degrees.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project-content" id="project_2">
    <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
    <div>
        <div class="project-details">
            <div class="container">
                <div class="project-title">
                    <h5>Positano, Italy<span>.</span></h5>
                    <h2>Villa Positano</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-text">
                            <p><span>Type</span>Private house</p>
                            <p><span>Status</span>Built</p>
                            <p><span>Year</span>2014</p>
                            <p><span>Size</span>1500sqft</p>
                            <br>
                            <p>The true protagonist of this project is a collection of antique ceramics from Vietri, entrusted with the role of exalting the particular
                                elements that make the famous Villa in Positano a contemporary architectural masterpiece.</p>
                            <p>The harmonious composition of hand-painted ceramic tiles, the great passion of the villa’s owners, wraps a long ribbon of steel like a
                                decorative skin. The ribbon is used to articulate the double height spaces of a former eighteenth-century monastery, linking the villa’s
                                three levels.</p>
                            <p>It begins on the ceiling, dropping down a six-meter high wall to become a shelf in the large living room on the first floor, a platform,
                                intersecting the stairs leading to the kitchen on the ground floor. The ribbon then transforms into the dining room table, finally
                                climbing back up toward the ceiling to house the lighting fixtures. All without any interruption.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project-content" id="project_3">
    <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
    <div>
        <div class="project-details">
            <div class="container">
                <div class="project-title">
                    <h5>Sahibzada Ajit Singh Nagar, India<span>.</span></h5>
                    <h2>House 2413</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-text">
                            <p><span>Type</span>Private house</p>
                            <p><span>Status</span>Built</p>
                            <p><span>Year</span>2014</p>
                            <p><span>Size</span>3000sqft</p>
                            <br>
                            <p>The project is located in Mohali, a satellite town of Chandigarh that is witnessing fast paced growth like most Indian cities.</p>
                            <p>The brief of the client, a builder was to design a house for selling that would be universal in character so that it is acceptable &
                                appreciated by all kinds of end users ranging from a high earning professional to a wealthy farmer.</p>
                            <p>The overall concept was devised as a free plan with overlapping spaces to allow flexibility. However, the movement was choreographed so as
                                to unfold the layers as one moves along the vertical axis of the house.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project-content" id="project_4">
    <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
    <div>
        <div class="project-details">
            <div class="container">
                <div class="project-title">
                    <h5>Elwood, Australia<span>.</span></h5>
                    <h2>The Elwood House</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-text">
                            <p><span>Type</span>Private house</p>
                            <p><span>Status</span>Built</p>
                            <p><span>Year</span>2012</p>
                            <p><span>Size</span>3000sqft</p>
                            <br>
                            <p>The Elwood House is a new residential dwelling with a separate garage and studio to the rear. The client’s brief was for a modern family
                                home that was interesting and exciting but not to the detriment of the comfort to the occupants and within a sensible budget.</p>
                            <p>“The client wanted a house that was clean, distinctive and enjoyable to use without feeling like they were an object in their own home
                                because it was of a contemporary design” says the architect, Patrick Jost.</p>
                            <p>Conceptually, the house is separated into two clearly defined elements to the upper and lower levels.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project-content" id="project_5">
    <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
    <div>
        <div class="project-details">
            <div class="container">
                <div class="project-title">
                    <h5>Washington, DC, United States<span>.</span></h5>
                    <h2>Brandywine House</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-text">
                            <p><span>Type</span>Private house</p>
                            <p><span>Status</span>Built</p>
                            <p><span>Year</span>2013</p>
                            <p><span>Size</span>4000sqft</p>
                            <br>
                            <p>Located within close proximity to Rock Creek Park, and with easy access to the shops and restaurants on Connecticut Avenue, this large lot
                                in Northwest Washington, DC presented a desirable opportunity for a young family to build a new house in this sought-after
                                neighborhood.</p>
                            <p>Designed to respect both the scale of neighboring houses and the rhythm of the streetscape, the project aligns with adjacent houses while
                                retaining the vast majority of mature trees and green space located between the street and the house. Materials composing the exterior,
                                which include stone, wood and stucco, evoke traditional materials found throughout the neighborhood. The house appears relatively solid
                                when viewed from the street with strategically placed windows insuring privacy to the street-facing spaces.</p>
                            <p>The “L” shaped house is organized around the outdoor living spaces and swimming pool, and is oriented towards the large, south facing rear
                                yard. </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="project-content" id="project_6">
    <span class="icon-close"><i class="pe-7s-close-circle"></i></span>
    <div>
        <div class="project-details">
            <div class="container">
                <div class="project-title">
                    <h5>New York City, NY, United States<span>.</span></h5>
                    <h2>ICRAVE Office</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-text">
                            <p><span>Type</span>Office</p>
                            <p><span>Status</span>Built</p>
                            <p><span>Year</span>2014</p>
                            <p><span>Size</span>8000sqft</p>
                            <br>
                            <p>After rapid growth, ICRAVE, a New York-based experiential branding and design firm, made the move to an 8,000-square-foot studio with the
                                intention of really making it their own. The space, designed by the ICRAVE team itself, goes beyond the notion of an open plan office — it
                                is designed specifically to foster ICRAVE’s immersive, collaborative culture. </p>
                            <p>The design process was a collective effort of the entire ICRAVE studio. Dream sessions were held to harvest ideas, where team members
                                examined different areas and said, “Now, what if we could have...,” giving everyone a chance to bring their ideas to the table. Among
                                those options, ICRAVE then crowdsourced the best solution for each micro-environment, and created a one-of-a-kind office. The result is a
                                truly collaborative office space that fosters employees' creativity, interaction, and inspiration. </p>
                            <p>The reception desk doubles as a DJ booth, and the entrance plays host to archery matches. The conference room features large monolithic
                                doors that swivel 360 degrees to open and close the space as needed. The kitchen and conference room are separated by a chalkboard that
                                can be raised to create bar seating next to the kitchen or lowered to be used in meetings.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-image">
                                    <img src="assets/img/rubik_background.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!--   core js files    -->
<script src=" {{ mix('/js/landing.js') }}"></script>

</html>
