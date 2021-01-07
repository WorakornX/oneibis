<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="/img/oneibis.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>One Tracking</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <link rel="stylesheet" href="{{ mix('css/landing.css') }}">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
          integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="{{ mix('css/landing-font.css') }}">
    <link rel="stylesheet" href="{{ mix('css/landing-icon.css') }}">
    <style>

        .navbar-logo {
            background-image: url('/img/oneibis.png');
            background-size: 70px;
            background-repeat: no-repeat;
            margin-top: 5px !important;
        }

        .c-active {
            cursor: pointer;
            width: 150px;
            height: 120px;
            background-color: #111111bb;
            border: 2px solid #c5a47e;
            border-radius: 10px;
            padding: 10px;
            color: #c5a47e;
        }

        .c-normal {
            cursor: pointer;
            width: 150px;
            height: 120px;
            background-color: #44444480;
            border: 2px solid #999999;
            border-radius: 10px;
            padding: 10px;
            color: #ffffff;
        }

        .c-normal:hover {
            background-color: #33333380;
        }

        .c-input {
            color: #222222;
            height: 75px;
            font-size: 20px;
            border: none;
            outline: none;
            border-radius: 10px;
            padding-left: 50px;
            width: 350px;
        }
    </style>
</head>

<body id="skrollr-body">

