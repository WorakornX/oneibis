<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="/eecl-logo-1-color-02.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>One Tracking</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <link rel="stylesheet" href="{{ mix('css/landing.css') }}">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
          integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('css/landing-font.css') }}">
    <link rel="stylesheet" href="{{ mix('css/landing-icon.css') }}">
    <style>
        a {
            text-decoration: none;
        }

        @media (max-width: 600px) {
            h3 {
                font-size: 20px;
            }

            h5 {
                font-size: 16px;
            }

            div {
                font-size: 12px;
            }

            button, span {
                font-size: 12px;
            }
        }

    </style>
</head>

<body id="skrollr-body">

<div id="app">

    <nav aria-label="breadcrumb" style="background-color: #e9ecef">
        <div class="container">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tracking</li>
            </ol>
        </div>
    </nav>

    <div class="container">

        <div class="row section">
            <div :class="[windowWidth > 1000 ? 'col-8' : 'col-12']">
                <div class="section">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card text-white mb-3 p-4"
                                 style="max-width: 1000px; max-height: 350px; border-radius: 10px; border: 1px solid white;background-image: linear-gradient(-45deg,#1488cc,#2b32b2);;">
                                <div class="card-body p-5">
                                    <h3 class="card-title text-center mb-5">Vessel departed ROTTERDAM on Dec. 17, 2020, 2:18 a.m.</h3>
                                    <div class="row">
                                        <div class="col" style="border-right: 1px solid white">
                                            <i class="tracking-icon icon-square-pin"></i>
                                            Route:
                                            <div>
                                                @{{ from }} -> @{{ to }}
                                            </div>
                                        </div>
                                        <div class="col">
                                            <i class="tracking-icon icon-opening-times"></i>
                                            Estimated time of arrival (ETA):
                                            <div>
                                                @{{ eta }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <i class="tracking-icon icon-loop"></i>
                                    Updated an hour ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="card border-light mb-3" style="max-width: 1000px; max-height: 350px; border-radius: 10px;">
                        <div class="card-header">Tracking details for Container: {{$tracking_number}}</div>
                        <div class="card-body row">
                            <div class="col">
                                <h5 class="card-title">Updated an hour ago </h5>
                            </div>
                            <div class="col text-right">

                                <button type="button" class="btn btn-outline-primary mr-2" style="width: 100px;">
                                    <a href="#down">
                                        <i class="tracking-icon icon-square-pin mt-1"></i>
                                        <span class="ml-1">LIVE MAP</span>
                                    </a>
                                </button>
                                <button type="button" class="btn btn-outline-primary" style="width: 100px;">
                                    <i class="tracking-icon icon-loop mt-1"></i>
                                    <span class="ml-1">UPDATE</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card border-light mb-3" style="max-width: 1000px; max-height: 350px; border-radius: 10px;">
                        <div class="card-body row">
                            <div class="col-9">
                                <h5 class="card-title">Let us notify you on every new updates of this shipments.</h5>
                            </div>
                            <div class="col text-right">
                                <button type="button" class="btn btn-primary"><span>SEND ME UPDATE</span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <h4>Container {{$tracking_number}} movements</h4>
                    <div class="card border-light mb-3" style="max-width: 1000px; border-radius: 10px;">
                        <table class="table table-striped">
                            <thead>
                            <tr class="text-primary">
                                <th scope="col">Date</th>
                                <th scope="col">Place</th>
                                <th scope="col">Event</th>
                                <th scope="col">Carrier</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Fri, January 15, 2021</th>
                                <td>JEBEL ALI</td>
                                <td>Empty container will be returned</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Fri, January 15, 2021</th>
                                <td>JEBEL ALI</td>
                                <td>Container will be delivered to consignee</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Thu, January 14, 2021</th>
                                <td>JEBEL ALI</td>
                                <td>Container will be discharged from the vessel</td>
                                <td>
                                    <i class="tracking-icon icon-boat-front mt-1"></i>
                                    HMM ALGECIRAS
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Fri, January 15, 2021</th>
                                <td>JEBEL ALI</td>
                                <td>Vessel will be under operation</td>
                                <td>
                                    <i class="tracking-icon icon-boat-front mt-1"></i>
                                    HMM ALGECIRAS
                                </td>
                            </tr>
                            <tr class="table-warning">
                                <th scope="row">Wed, December 16, 2020</th>
                                <td>ROTTERDAM</td>
                                <td>Vessel departure time from this port</td>
                                <td>
                                    <i class="tracking-icon icon-boat-front mt-1"></i>
                                    HMM ALGECIRAS
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Tue, December 15, 2020</th>
                                <td>ROTTERDAM</td>
                                <td>Container was loaded on the vessel</td>
                                <td>
                                    <i class="tracking-icon icon-boat-front mt-1"></i>
                                    HMM ALGECIRAS
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Tue, December 08, 2020</th>
                                <td>ROTTERDAM</td>
                                <td>Container was located at this place</td>
                                <td>
                                    <i class="tracking-icon icon-boat-front mt-1"></i>
                                    HMM ALGECIRAS
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Mon, December 07, 2020</th>
                                <td>ANTWERP</td>
                                <td>Empty container was released to shipper for stuffing</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="section" id="down">
                    <div class="card border-light mb-3" style="max-width: 1000px; max-height: 350px; border-radius: 10px;">
                        <iframe
                            :src="'https://maps.google.com/maps?q=' + lat + ',' + lng + '&hl=es&z=14&amp;output=embed'"
                            {{--                src="https://maps.google.com/maps?q='+YOUR_LAT+','+YOUR_LON+'&hl=es&z=14&amp;output=embed"--}}
                            width="auto" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="col ml-5" v-if="windowWidth > 1000">
                <div class="section">
                    <div style="background-color: #fdebc8; border-radius: 10px;">
                        <div class="p-3">
                            <div class="justify-content-center">
                                <img src="https://www.shipup.net/static/images/notification-subscription-banner-illustration.svg" alt="pic">
                            </div>
                            <div class="p-2 mt-3">
                                <h4> Automatically update anyone who is awaiting for delivery of this shipments</h4>
                            </div>
                            <div>
                                <i class="tracking-icon icon-handshake " style="font-size: 20px;"></i>
                                <span class="ml-1">Ensure Customer Satisfaction</span>
                            </div>
                            <div>
                                <i class="tracking-icon icon-money-time" style="font-size: 20px;"></i>
                                <span class="ml-1">Save Your Time</span>
                            </div>
                            <div class="p-2 mt-3">
                                <span> Shipup notifies you and anyone you add automatically any updae of your shipment</span>
                            </div>
                        </div>
                        <div class="p-3 text-center" style="cursor: pointer; background-color: #fbd38d">
                            TRY IT FOR FREE
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
</div>

</body>
<!--   core js files    -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>

    new Vue({
        el: '#app',

        data: {
            lat: 13.6747792,
            lng: 100.5325663,
            from: 'Rotterdam',
            to: 'Jebel Ali',
            eta: 'Thu, Jan. 14, 2021',
            windowWidth: window.innerWidth,
        },

        watch: {

        },


        created() {
        },

        mounted() {
            this.$nextTick(() => {
                window.addEventListener('resize', this.onResize);
            })
        },

        beforeDestroy() {
            window.removeEventListener('resize', this.onResize);
        },

        methods: {
            onResize() {
                this.windowWidth = window.innerWidth
            }
        },
    });
</script>

</html>
