{{-- @php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link == "https://www.granars.com/" || $actual_link == "https://granars.com/" || $actual_link == "granars.com/"){
    echo $actual_link;
//     header("Location: http://example.com/myOtherPage.php");
// die();
}
    @endphp --}}

    {{-- Redirect to domain .com if current page url is equal to granars.com --}}
    @if(URL::to('/') === 'https://www.granars.com' || URL::to('/') === 'https://granars.com' || URL::to('/') === 'granars.com/' )
    <script>
        window.location.replace("http://www.domain.com");
        </script>
@endif

<!DOCTYPE html>

<html xmlns:fb="//www.facebook.com/2008/fbml" xmlns:og="//opengraphprotocol.org/schema/" lang="en" xml:lang="en"  class="no-touch no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <style id="targetable-styles">

        .targetable, .mboxDefault, .targetable.hidden { visibility:hidden; }
        .targetable { position:relative; }
        .targetable.spinner > :not(.spinner-box) { opacity: 0 !important; }
        .targetable.spinner > div.spinner-box { position: absolute; top: 50%; left: 50%;transform: translateX(-50%) translateY(-50%); }
        div.spinner-box > div.spinner-wheel { position:relative; visibility:visible; width:4em; height:4em; border-radius:100%; border:.2em solid #cccccc; border-left-color:#049fd9; -webkit-animation: load 1.1s infinite linear; animation: load 1.1s infinite linear; } @-webkit-keyframes load{ 0%{ -ms-transform: rotate(7deg); -webkit-transform: rotate(7deg); transform: rotate(7deg); } 100%{ -ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg); } } @keyframes load{ 0%{ -ms-transform: rotate(7deg); -webkit-transform: rotate(7deg); transform: rotate(7deg); } 100%{ -ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg); } }
        .targetable.obscured { visibility:visible; opacity:.1; transition: opacity 2s ease-in-out; -moz-transition: opacity 2s ease-in-out; -webkit-transition: opacity 2s ease-in-out; filter: blur(5px); -webkit-filter: blur(5px); -moz-filter: blur(5px); -o-filter: blur(5px); -ms-filter: blur(5px); filter: url('data:image/svg+xml;utf9,<svg%20version=\"1.1\"%20xmlns=\"http://www.w3.org/2000/svg\"><filter%20id=\"blur\"><feGaussianBlur%20stdDeviation=\"3\"%20/></filter></svg>#blur'); filter: progid: DXImageTransform.Microsoft.Blur(PixelRadius='5'); -webkit-transition: 2s -webkit-filter linear; -moz-transition: 2s -moz-filter linear; -o-transition: 2s -o-filter linear; }

    </style>

    <!-- Lumenave STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-2.css') }}">
    <!-- END Lumenave STYLE SHEET -->

    <link rel="shortcut icon" href="home/img/lumenave_favicon.png">

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"  />
    <meta name="description" content="lUMENAVE is a leading OEM worldwide representative in IT, networking, and cybersecurity solutions. We help companies of all sizes transform how people connect, communicate, and collaborate." />
    <meta name="title" content="Lumenave International"  />

    <meta name="ioContentSource" content="WEM"  />
    <meta name="concept" content="Welcome to Lumenave"  />
    <meta name="docType" content="lumenave.com Default Home"  />
    <meta name="iaPath" content="lumenave.com#Home Pages"  />
    <meta name="contentType" content="lumenave.com#US#preSales"  />
    <meta name="locale" content="US"  />
    <meta name="language" content="en"  />
    <meta name="country" content="NGN"  />

    <meta name="accessLevel" content="Customer"  />
    <meta name="accessLevel" content="Guest"  />
    <meta name="accessLevel" content="Partner"  />
    <meta name="entitlementExpression" content="contains( &quot;0,1,2,3,4,7&quot; , $profileField[3] )"  />

    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="cleartype" content="on">

    <link rel="stylesheet" href="css/sans.min.css" type="text/css">

    <!-- .Search META tags -->
    <meta http-equiv="content-language" content="en-us">

    <!--[if (IEMobile 7) | (lt IE 9)]>
    <link rel="stylesheet" type="text/css" href="home/etc/designs/cdc/fw/snapshots/css/responsive-ie-1.30v.css">
    <![endif]-->
    <!--[if (!IE) | (gt IE 8)]><!-->
    <link rel="stylesheet" href="css/homepage.min.css" type="text/css">
    <!--<![endif]-->

    <link rel="stylesheet" href="home/menu.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <link rel="stylesheet" href="menu/css/style.css"> <!-- Resource style -->
    <script src="menu/js/modernizr.js"></script> <!-- Modernizr -->

    <!--START MENU SCRIPT-->
    <script type="text/javascript" src="home/etc/designs/cdc/clientlibs/responsive/js/foundation.min.js"></script>
    <!--END MENU SCRIPT-->

    <script type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/css/animations.min.css"></script>
</head>

<body id="wcq" class="fw-res cdc-homepage &nbsp; cdc-transform">

<header id="fwt-masthead" class="no-nav-wc" data-owner="ID">
    <div id="fwt-banner">

        <div id="fwt-cornerstone">
            <button class="cd-dropdown-trigger" id="fwt-nav-button" aria-labelledby="fwt-nav-button-label" aria-haspopup="true" aria-expanded="false">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="nav-label active" id="fwt-nav-button-label">MENU</div>
                <div class="nav-label" id="fwt-nav-button-close-label">CLOSE</div>
            </button>

            <div class="cd-dropdown-wrapper">
                <nav class="cd-dropdown">

                    <ul class="cd-dropdown-content">
                        <li><a href="{{ url('/') }}">Home</a></li>

                        <li class="has-children">
                            <a href="{{ url('solutions') }}">Solutions</a>

                            <ul class="cd-secondary-dropdown is-hidden">
                                <li class="go-back"><a href="{{ url('solutions') }}">Solutions</a></li>
                                <li class="see-all"><a href="{{ url('solutions') }}">More Solutions</a></li>

                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('solutions/information-security') }}">Information Security</a>
                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('solutions/information-security') }}">Information Security</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/cloud-security') }}">Cloud Security</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/data-protection') }}">Data Protection</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/endpoint-security') }}">Endpoint Security</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/network-security') }}">Network Security</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('solutions/information-availability') }}">Information Availability</a>

                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('solutions/information-availability') }}">Information Availability</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/backup-and-recovery') }}">Backup and Recovery</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/business-continuity') }}">Business Continuity</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/information-governance') }}">Information Governance</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('solutions/information-management') }}">Information Management</a>

                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('solutions/information-management') }}">Information Management</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/security-management') }}">Security Management</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/enterprise-management') }}">Enterprise Management</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('solutions/information-systems') }}">Information Systems</a>
                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('solutions/information-systems') }}">Information Systems</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/infrastructure-solutions') }}">Infrastructure Solutions</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/networking-solutions') }}">Networking Solutions</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('solutions/enterprise-system-solutions') }}">Enterprise System Solutions</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> <!-- .cd-secondary-dropdown -->
                        </li> <!-- .has-children -->

                        <li class="has-children">
                            <a href="{{ url('services') }}">Services</a>

                            <ul class="cd-secondary-dropdown is-hidden">
                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('services/professional-services') }}">Professional Services</a>
                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('services/professional-services') }}">Professional Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/advisory-services') }}">Advisory Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/architectural-design-services') }}">Architectural Design Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/implementation-services') }}">Implementation Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/optimization-services') }}">Optimization Services</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('services/outsourcing-and-managed') }}">Outsourcing and Managed</a>
                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('services/outsourcing-and-managed') }}">Outsourcing and Managed</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/managed-outsourcing-services') }}">Managed Outsourcing Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/managed-outsourcing-services') }}">Managed Security Services</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('services/it-financing') }}">IT Financing</a>
                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('services/it-financing') }}">IT Financing</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/lumenave-finance-and-capital') }}">Lumenave Finance and Capital</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/lumenave-insure') }}">Lumenave Insure</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('services/bandwidth-provisioning') }}">Bandwidth Provisioning</a>
                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('services/bandwidth-provisioning') }}">Bandwidth Provisioning</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/private-network-connection') }}">Private Network Connection</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/mobile-connectivity-services') }}">Mobile Connectivity Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services/internet-services') }}">Internet Services</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="{{ url('support') }}">Support</a>

                            <ul class="cd-secondary-dropdown is-hidden">
                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('support') }}">Support</a>
                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('support') }}">Support</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('support#support-options') }}">Support Options</a></li>
                                        <li>
                                            <a href="{{ url('support#standard-support') }}">Standard Support</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('support#classic-support') }}">Classic Support</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('support#premium-support') }}">Premium Support</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-children">
                                    <a href="">Featured</a>
                                    <ul class="is-hidden">
                                        <li>
                                            <a href="{{ url('support/support-centre') }}">Support Centre</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('support/supported-solutions') }}">Supported Solutions</a>
                                        </li>

                                        <li>
                                            <a href="https://www.lumenave.com/platfm/">Shop Online</a>
                                        </li>

                                        <li>
                                            <a href="https://www.lumenave.com/platfm/blog">Blog</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('contact') }}">Contact us</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="{{ url('services') }}">Training</a>

                            <ul class="cd-secondary-dropdown is-hidden">
                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('training') }}">Training</a>
                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('training') }}">Training</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('training#certification-training') }}">Certification Training</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('training#customized-training') }}">Customized Training</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('training#training-formats') }}">Training Formats</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="has-children">
                            <a href="{{ url('products') }}">Products</a>

                            <ul class="cd-secondary-dropdown is-hidden">
                                <li class="has-children">
                                    <a class="level2-a" href="{{ url('products') }}">Products</a>
                                    <ul class="is-hidden">
                                        <li class="level2-li">
                                            <a href="{{ url('products') }}">Products</a></li>
                                        <li>
                                            <a href="{{ url('products/servers') }}">Servers</a></li>

                                        <li>
                                            <a href="{{ url('products/desktops') }}">Desktops</a></li>

                                        <li>
                                            <a href="{{ url('products/storage') }}">Storage</a></li>

                                        <li>
                                            <a href="{{ url('products/peripherals') }}">Peripherals</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul> <!-- .cd-dropdown-content -->

                </nav> <!-- .cd-dropdown -->
            </div> <!-- .cd-dropdown-wrapper -->
        </div>

        <!--Logo-->
        <a id="fwt-logo" href="{{ url('/') }}" aria-labelledby="fwt-logo-title">
            <img src='{{ asset('home/lumenave_logo.png') }}' width="200"/>
        </a>

        <div id="fwt-utilities">
            <button  tabindex="1" aria-label="Search" aria-haspopup="true" aria-expanded="false" title="Search">
                <a href="#"> <i class="fa fa-search fa-top"></i> </a>
            </button>

            <button  aria-label="Shopping" aria-haspopup="true" aria-expanded="false" title="Shopping">
                <a href="https://www.lumenave.com/platfm/"> <i class="fa fa-shopping-cart fa-top"></i> </a>
            </button>

            <button aria-label="Blog" aria-haspopup="true" aria-expanded="false" title="Blog">
                <a href="https://www.lumenave.com/platfm/blog/"> <i class="fa fa-comment fa-top"></i> </a>
            </button>

            <div id="fwt-masthead-overlay-arrow"></div>
        </div>
    </div>

    <div id="fwt-masthead-overlay">
        <!--Space for menu-->
    </div>