<div id="app">
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
                    One Tracking
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
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="wrapper">

        <div class="section section-header">
            <div class="full-image pattern-image">
                <img src="https://www.one-line.com/sites/g/files/lnzjqr776/files/inline-images/bg.jpg"/>
                {{--            <img src="/images/bg-1-2000x938 origin.jpg"/>--}}

                <div class="container">
                    <div class="content content-with-opacity">
                        <div style="font-size: 36px;">ONE Container Tracking</div>
                        <p style="font-size: 14px; margin-bottom: 40px;">TRACK YOUR ONE CONTAINER EASY</p>
                        <div style="display: flex; justify-content: center;">
                            <div style="margin: 10px;" class="card add-animation animation-1">
                                <div
                                    style="opacity: 0.5; width: 150px; height: 120px; background-color: #44444460; border: 2px solid #888888; border-radius: 10px; padding: 10px; color: #ffffff;">
                                    <i style="color: #ffffff; font-size: 58px;" class="oneibis icon-event-confirm"></i>
                                    <br> Booking
                                </div>
                            </div>
                            <div style="margin: 10px;" class="card add-animation animation-2">
                                <div :class="{'c-normal':select === 'bill', 'c-active': select === 'container'}" @click="select = 'container'">
                                    <i style="font-size: 58px;" class="oneibis icon-box-3d-50"></i>
                                    <br> Container
                                </div>
                            </div>
                            <div style="margin: 10px;" class="card add-animation animation-3">
                                <div :class="{'c-normal':select === 'container', 'c-active': select === 'bill'}" @click="select = 'bill'">
                                    <i style="font-size: 58px;" class="oneibis icon-cheque-3"></i>
                                    <br> Bill of Lading
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; justify-content: center; margin-top: 20px;">
                            <div style="padding: 15px; background-color: #00000080; border-radius: 15px;">

                                <input v-show="select === 'container'" name="container"
                                       style="text-transform: uppercase; border-bottom-right-radius: 0;border-top-right-radius: 0;"
                                       placeholder="Container Number" class="c-input">
                                <input v-show="select === 'bill'" name="container"
                                       style="text-transform: uppercase; border-bottom-right-radius: 0;border-top-right-radius: 0;"
                                       placeholder="Bill of Lading Number" class="c-input">
                                <select class="c-input"
                                        style="padding-left: 25px; margin-left: -5px; width: 230px;border-bottom-left-radius: 0;border-top-left-radius: 0; border-left: 1px solid #eeeeee;"
                                        name="cars" id="cars">
                                    <option value="one">ONE</option>
                                    <option value="volvo">APL</option>
                                    <option value="saab">CMA CGM</option>
                                    <option value="opel">COSCO</option>
                                    <option value="audi">Hamburg Sud</option>
                                    <option value="audi">Hamburg Sud</option>
                                    <option value="audi">Hapag-Lloyd</option>
                                    <option value="audi">HMM</option>
                                    <option value="audi">IRISL</option>
                                    <option value="audi">Maersk</option>
                                    <option value="audi">MSC</option>
                                    <option value="audi">OOCL</option>
                                    <option value="audi">PIL</option>
                                    <option value="audi">Safmarine</option>
                                    <option value="audi">Yang Ming</option>
                                    <option value="audi">ZIM</option>
                                </select>
                                <input v-show="select === 'container'" type="submit" name="submit" value="Track Container" class="c-input"
                                       style="margin-left: 10px; padding: 0; color: white; width: 200px; background-image: linear-gradient(45deg,rgba(0,0,0,0.77) 1%,#cc972e 91%);"
                                       id="submit-id-submit">
                                <input v-show="select === 'bill'" type="submit" name="submit" value="Track BL" class="c-input"
                                       style="margin-left: 10px; padding: 0; color: white; width: 200px; background-image: linear-gradient(45deg,rgba(0,0,0,0.77) 1%,#cc972e 91%);"
                                       id="submit-id-submit">
                            </div>
                        </div>

                    </div>
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
                        <p class="add-animation animation-1">One container tracking by OneIBIS allows you to track & trace One containers just by one click. In addition
                            to
                            container movements, the current location of the vessel will be shown on the world map automatically. </p>
                        <p class="add-animation animation-2">One tracking is now more convenient by the OneIBIS container tracking service. You can trace any container or
                            cargo with the One container number that is a unique number written on the body of the container. This is a reference for identifying and
                            tracking One containers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-we-made-3 section-with-hover" id="services">
        <img style="width: 100vw;" src="https://i.ytimg.com/vi/AMVR-KiBWYs/maxresdefault.jpg"/>
    </div>


    <div class="section section-we-do-2" id="advantage">
        <div class="container">
            <div class="row">
                <div class="title add-animation">
                    <h5 class="text-gray">Here's why our customers</h5>
                    <h2>love us</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">✻</div>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card add-animation animation-1">
                                <div class="icon">
                                    <i style="color: #c5a47e" class="oneibis icon-compass-3"></i>
                                </div>
                                <h3>Live location</h3>
                                <p>of your shipment and its vessel</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card add-animation animation-2">
                                <div class="icon">
                                    <i style="color: #c5a47e" class="landing-icon icon-time-machine"></i>
                                </div>
                                <h3>Vessel schedule</h3>
                                <p>with arrival departure time and status</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card add-animation animation-3">
                                <div class="icon">
                                    <i style="color: #c5a47e " class="oneibis icon-mobile-chat"></i>
                                </div>
                                <h3>Email notification</h3>
                                <p>on every new status update</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card add-animation animation-1">
                                <div class="icon">
                                    <i style="color: #c5a47e" class="oneibis icon-decision-process"></i>
                                </div>
                                <h3>Unified data</h3>
                                <p>across multiple sources</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card add-animation animation-2">
                                <div class="icon">
                                    <i style="color: #c5a47e" class="oneibis icon-touch-id"></i>
                                </div>
                                <h3>One place</h3>
                                <p>for all your shipments</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card add-animation animation-3">
                                <div class="icon">
                                    <i style="color: #c5a47e " class="oneibis icon-headphones-mic"></i>
                                </div>
                                <h3>Online support</h3>
                                <p>from our shipping experts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-numbers-2" id="numbers">
        <div class="parallax pattern-image-2">
            <img style="width: 100vw;" src="https://www.freightos.com/wp-content/uploads/2016/08/ship_air.jpg"/>
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
                                <p>As the 6th largest container carrier, ONE offers an expeditious and reliable network across the major trade lanes of the world.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-plain">
                        <h3>TEU fleet size</h3>
                        <div class="number" id="customersNo">
                            1,500,000+
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-plain">
                        <h3>Port calls</h3>
                        <div class="number" id="projectsNo">
                            200+
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-plain">
                        <h3>Weekly service loops</h3>
                        <div class="number" id="citiesNo">
                            130
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="section section-clients-1" id="clients1">--}}
    {{--        <div class="container">--}}
    {{--            <div class="text-area">--}}
    {{--                <div class="title add-animation">--}}
    {{--                    <h5 class="text-gray">Some of Our</h5>--}}
    {{--                    <h2>Beloved Customers</h2>--}}
    {{--                    <div class="separator-container">--}}
    {{--                        <div class="separator line-separator">✻</div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="list-logos">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-md-3">--}}
    {{--                        <div class="logo add-animation animation-1">--}}
    {{--                            <a name="#">--}}
    {{--                                <img alt="..." src="/img/svg/ptt.svg"/>--}}
    {{--                                <img alt="..." src="/img/svg/ptt-h.svg"/>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-3">--}}
    {{--                        <div class="logo add-animation animation-2">--}}
    {{--                            <a name="#">--}}
    {{--                                <img alt="..." src="/img/svg/ea.svg"/>--}}
    {{--                                <img alt="..." src="/img/svg/ea-h.svg"/>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-3">--}}
    {{--                        <div class="logo add-animation animation-3">--}}
    {{--                            <a name="#">--}}
    {{--                                <img alt="..." src="/img/svg/thaimc.svg"/>--}}
    {{--                                <img alt="..." src="/img/svg/thaimc-h.svg"/>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-3">--}}
    {{--                        <div class="logo add-animation animation-4">--}}
    {{--                            <a name="#">--}}
    {{--                                <img alt="..." src="/img/svg/ivict.svg"/>--}}
    {{--                                <img alt="..." src="/img/svg/ivict-h.svg"/>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-3">--}}
    {{--                        <div class="logo add-animation animation-1">--}}
    {{--                            <a name="#">--}}
    {{--                                <img alt="..." src="/img/svg/toshi.svg"/>--}}
    {{--                                <img alt="..." src="/img/svg/toshi-h.svg"/>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-3">--}}
    {{--                        <div class="logo add-animation animation-2">--}}
    {{--                            <a name="#">--}}
    {{--                                <img alt="..." src="/img/svg/samsung.svg"/>--}}
    {{--                                <img alt="..." src="/img/svg/samsung-h.svg"/>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-3">--}}
    {{--                        <div class="logo add-animation animation-3">--}}
    {{--                            <a name="#">--}}
    {{--                                <img alt="..." src="/img/svg/irpc.svg"/>--}}
    {{--                                <img alt="..." src="/img/svg/irpc-h.svg"/>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-3">--}}
    {{--                        <div class="logo add-animation animation-4">--}}
    {{--                            <a name="#">--}}
    {{--                                <img alt="..." src="/img/svg/bbf.svg"/>--}}
    {{--                                <img alt="..." src="/img/svg/bbf-h.svg"/>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


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
                                        520 - 3rd Avenue SW Suite 1900,
                                        Calgary, AB, Cananda
                                        T2P 0R3
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
                                        Email: info@oneibis.com
                                    </a>
                                </li>
                                <li>
                                    <a name="tel:+66942944299">
                                        Phone: +1 213 438 9919
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                © 2021 OCEAN NETWORK EXPRESS - All Rights Reserved
            </div>
        </div>
    </footer>
</div> <!-- end wrapper -->

</body>
<!--   core js files    -->
<script>
    new Vue({
        el: '#app',
        data: {
            select: 'container',
        },
        methods: {},
        created() {
        },
        mounted() {
            console.log('hi');
        },
    })
</script>
<script src=" {{ mix('/js/landing.js') }}"></script>

</html>