</header>
<!-- ends: masthead -->

<div id="fw-content" class="container grid">
    <script type="text/javascript" src="home/etc/designs/cdc/dmr/libs/u.min.js"></script>
    <script type="text/javascript" src="home/etc/designs/cdc/dmr/libs/metrics.min.js"></script>
    <!-- DM:components/html/htmlblob:V1.2.3 -->
    <!-- contents found: dmh-photo-array -->
    <!-- contents found: dmh-photo-array -->
    <!-- Styles-->
    <link rel="stylesheet" href="home/c/dam/assets/dmr/photo-array/dmh-photo-array.css">

    <!-- Scripts -->
    <script src="home/c/dam/assets/dmr/photo-array/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="home/c/dam/assets/dmr/photo-array/dmh-photo-array.js"></script>

    <!-- DM:components/html/htmlblob:V1.2.3 -->
    <link rel="stylesheet" type="text/css" href="home/c/dam/assets/dmr/homepage/overrides.css">
    <div class="row full blowout home-row-announcement" data-owner="ID">
        <div class="col full">
            <div id="lightbox1" data-ltbox-type="video" data-ltbox-title="" data-ltbox-description="" data-ltbox-style="chromeless" data-ltbox-content="6014517578001" data-ltbox-component-id="lightbox1" data-ltbox-player-type-id="NJgI8K0ie" data-ltbox-account-id="1384193102001" data-ltbox-interactivity="enable" data-ltbox-interactivity-override-id="">
            </div>
            <div id="lightbox2" data-ltbox-type="video" data-ltbox-title="" data-ltbox-description="" data-ltbox-style="chromeless" data-ltbox-content="6021458848001" data-ltbox-component-id="lightbox2" data-ltbox-player-type-id="NJgI8K0ie" data-ltbox-account-id="1384193102001" data-ltbox-interactivity="enable" data-ltbox-interactivity-override-id="">
            </div>
            <div id="lightbox3" data-ltbox-type="video" data-ltbox-title="" data-ltbox-description="" data-ltbox-style="chromeless" data-ltbox-content="5995486954001" data-ltbox-component-id="lightbox3" data-ltbox-player-type-id="NJgI8K0ie" data-ltbox-account-id="1384193102001" data-ltbox-interactivity="enable" data-ltbox-interactivity-override-id="">
            </div>
            <div id="lightbox4" data-ltbox-type="video" data-ltbox-title="" data-ltbox-description="" data-ltbox-style="chromeless" data-ltbox-content="5770935750001" data-ltbox-component-id="lightbox4" data-ltbox-player-type-id="NJgI8K0ie" data-ltbox-account-id="1384193102001" data-ltbox-interactivity="enable" data-ltbox-interactivity-override-id="">
            </div>
            <div id="lightbox5" data-ltbox-type="video" data-ltbox-title="" data-ltbox-description="" data-ltbox-style="normal" data-ltbox-content="5481467685001" data-ltbox-component-id="lightbox5" data-ltbox-player-type-id="NJgI8K0ie" data-ltbox-account-id="1384193102001" data-ltbox-interactivity="enable" data-ltbox-interactivity-override-id="">
            </div>
        </div>
    </div>

    <!-- CONTEXT BANNER -->
    <!-- Typography CSS
    ============START SUBMENU========================
    -->
    <link rel="stylesheet" href="home/c/dam/assets/dmrb/base/dmrb-base.css" type="text/css">
    <!--============END SUBMENU======================== -->

    <!--Button CSS-->
    <link rel="stylesheet" href="home/c/dam/assets/dmrb/button/dmcb-button.css" type="text/css">
    <!-- Blade CSS-->
    <link rel="stylesheet" href="home/etc/designs/cdc/dmr/blade/clientLib.min.css" type="text/css">
    <link rel="stylesheet" href="home/c/dam/assets/dmrb/blade/dmc-blade-overrides.css" type="text/css">
    <!-- Context Banner CSS-->
    <link rel="stylesheet" href="home/c/dam/assets/dmrb/context-banner/dmcb-contextbanner.css" type="text/css">
    <!-- Context Banner JS-->
    <script type="text/javascript" src="home/c/dam/assets/dmrb/context-banner/dmcb-contextbanner.js"></script>
    <!-- Start of Context Banner Component -->


    <section id="section-context-banner" class="targetable hidden">
        <div class="row full blowout dmc-blade brandi context-banner header-center cta-center pal-3" style="background-color:#fe0000;" data-config-metrics-group="Blade">
            <div class="col full">
                <div class="row full">
                    <div class="col full">
                        <div class="dmrb dmcb-context-banner dark-1">
                            <!-- Start of Image section -->

                            <!-- Start of content -->
                            <div class="banner-content">
                                <p style="color: #ffff">Think LUMENAVE, Think Information</p>
                                <a class="dmcb-button brandi pal-5" href="{{ url('solutions/information-availability') }}"  style="color: #ffff; border-color: #fff">Availability</a>

                                <a class="dmcb-button brandi pal-5" href="{{ url('solutions/information-security') }}"  style="color: #ffff; border-color: #fff">Security</a>

                                <a class="dmcb-button brandi pal-5" href="{{ url('solutions/information-management') }}"  style="color: #ffff; border-color: #fff">Management</a>
                            </div>
                            <!-- End of content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Context Banner Component -->
    </section>


    <link rel="stylesheet" href="home/etc/designs/cdc/dmr/section/clientLib.min.css" type="text/css">

    <!-- renderComponentVersion(component) -->
    <section class="dmc-section targetable spinner" id="section-video-blade9999999" data-config-metrics-group="Section" data-config-metrics-title="section-video-blade9999999">

    </section>
    <!-- DM:components/html/htmlblob:V1.2.3 -->
    <!-- geo-routers pilot -->
    <section id="geo-router-pilot">
    </section>

    <script>
        function openWWS(){
            var masthead = cdc.wcUtil.getObj('masthead');
            if (cdc.wcUtil.getMethod('cdc-masthead', 'getActiveElement')().length === 0) {
                cdc.wcUtil.getMethod('cdc-masthead', 'mastheadClickHandler')(masthead.querySelector('#fwt-language-button'), masthead);
            }
        }
    </script>

    <div class="row full blowout pri-marquee no-padding blade-marq3" data-owner="ID">
        <div class="col full">
            <!-- renderComponentVersion(component) -->
            <section class="dmc-section targetable spinner" id="section-anchor-marquee" data-config-metrics-group="Section" data-config-metrics-title="section-anchor-marquee">
                <link rel="stylesheet" href="home/etc/designs/cdc/dmr/libs/contentclip.min.css" type="text/css">
                <link rel="stylesheet" href="home/etc/designs/cdc/dmr/bundles/dmr.min.css" type="text/css">
                <script type="text/javascript" src="home/etc/designs/cdc/dmr/libs/utils/dynamic-video-init.min.js"></script>
                <script type="text/javascript" src="home/etc/designs/cdc/dmr/libs/contentclip.min.js"></script>
                <script type="text/javascript" src="home/etc/designs/cdc/dmr/bundles/dmr.min.js"></script>
                <!-- DM:components/html/htmlblob:V1.2.3 -->
                <div class="spinner-box">
                    <div class="spinner-wheel"></div>
                </div>

                <style type="text/css">
                    .content p {
                        margin-bottom: 15px;
                    }
                </style>
                <!-- DM IMG -->
                <script src="home/etc/designs/cdc/dmr/libs/dmimg.min.js"></script>
                <!-- Marquee CSS -->
                <link rel="stylesheet" href="home/c/dam/assets/dmr/three-marquee/dmh-marq3_min.css"/>
                <!-- Marquee JS -->
                <script src="home/c/dam/assets/dmr/three-marquee/dmh-marq3_min.js"></script>
                <div class="dmh-marq3" data-config-metrics-group="3 Marquee Prototype v1">
                    <section class="panels">

                        <!-- 1 -->
                        <div class="panel" data-config-metrics-title="Panel 1">
                            <div class="bg dm-img" alt="">
                                <picture>
                                    <source srcset="images/home/EndPoint-protection.jpg" media="(min-width:37.5em)">
                                    <source srcset="images/home/EndPoint-protection.jpg">
                                </picture>
                                <noscript><img src="images/home/EndPoint-protection.jpg"></noscript>
                            </div>
                            <div class="preview">
                                <h2>Proactive EndPoint Protection</h2>
                            </div>
                            <div class="content">
                                <h2>Proactive EndPoint Protection</h2>
                                <p>Defend Against Known and Unknown  Malicious Wares-Ransomwares,Viruses, Worms, Trojans,etc.
                                </p>
                                <div class="ctas">
                                    <a class="dmc-button atlantic pal-1" href="{{ url('solutions/endpoint-security') }}" data-config-metrics-item="Messaging And Collaboration Procedures">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- /1 -->

                        <!-- 2 -->
                        <div class="panel" data-config-metrics-title="Panel 2">
                            <div class="bg dm-img" alt="">
                                <picture>
                                    <source srcset="images/home/sensitive.png" media="(min-width:37.5em)">
                                    <source srcset="images/home/sensitive.png">
                                </picture>
                                <noscript><img src="images/home/sensitive.png"></noscript>
                            </div>
                            <div class="preview">
                                <h2>Sensitive Information:</h2>
                            </div>
                            <div class="content">
                                <h2>Sensitive Information:</h2>
                                <p>Prevent Loss from Exit Data Channels:- <br>Email, Web, Peer2Peer, Removable Media, Print, Cloud, etc</p>
                                <div class="ctas">
                                    <a class="dmc-button atlantic pal-1" href="{{ url('solutions/data-protection') }}" >Learn more</a>
                                </div>
                            </div>
                        </div>
                        <!-- /2 -->

                        <!-- 3 -->
                        <div class="panel" data-config-metrics-title="Panel 3">
                            <div class="bg dm-img" alt="">
                                <picture>
                                    <source srcset="images/home/imgt.jpg" media="(min-width:37.5em)">
                                    <source srcset="images/home/imgt.jpg">
                                </picture>
                                <noscript><img src="images/home/imgt.jpg"></noscript>
                            </div>
                            <div class="preview">
                                <h2>Enterprise Management</h2>
                            </div>
                            <div class="content">
                                <h2>Enterprise Management</h2>
                                <p>
                                    Improve applications and services uptime through proper monitoring of applications processes, services, and resources.
                                </p>
                                <div class="ctas">
                                    <a class="dmc-button atlantic pal-1" href="{{ url('solutions/enterprise-management') }}" data-config-metrics-item="Data Classification">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <!-- /3 -->

                    </section>
                </div>
            </section>
            <!-- Action Bar -->
        </div>
    </div>

    <div class="row full blowout home-row-quicktasks pal-2" data-owner="ID">
        <div class="col full">
            <div class="row full" data-owner="ID">
                <div class="col full">

                    <div class="dmc-home-quicktasks var-3 pal-2">
                        <ul>
                            <li>
                               <i class="fa fa-tasks fa-mid"></i>
                                <a href="https://www.lumenave.com/aboutus.html" data-config-metrics-group="quick_tasks" data-config-metrics-title="prospects" class="content">ICT Guides</a>
                            </li>
                            <li>
                                <i class="fa fa-cloud-upload fa-mid"></i>
                                <a href="{{ url('solutions/cloud-security') }}" data-config-metrics-group="quick_tasks" data-config-metrics-title="prospects" class="content">Cloud Security</a>
                            </li>
                            <li>
                                <i class="fa fa-database fa-mid"></i>
                                <a href="{{ url('solutions/backup-and-recovery') }}" data-config-metrics-group="quick_tasks" data-config-metrics-title="prospects" class="content">Backup and Recovery</a>
                            </li>
                            <li>
                                <i class="fa fa-shopping-cart fa-mid"></i>
                                <a href="https://www.lumenave.com/platfm" data-config-metrics-group="quick_tasks" data-config-metrics-title="prospects" class="content">Shop and download</a>
                            </li>
                            <li>
                                <i class="fa fa-comments fa-mid"></i>
                                <a href="https://www.lumenave.com/platfm/blog" data-config-metrics-group="quick_tasks" data-config-metrics-title="prospects" class="content">Blog</a>
                            </li>
                            <li>
                                <i class="fa fa-support fa-mid"></i>
                                <a href="{{ url('support') }}" data-config-metrics-group="quick_tasks" data-config-metrics-title="prospects" class="content">Support</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="etc/designs/cdc/dmr/blade/clientLib.min.css" type="text/css">
    <noscript>
        <style>
            .dmr.clip-content .clip, .dmr.clip-content .clip-wrap {
                overflow:visible;
                height: auto;
            }
        </style>
    </noscript>

    <div style="margin: 25px 0;" class="row full blowout dmc-blade  header-center description-center cta-center   Do not override" data-config-metrics-group="Blade" data-config-metrics-title="Consider the LUMENAVE advantage today">
        <div class="col full">
            <div class="row full dmr">
                <div class="col full">
                    <div class="blade-header">
                        <h1>Take the LUMENAVE Advantage Today</h1>
                    </div>
                    <div class="blade-description">

                    </div>
                </div>
            </div>
            <div class="row full ">
                <div class="col full">
                </div>
            </div>
            <div class="row full dmr">
                <div class="col full">
                </div>
            </div>
        </div>
    </div>

    <section class="dmc-section" id="" data-config-metrics-group="Section">
    </section>
    <div class="row full" data-owner="ID">
        <div class="col full">
            <link rel="stylesheet" href="home/etc/designs/cdc/dmr/mosaic/clientLib.min.css" type="text/css">
            <script type="text/javascript" src="home/etc/designs/cdc/dmr/mosaic/clientLib.min.js"></script>

            <div class="dmc-mosaic-row full" data-config-metrics-group="Mosaic Row">
                <div class="mosaic-col full" data-config-metrics-title="Full Column">

                    <section class="dmc-section targetable spinner" id="mosaic-hero-1" data-config-metrics-group="Section" data-config-metrics-title="mosaic-hero-1">

                        <div class="dmc-mosaic-tile-hero base-blowout var-2 pal-2">
                            <a class="dmc-mosaic-tile-anchor show-desc" href="{{ url('solutions/network-security') }}" data-config-metrics-item="Improve Information Availability">
                                <div class="mosaic-image">

                                    <link rel="stylesheet" href="home/etc/designs/cdc/dmr/libs/dmimg.min.css"><script src="home/etc/designs/cdc/dmr/libs/nmsp.min.js"></script><script src="home/etc/designs/cdc/dmr/libs/dmimg.min.js" async></script>
                                    <!--DM Image-->
                                    <div class="dm-img" src="images/home/network_security.png" alt="Improve Information Availability" title="Improve Information Availability">
                                        <noscript class="dmimg-ns"><img src="images/home/network_security.png" alt="Improve Information Availability" title="Improve Information Availability"></noscript>
                                    </div>
                                </div>
                                <div class="mosaic-content">
                                    <p class="eyebrow-text">Availability</p>
                                    <div class="inner-content">
                                        <h3>Improve Information Availability</h3>
                                        <p>Reduce Backup Cost, Time, Risk, Complexity with Guarantee Service Reliability and Business Continuity in Challenging IT Environment.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </section>
                </div>
            </div>
            <!-- Mosaic full row end -->

            <!--Mosaic Wide-Narrow row start-->
            <div class="dmc-mosaic-row wide-narrow" data-config-metrics-group="Mosaic Row">
                <div class="mosaic-col wide" data-config-metrics-title="Wide Column">

                    <section class="dmc-section targetable hidden" id="mosaic-twothird-med-1" data-config-metrics-group="Section" data-config-metrics-title="mosaic-twothird-med-1">
                        <div class="dmc-mosaic-tile-wide base-blowout focal-C full">
                            <a class="dmc-mosaic-tile-anchor" href="{{ url('solutions') }}">
                                <div class="mosaic-image">
                                    <div class="dm-img" src="images/home/datasecurity.jpg" alt="Executive Training" title="Executive Training">
                                        <noscript class="dmimg-ns"><img src="images/home/datasecurity.jpg" alt="From 5G to Wi-Fi 6" title="Executive Training"></noscript>
                                    </div>
                                </div>
                                <span class="gradient"></span>
                                <div class="mosaic-content">
                                    <p class="eyebrow-text">Solutions</p>
                                    <div class="content-wrapper">
                                        <h3>Trusted, Tested, and Industry-Based Solutions </h3>
                                        <p>
                                            We Tailor our Solutions to meet Changing Business Objectives
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>

                <div class="mosaic-col narrow" data-config-metrics-title="Narrow Column">
                    <section class="dmc-section" id="mosaic-onethird-med-1" data-config-metrics-group="Section" data-config-metrics-title="mosaic-onethird-med-1">
                        <div class="dmc-mosaic-tile-narrow base-blowout var-2 focal-C">
                            <a class="mosaic-tile-anchor" href="{{ url('services/professional-services') }}" data-config-metrics-item="Advisory And Implementation Services">
                                <div class="mosaic-image">
                                    <div class="dm-img" src="images/home/informationmanagement1.jpg" alt="Advisory And Implementation Services" title="Advisory And Implementation Services">
                                        <noscript class="dmimg-ns"><img src="images/home/informationmanagement1.jpg" alt="Advisory And Implementation Services" title="Advisory And Implementation Services"></noscript>
                                    </div>
                                </div>
                                <span class="gradient"></span>
                                <div class="mosaic-content">
                                    <p class="eyebrow-text">Services</p>
                                    <div class="content-wrapper">
                                        <h3>Professional Services</h3>
                                        <p>We help your organization deliver IT projects that meet expected business objectives.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
            <!--Mosaic Wide-Narrow row end-->

            <!--Mosaic Thirds row start-->
            <div class="dmc-mosaic-row thirds" data-config-metrics-group="Mosaic Row">
                <div class="mosaic-col third" data-config-metrics-title="Col-1">
                    <section class="dmc-section" id="mosaic-onethird-small-1" data-config-metrics-group="Section" data-config-metrics-title="mosaic-onethird-small-1">
                        <div class="dmc-mosaic-tile-narrow base-blowout var-3">
                            <a class="mosaic-tile-anchor" href="{{ url('training') }}" data-config-metrics-item="Private Network Connections? ">
                                <div class="mosaic-image">
                                    <div class="dm-img" src="images/home/training.png" alt="Private Network Connections? " title="Private Network Connections? ">
                                        <noscript class="dmimg-ns"><img src="images/home/training.png" alt="Private Network Connections? " title="Private Network Connections? "></noscript>
                                    </div>
                                </div>
                                <span class="gradient"></span>
                                <div class="mosaic-content">
                                    <p class="eyebrow-text">Training</p>
                                    <div class="content-wrapper">
                                        <h3>Accelerate your IT Career</h3>
                                        <p>World class training delivered by industry experts.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>

                <div class="mosaic-col third" data-config-metrics-title="Col-2">
                    <section class="dmc-section" id="mosaic-onethird-small-2" data-config-metrics-group="Section" data-config-metrics-title="mosaic-onethird-small-2">
                        <div class="dmc-mosaic-tile-narrow base-blowout var-3">
                            <a class="mosaic-tile-anchor" href="{{ url('services/it-financing') }}" data-config-metrics-item="IT Finance ">
                                <div class="mosaic-image">
                                    <div class="dm-img" src="images/services/it-financing.jpg" alt="IT Finance " title="IT Finance ">
                                        <noscript class="dmimg-ns"><img src="images/services/it-financing.jpg" alt="IT Finance " title="IT Finance "></noscript>
                                    </div>
                                </div>
                                <span class="gradient"></span>
                                <div class="mosaic-content">
                                    <p class="eyebrow-text">IT Finance</p>
                                    <div class="content-wrapper">
                                        <h3>IT Finance </h3>
                                        <p>Let your Organization's Technology Maximize Cashflow and Profitability</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>

                <div class="mosaic-col third" data-config-metrics-title="Col-3">
                    <section class="dmc-section" id="mosaic-onethird-small-3" data-config-metrics-group="Section" data-config-metrics-title="mosaic-onethird-small-3">
                        <div class="dmc-mosaic-tile-narrow base-blowout var-3">
                            <a class="mosaic-tile-anchor" href="{{ url('services/outsourcing-and-managed') }}" data-config-metrics-item="OUTSOURCING AND MANAGED SERVICES">
                                <div class="mosaic-image">
                                    <div class="dm-img" src="images/services/outsource-and-managed.jpg" alt="OUTSOURCING AND MANAGED SERVICES" title="OUTSOURCING AND MANAGED SERVICES">
                                        <noscript class="dmimg-ns"><img src="images/services/outsource-and-managed.jpg" alt="OUTSOURCING AND MANAGED SERVICES" title="OUTSOURCING AND MANAGED SERVICES"></noscript>
                                    </div>
                                </div>
                                <span class="gradient"></span>
                                <div class="mosaic-content">
                                    <p class="eyebrow-text">Managed Services</p>
                                    <div class="content-wrapper">
                                        <h3>Managed Services</h3>
                                        <p>Get an IT Department if you do not have one</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>

            </div>
            <!--Mosaic Thirds row end-->

            <!--Mosaic Thirds row start-->
            <div class="dmc-mosaic-row thirds" data-config-metrics-group="Mosaic Row">
                <div class="mosaic-col third" data-config-metrics-title="Col-1">
                    <section class="dmc-section" id="mosaic-onethird-small2-1" data-config-metrics-group="Section" data-config-metrics-title="mosaic-onethird-small2-1">
                        <div class="dmc-mosaic-tile-narrow base-blowout var-3">
                            <a class="mosaic-tile-anchor" href="{{ url('products') }}" data-config-metrics-item="Quality Product">
                                <div class="mosaic-image">
                                    <div class="dm-img" src="images/home/trusted-serrver.jpg" alt="Trusted Server">
                                        <noscript class="dmimg-ns"><img src="images/img/3728075_XS.jpg" alt="Quality Product" title="Quality Product"></noscript>
                                    </div>
                                </div>
                                <span class="gradient"></span>
                                <div class="mosaic-content">
                                    <p class="eyebrow-text">Quality Product</p>
                                    <div class="content-wrapper">
                                        <h3>Get the Right Product for your Business</h3>
                                        <p>We translate your business requirements into technical specifications of the product types and brands to consider.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>

                <div class="mosaic-col third" data-config-metrics-title="Col-2">
                    <section class="dmc-section" id="mosaic-onethird-small2-2" data-config-metrics-group="Section" data-config-metrics-title="mosaic-onethird-small2-2">
                        <div class="dmc-mosaic-tile-narrow base-blowout var-3">
                            <a class="mosaic-tile-anchor" href="{{ url('solutions/information-management') }}" data-config-metrics-item="Networking Solutions">
                                <div class="mosaic-image">
                                    <div class="dm-img" src="images/img/dmonitor.jpg" alt="Improve Productivity" title="Improve Productivity">
                                        <noscript class="dmimg-ns"><img src="images/img/dmonitor.jpg" alt="Networking Solutions" title="Improve Productivity"></noscript>
                                    </div>
                                </div>
                                <span class="gradient"></span>
                                <div class="mosaic-content">
                                    <p class="eyebrow-text">Virtualization</p>
                                    <div class="content-wrapper">
                                        <h3>Take The Virtualization Advantage Today</h3>
                                        <p>Reduced Operational Cost (50%), Power Usage (80%), Datacenter Space (45%), Server Setup time (75%)</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>

               <div class="mosaic-col third" data-config-metrics-title="Col-3">
                    <!-- renderComponentVersion(component) -->
                    <section class="dmc-section" id="mosaic-onethird-small2-3" data-config-metrics-group="Section" data-config-metrics-title="mosaic-onethird-small2-3">
                        <!-- DM:components/mosaic/mosaic-narrow-tile:V1.2.5 -->
                        <div class="dmc-mosaic-tile-narrow base-blowout var-3">
                            <a class="mosaic-tile-anchor" href="{{ url('support') }}" data-config-metrics-item="ENTERPRISE MANAGEMENT">
                                <div class="mosaic-image">
                                    <!--DM Image-->
                                    <div class="dm-img" src="images/home/support_options.jpg" alt="support options" title="support options">
                                        <noscript class="dmimg-ns"><img src="images/home/informationmanagement2.jpg" alt="support options" title="support options"></noscript>
                                    </div>
                                </div>
                                <span class="gradient"></span>
                                <div class="mosaic-content">
                                    <p class="eyebrow-text">Support Options</p>
                                    <div class="content-wrapper">
                                        <h3>Support Options</h3>
                                        <p>LUMENAVE provides various cost-effective and convenient support options for every business.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>

            </div>
            <!--Mosaic Thirds row end-->
        </div>
    </div>

    <div class="autoplay testimonial" align="center">
        <div class="slick-item">

            <div class="slick-inner-top">
                <h4>Abolaji Oyebo</h4>
                <p>Head, Infrastructure.</p>
            </div>

            <div class="slick-inner-mid" style="background-image: url('{{ asset('images/testimonials/fcmb.png') }}');">

            </div>

            <div class="slick-inner-bottom">
                <p>“for the past three years or more the bank has been working with LUMENAVE on numerious projects spanning all areas of Information Communication Technology (ICT).We are very happy with their competence, quality service delivery,and excellent customer service.”</p>
            </div>

        </div>

        <div class="slick-item">

            <div class="slick-inner-top">
                <h4>Sunkanmi Shuaib</h4>
                <p>Head, Information Technology.</p>
            </div>

            <div class="slick-inner-mid" style="background-image: url('{{ asset('images/testimonials/leadway_pensure.jpg') }}');">

            </div>

            <div class="slick-inner-bottom">
                <p>“The implementation of the data protection solution was handled professionally and LUMENAVE was willing to work with us as partner resolving all issues as they were been reported.”</p>
            </div>

        </div>

        <div class="slick-item">

            <div class="slick-inner-top">
                <h4>Olumuyiwa Fagbenro</h4>
                <p>Head, Information Technology.</p>
            </div>

            <div class="slick-inner-mid" style="background-image: url('{{ asset('images/testimonials/first_pension_custodian.jpg') }}');">

            </div>

            <div class="slick-inner-bottom">
                <p>“We were highly impressed with the way the implementation of Enterprise Monitoring Solution was carried out by LUMENAVE...the delivery was done based on standard project management approach and we were able to beat the timeline.....It was excellent job done.”</p>
            </div>

        </div>

        <div class="slick-item">
            <div class="slick-inner-top">
                <h4>Akinbami Babatunde</h4>
                <p>Head, Information Technology.</p>
            </div>

            <div class="slick-inner-mid" style="background-image: url('{{ asset('images/testimonials/sigma_pensions.jpg') }}')">

            </div>

            <div class="slick-inner-bottom">
                <p>“It has been a great delight having LUMENAVE as our Symantec Partner as they are very responsive and professional. When it comes to Symantec support, we are very much at ease because we know LUMENAVE has got our back.”</p>
            </div>
        </div>

        <div class="slick-item">

            <div class="slick-inner-top">
                <h4>Abba Yahaya</h4>
                <p>Chief Information Officer.</p>
            </div>

            <div class="slick-inner-mid" style="background-image: url('{{ asset('images/testimonials/unitybank.jpg') }}')">

            </div>

            <div class="slick-inner-bottom">
                <p>“LUMENAVE has delivered successfully and satisfactorily on our Enterprise Monitoring Solution...going the extra miles providing us features beyond our expectations..”</p>
            </div>

        </div>
    </div>

    <noscript>
        <style>
            .dmr.clip-content .clip, .dmr.clip-content .clip-wrap {
                overflow:visible;
                height: auto;
            }
        </style>
    </noscript>

    <!-- DM:components/blade/blade:V1.7.0 -->
    <div class="row full blowout dmc-blade top-padding header-center description-center cta-center  blade-social Do not override" data-config-metrics-group="Blade">
        <div class="col full">
            <div class="row full dmr">
                <div class="col full">
                    <div class="blade-header">
                    </div>
                    <div class="blade-description">
                    </div>
                </div>
            </div>
            <div class="row full ">
                <div class="col full">
                    <!-- DM:components/html/htmlblob:V1.2.3 -->
                    <!-- Override to fix issues with Gallery -->
                    <style>
                        .blade-social,
                        .blade-social .col,
                        .blade-social .row {
                            display: block !important;
                            width: 100% !important;
                        }
                    </style>
                    <!-- renderComponentVersion(component) -->
                    <section class="dmc-section" id="social-feed" data-config-metrics-group="Section" data-config-metrics-title="social-feed">
                        <!-- DM:components/html/htmlblob:V1.2.3 -->
                        <div id="sprinklr-embed-control-1035-ZW1iZWQ6NWJjZjJhZDAxNjIzYWUxYTM0YzRlOTg0" class="swe_embed_controls"></div>
                        <div id="sprinklr-embed-1035-ZW1iZWQ6NWJjZjJhZDAxNjIzYWUxYTM0YzRlOTg0" class="swe_embed"></div>
                        <script id="sprinklr-embed-loader-1035-ZW1iZWQ6NWJjZjJhZDAxNjIzYWUxYTM0YzRlOTg0" type="text/javascript" src="home/clients/1035/embeds/ZW1iZWQ6NWJjZjJhZDAxNjIzYWUxYTM0YzRlOTg0/script.js">
                        </script>
                        <br><br>
                    </section>
                </div>
            </div>
            <div class="row full dmr">
                <div class="col full">
                </div>
            </div>
        </div>
    </div>

    <div class="row full blowout no-padding" data-owner="ID">
        <div class="col full">
            <div class="fwt-fatfooter media">
                <div id="social-and-news">

                    <section id="social">
                        <span id="ff-followus">Follow Us</span>
                        <a id="ff-twitter" href="//twitter.com/lumenave/" role="twitter_url" title="twitter" target="_blank" class="fa fa-twitter fa-mid"></a>
                        <a id="ff-facebook" href="//www.facebook.com/lumenave/" role="facebook_url" title="facebook" target="_blank" class="fa fa-facebook fa-mid">

                        </a>
                        <a id="ff-instagram" href="//www.instagram.com/lumenave/" role="instagram_url" title="instagram" target="_blank" class="fa fa-instagram fa-mid">

                        </a>
                        <a id="ff-linkedin" href="//www.linkedin.com/company/lumenave" role="linkedin_url" title="linkedin" target="_blank" class="fa fa-linkedin fa-mid">

                        </a>
                        <a id="ff-youtube" href="//www.youtube.com/user/lumenave" role="youtube_url" title="youtube" target="_blank" class="fa fa-youtube fa-mid">

                        </a>
                    </section>

                    <section id="news">
                        <button id="ff-news-button">News & Events<span class="caret"></span></button>
                        <a id="ff-events" href="{{url('/')}}" role="Events_url" title="Events">
                            <i class="fa fa-shopping-cart fa-mid" style="padding:0.5em"></i>
                            <span>Shopping</span></a>

                            <a id="ff-blogs" href="{{url('/')}}" role="Blogs_url" title="Blogs">
                                <span class="fa fa-comment fa-mid" style="padding:0.5em"></span>
                                <span>Blogs</span></a>

                                <a id="ff-communities" href="{{url('/')}}" role="Networking_url" title="Networking">
                                    <span class="fa fa-connectdevelop fa-mid" style="padding:0.5em"></span>
                                    <span>Networking</span>
                                </a>
                    </section>
                </div>
            </div>
        </div>
    </div>

            <div class="fwt-fatfooter new-fatfooter">
                <div class="row quarters">

                    <div class="col quarter">
                        <a href="javascript:void(0)">PRODUCTS</a> <!-- Mobile Header -->
                        <ul>
                            <li class="footer-head"><a href="{{ url('products') }}">PRODUCTS</a></li>
                            <li><a href="{{ url('products/servers') }}">Servers</a></li>
                            <li><a href="{{ url('products/desktops') }}">Desktops</a></li>
                            <li><a href="{{ url('products/storage') }}">Storage</a></li>
                            <li><a href="{{ url('products/peripherals') }}">Peripherals</a></li>
                        </ul>
                    </div>

                    <div class="col quarter">
                        <a href="javascript:void(0)">SOLUTION</a>  <!-- Mobile Header -->
                        <ul>
                            <li class="footer-head"><a href="{{ url('solutions') }}">SOLUTIONS</a></li>
                            <li><a href="{{ url('solutions/information-security') }}">Information Security</a></li>
                            <li><a href="{{ url('solutions/information-availability') }}">Information Availability</a></li>
                            <li><a href="{{ url('solutions/information-management') }}">Information Management</a></li>
                            <li><a href="{{ url('solutions/information-systems') }}">Information Systems</a></li>
                        </ul>
                    </div>

                    <div class="col quarter">
                        <a href="javascript:void(0)">SERVICES</a>   <!-- Mobile Header -->
                        <ul>
                            <li class="footer-head"><a href="{{ url('services') }}">SERVICES</a></li>
                            <li><a href="{{ url('services/professional-services') }}">Professional Services</a></li>
                            <li><a href="{{ url('services/outsourcing-and-managed') }}">Outsourcing and Managed</a></li>
                            <li><a href="{{ url('services/it-financing') }}">IT Financing</a></li>
                            <li><a href="{{ url('services/bandwidth-provisioning') }}">Bandwidth Provisioning</a></li>
                        </ul>
                    </div>

                    <div class="col quarter">
                        <a href="javascript:void(0)">SUPPORT</a>  <!-- Mobile Header -->
                        <ul>
                            <li class="footer-head"><a href="{{ url('support') }}">SUPPORT</a> </li>
                            <li><a href="{{ url('support/support-options') }}">Support Options</a> </li>
                            <li><a href="{{ url('support/support-center') }}">Support Center</a> </li>
                            <li><a href="{{ url('support/supported-solutions') }}">Supported Solutions</a> </li>
                            <li><a href="https://www.lumenave.com/trade/">Shop Online</a> </li>
                            <li><a href="https://www.lumenave.com/trade/blog">Blogs</a> </li>
                        </ul>
                    </div>

                    <div class="col quarter">
                        <a href="javascript:void(0)">TRAINING</a>  <!-- Mobile Header -->
                        <ul>
                            <li class="footer-head"><a href="{{ url('training') }}">TRAINING</a> </li>
                            <li><a href="{{ url('training#certification-training') }}">Certification Training</a></li>
                            <li><a href="{{ url('training#customized-training') }}">Customized Training</a></li>
                            <li><a href="{{ url('training#training-formats') }}">Training Formats</a></li>
                        </ul>
                    </div>

                    <div class="col quarter">
                        <a href="javascript:void(0)">COMPANY</a>  <!-- Mobile Header -->
                        <ul>
                            <li class="footer-head"><a href="{{url('/')}}">COMPANY</a></li>
                            <li><a href="{{ url('about') }}">About us</a></li>
                            <li><a href="{{ url('contact') }}">Contact us</a></li>
                            <li><a href="{{url('/')}}">+234(0)700LUMENAVE</a></li>
                            <li><a href="{{url('/')}}">+234(0)700(58636283)</a></li>
                            <li><a href="{{url('/')}}">informict@lumenave.com</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

<footer id="fw-footer" class="container" tabindex="-1" data-owner="ID" style="background-color:#fe0000">
    <ul>
        <li><a href="{{ url('contact') }}">Contacts</a></li>
        <li><a href="{{url('/')}}">Feedback</a></li>
        <li><a href="{{url('/')}}">Help</a></li>
        <li><a href="{{url('/')}}">Site Map</a></li>
        <li><a href="{{url('/')}}">Terms & Conditions</a></li>
        <li>
            <a href="{{url('/')}}">
                <span>Privacy</span>
                <span>Privacy Statement</span>
            </a>
        </li>
        <li>
            <a href="{{url('/')}}">
                <span>Cookies</span>
                <span>Cookies</span>
            </a>
        </li>
        <li><a href="{{url('/')}}">Trademarks</a></li>
    </ul>
</footer>
<div id="fw-overlay"></div>

<!--

==================================START SCRIPTS=========================================


-->
<script>window['adrum-start-time'] = new Date().getTime();</script>
<script src="home/c/dam/cdc/j/adrum-prod.js"></script>
<script>(function(config){(function(xd){xd.enable=true;})(config.xd||(config.xd={}));})(window['adrum-config']||(window['adrum-config']={}));</script>

<script type="text/javascript" src="home/c/dam/cdc/j/targeter-bundle_min.js"></script>
<script type="text/javascript">
    Targeter.load({
        'delayForData': true,
        'safetyTimeout': '4000',
        'async': true,
        'loadLocale': false,
        'loadCps': true,
        'loadVps': true,
        'hideMethod': 'elements',
        'loadProfound': true,
        'entity': '{"id":"1531236473363629","categoryId":"HomePages,HOME"}',
        'loadBlueKai': true,
    });
</script>
<title>LUMENAVE | International Limited</title>

<!-- start loading client context -->
<script type="text/javascript" src="home/etc-clientlibs/clientlibs/granite/jquery.min.js"></script>
<script type="text/javascript" src="home/etc-clientlibs/clientlibs/granite/utils.min.js"></script>
<script type="text/javascript" src="home/etc-clientlibs/clientlibs/granite/jquery/granite.min.js"></script>
<script type="text/javascript" src="home/etc/clientlibs/foundation/jquery.min.js"></script>
<script type="text/javascript" src="home/etc/clientlibs/foundation/shared.min.js"></script>
<script type="text/javascript" src="home/etc-clientlibs/clientlibs/granite/lodash/modern.min.js"></script>

<script type="text/javascript">
    $CQ(function() {
        CQ_Analytics.SegmentMgr.loadSegments("\/etc\/segmentation");
        CQ_Analytics.ClientContextUtils.init("\/c\/dnc\/etc\/clientcontext\/default", "\/content\/en\/us\/index");
    });
</script>


<!-- end loading client context -->
<script>var w=window;if(w.performance||w.mozPerformance||w.msPerformance||w.webkitPerformance){var d=document;AKSB=w.AKSB||{},AKSB.q=AKSB.q||[],AKSB.mark=AKSB.mark||function(e,_){AKSB.q.push(["mark",e,_||(new Date).getTime()])},AKSB.measure=AKSB.measure||function(e,_,t){AKSB.q.push(["measure",e,_,t||(new Date).getTime()])},AKSB.done=AKSB.done||function(e){AKSB.q.push(["done",e])},AKSB.mark("firstbyte",(new Date).getTime()),AKSB.prof={custid:"117370",ustr:"",originlat:"0",clientrtt:"21",ghostip:"23.36.1.87",ipv6:false,pct:"10",clientip:"173.249.159.44",requestid:"d10a27c3",region:"33993",protocol:"h2",blver:14,akM:"dsca",akN:"ae",akTT:"O",akTX:"1",akTI:"d10a27c3",ai:"271834",ra:"false",pmgn:"",pmgi:"",pmp:"",qc:""},function(e){var _=d.createElement("script");_.async="async",_.src=e;var t=d.getElementsByTagName("script"),t=t[t.length-1];t.parentNode.insertBefore(_,t)}(("https:"===d.location.protocol?"https:":"http:")+"aksb.min.js")}</script>

<!--

OLD SCRIPT @Swift pageLoad
-->
<script type="text/javascript" src="home/etc/designs/cdc/clientlibs/responsive/js/homepage.min.js"></script>
<!-- twitter integration code -->
<script type="text/javascript">
    $(window).load(function(){
        cdc.util.addMetricsRule("p[class='tweet'] a",
            { lpos: "news_social",
                lid: "twitter"
            });
    });
</script>
<!-- /twitter integration code -->


<script type="text/javascript">
    if (window.BCL === undefined) {
        window.BCL = {};
    }
    BCL.currentPlayerWidth = 1.0;
</script>
<script type="text/javascript">
    jQuery("div[class='menu-toggle']").bind("mouseup", function(){
        if($(this).attr("class") == "menu-toggle")
        {
            var metrics_luh = " Open";
        }
        else
        {
            var metrics_luh = " Close";
        }
        trackEvent.event('link', {element_type: "flash", element_name: $(this).text().trim() + metrics_luh, content_container: "sm_luh", campaign_page: "CDC Home Page"});
    });
    function doPluginsAddOn() {
        cdc.ut.trackEvent.s_code.visitorID = cdc.ut.trackEvent._RCV("CP_GUTC");
        if(cdc.ut.trackEvent.s_code.prop5 == "sm_luh")
        {
            cdc.ut.trackEvent.s_code.events = "event5";
        }
    }
</script>
<!-- campaign blade -->
<script type="text/javascript">
    function doPluginsAddOn() {
        cdc.ut.trackEvent.s_code.visitorID = cdc.ut.trackEvent._RCV("CP_GUTC");
        if(cdc.ut.trackEvent.s_code.prop5 == "featured_campaign" && cdc.ut.trackEvent.s_code.prop4 == "video click")
        {
            cdc.ut.trackEvent.s_code.events = "event5";
        }
    }
    jQuery("object[class='BrightcoveExperience']").parent("div").one("mousedown", function(){
        trackEvent.event('link', {element_type: "flash", element_name: "video click", content_container: "featured_campaign", campaign_page: $("div[class='campaign-links'] h2").text()});
    });
</script>

<script
        src="https://code.jquery.com/jquery-3.4.0.js"
        integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
        crossorigin="anonymous">
</script>

<script>
    $('#filter-menu-button-menu').menu({
        "position": {
            my: "right top",
            at: "left top",
            collision: 'flipfit'
        }
    });
    $('#filter-menu-button-menu').unbind('mouseenter mouseleave');
</script>

<!--Mega menu-->
<script src="menu/js/jquery-2.1.1.js"></script>
<script src="menu/js/jquery.menu-aim.js"></script> <!-- menu aim -->
<script src="menu/js/main.js"></script> <!-- Resource jQuery -->

<!--Slick-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $('.autoplay').slick({
        lazyLoad: 'ondemand',
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        fades: true,
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d76439677aa790be33322cb/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
