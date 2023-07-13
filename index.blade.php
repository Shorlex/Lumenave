@extends('layouts.pages2')

@section('title')
     Training Enrolment
@endsection

@section('custom-styles')
    <!-- Custom Form -->
    <link rel="stylesheet" href="{{ asset('css/custom-form.css') }}" type="text/css">
@stop

@section('contents')
    <div id="fw-content" class="container grid" data-owner="ID">
        <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/anchor-marquee/clientLib.min.css') }}" type="text/css">
        <script type="text/javascript" src="{{ asset('pages2/etc/designs/cdc/dmr/libs/utils/dynamic-video-init.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('pages2/etc/designs/cdc/dmr/anchor-marquee/clientLib.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/button/clientLib.min.css') }}" type="text/css">

        <!-- Page Header -->
        <div class="row full blowout dmr dmc-blade anchor-marquee no-padding">
            <div class="col full">
                <div class="dmc-anchor-marquee dark var-1" style="background:url('{{ asset('images/training/training_banner.png') }}' ) center top fixed; background-size:cover" data-config-metrics-group="Anchor Marquee" data-config-metrics-title="Extended Enterprise">

                    <!-- adding an overlay of light/dark as a part of accessibility enhancement -->
                    <div class="overlay"></div>
                    <div class="content" style="margin-left:-10px">
                        <h1 align="left" style="margin-left:-10px">Register for a Competence-based Training </h1>

                    </div>
                </div>
            </div>
        </div>

        <div id="lightbox-anchor" data-ltbox-type="video" data-ltbox-title="Extended Enterprise" data-ltbox-description="" data-ltbox-style="normal" data-ltbox-content="5742531062001" data-ltbox-component-id="lightbox-anchor" data-ltbox-player-type-id="NJgI8K0ie" data-ltbox-account-id="1384193102001" data-ltbox-interactivity="enable" data-ltbox-interactivity-override-id="">
        </div>
        <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/text/base-v2.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/stickynav/clientLib.min.css') }}">

    <!-- Sticky Nav -->
        <div class="row full blowout stickynav">
            <div class="col full">
                <div class="row full">
                    <div class="col full">
                        <div class="dm0 dmc-inpage-nav stickynav-fadeIn">
                            <div class="nav-container" style="width: 900px;">
                                <ul style="width: 900px;">
                                    <li class="active"><a href="#program-overview">Program Overview</a></li>
                                    <li class="active"><a href="#registeration-form">Registration Form</a></li>
                                </ul>

                                <div class="nav-arrows">
                                    <a href="javascript:void(0);" class="prev hide"></a>
                                    <a href="javascript:void(0);" class="next"></a>
                                </div>
                            </div>

                            <!--Support-->
                            <div class="mboxDefault" id="us_luhsn" style="visibility: visible;">
                                <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/text/base.min.css') }}" type="text/css">
                                <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/letushelp/letushelp.min.css') }}" type="text/css">
                                <script type="text/javascript" src="{{ asset('pages2/etc/designs/cdc/dmr/libs/nmsp.min.js') }}"></script>
                                <script type="text/javascript" src="{{ asset('pages2/etc/designs/cdc/dmr/letushelp/letushelp.min.js') }}"></script>

                                <div class="dmr dmc-letushelp-eot base-blowout pal-1" data-config-metrics-group="sm_luh">
                                    <h3><a href="javascript:void(0);" style="float: left;"><span class="icon"></span>Contact Lumenave<span class="arrow"></span></a></h3>
                                </div>
                            </div>

                            <script type="text/javascript">
                                mboxCreate('us_luhsn');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/blade/clientLib.min.css') }}" type="text/css">
        <noscript>
            <style>
                .dmr.clip-content .clip, .dmr.clip-content .clip-wrap {
                    overflow:visible;
                    height: auto;
                }
            </style>
        </noscript>

        <div class="dmc-blade row full blowout spotlight-xl no-padding  Do not override" data-config-metrics-group="Spotlight, XL" data-config-metrics-title="Intelligence Beyond">
            <div class="col full">
                <div class="dmr dmc-inpage-marquee var-2">
                    <div class="marquee-image focal-L">

                        <!--DM Image-->
                        <div class="dm-img" src="{{ asset('images/registeration/image1.png') }}" title="lumenave international training">
                            <noscript class="dmimg-ns"><img src="{{ asset('images/registeration/image1.png') }}" alt="lumenave international training" title="information security"></noscript>
                        </div>
                    </div>
                    <div class="marquee-content">
                        <div class="content-non-blowout">
                            <h3 class="pri-2">Be Competent in Most-Used Industry-Leading ICT Solutions</h3>
                            <h4>Improve Your Curriculum Vitae</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Program overview -->
        <div id="program-overview" class="row full blowout dmc-blade  header-center description-center cta-center   pal-1" style="background-color:#005073" data-stickynav-title="Benefits" data-config-metrics-group="Blade" data-config-metrics-title="Benefit with Extended Enterprise">
            <div class="col full">
                <div class="row full dmr">
                    <div class="col full">
                        <div class="blade-header">
                            <h2 style="color:#ffffff;">Program Overview</h2>
                        </div>
                    </div>
                </div>

                <div class="row quarters">

                    <!--Solution Item-->
                    <div class="col quarter">
                        <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/tile/clientLib.min.css') }}" type="text/css">
                        <script type="text/javascript" src="{{ asset('pages2/etc/designs/cdc/dmr/tile/clientLib.min.js') }}"></script>

                        <!-- DM:components/tile/tile:V2.1.3 -->
                        <div class="dmr dmc-tile    " data-config-metrics-group="Tile" data-config-metrics-title="Automate and go fast">

                            <!--video code embedded lightbox-->
                            <div class="media">
                                <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/libs/dmimg.min.css') }}">
                                <script src="{{ asset('etc/designs/cdc/dmr/libs/nmsp.min.js') }}"></script>
                                <script src="{{ asset('pages2/etc/designs/cdc/dmr/libs/dmimg.min.js') }}" async></script>
                            </div>
                            <!-- video code embedded lightbox -->
                            <div class="content image" style="width:500px">
                                <h3 style="color:#ffffff;">Prequisites:</h3>
                                <ul>
                                    <li style="color:#ffffff; text-align:justify; line-height: 1.6;">Some experience working with computers, Windows Client Operating Systems such as Windows 7 and above</li>
                                    <li style="color:#ffffff; text-align:justify; line-height: 1.6;"> General knowledge of some basic computer concepts.</li>
                                    <li style="color:#ffffff; text-align:justify; line-height: 1.6;"> Candidates are expected to come with their laptops with minimum specifications. Operating Systems: Windows 7 above, Hard-Disk Space: 100G, Memory: 4G and above.</li>
                                </ul>

                                </p>
                            </div>
                            <div style="clear: both; float: none;"></div>
                        </div>
                    </div>

                    <div class="col quarter">
                        <!-- DM:components/tile/tile:V2.1.3 -->
                        <div class="dmr dmc-tile" data-config-metrics-group="Tile" data-config-metrics-title="Act with insight">

                            <div class="content image" style="width:500px">
                                <h3 style="color:#ffffff;">Special Notes:</h3>
                                <ul>
                                    <li style="color:#ffffff; text-align:justify; line-height: 1.6;"> Highly-intensive hand-on sessions with practical exposure to live scenarios and environments</li>
                                    <li style="color:#ffffff; text-align:justify; line-height: 1.6;">Program facilitated by industry experts with several on-the-job experience in various sectors-banks, telcos, etc.</li>
                                    <li style="color:#ffffff; text-align:justify; line-height: 1.6;"> Course materials are all electronic references to some Internet pages, ebooks, no physical manuals, etc.</li>
                                </ul>
                            </div>

                            <div style="clear: both; float: none;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row full blowout dmc-blade  header-center description-center cta-center   pal-1" style="background-color:#F2F2F2" data-stickynav-title="Benefits" data-config-metrics-group="Blade" data-config-metrics-title="Benefit with Extended Enterprise">
                <div class="col full">
                    <div class="row full dmr">
                        <div class="col full">
                            <div class="blade-header">
                                <h2>Solutions</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row quarters">

                        <!--Solution Item-->
                        <div class="col quarter">
                            <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/tile/clientLib.min.css') }}" type="text/css">
                            <script type="text/javascript" src="{{ asset('pages2/etc/designs/cdc/dmr/tile/clientLib.min.js') }}"></script>

                            <!-- DM:components/tile/tile:V2.1.3 -->
                            <div class="dmr dmc-tile" data-config-metrics-group="Tile" data-config-metrics-title="Automate and go fast">

                                <!--video code embedded lightbox-->
                                <div class="media">
                                    <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/libs/dmimg.min.css') }}">
                                    <script src="{{ asset('etc/designs/cdc/dmr/libs/nmsp.min.js') }}"></script>
                                    <script src="{{ asset('pages2/etc/designs/cdc/dmr/libs/dmimg.min.js') }}" async></script>

                                    <!--DM Image-->
                                    <div style="max-width:250px;" class="dm-img" src="{{ asset('images/partners/solarwinds.png') }}" title="cloud security">
                                        <noscript class="dmimg-ns">
                                            <img src="{{ asset('images/partners/solarwinds.png') }}" alt="Save operational costs" title="Automate and go fast">
                                        </noscript>
                                    </div>

                                </div>
                                <div style="clear: both; float: none;"></div>
                            </div>
                        </div>

                        <div class="col quarter">
                            <!-- DM:components/tile/tile:V2.1.3 -->
                            <div class="dmr dmc-tile" data-config-metrics-group="Tile" data-config-metrics-title="Act with insight">
                                <!--video code embedded lightbox-->
                                <div class="media">
                                    <!--DM Image-->
                                    <div style="max-width:250px;" class="dm-img" src="{{ asset('images/partners/rapid7_logo.png') }}" title="Act with insight">
                                        <noscript class="dmimg-ns">
                                            <img src="{{ asset('images/partners/rapid7_logo.png') }}" alt="Act with insight" title="Act with insight">
                                        </noscript>
                                    </div>
                                </div>
                                <div style="clear: both; float: none;"></div>
                            </div>
                        </div>

                        <div class="col quarter">
                            <!-- DM:components/tile/tile:V2.1.3 -->
                            <div class="dmr dmc-tile" data-config-metrics-group="Tile" data-config-metrics-title="Protect the business">
                                <!--video code embedded lightbox-->
                                <div class="media">
                                    <!--DM Image-->
                                    <div style="max-width:250px;" class="dm-img" src="{{ asset('images/partners/boldonjames.png') }}" title="Protect the business">
                                        <noscript class="dmimg-ns">
                                            <img src="{{ asset('images/partners/boldonjames.png') }}" alt="Protect the business" title="Protect the business">
                                        </noscript>
                                    </div>
                                </div>
                                <div style="clear: both; float: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <link rel="stylesheet" href="{{ asset('pages2/etc/designs/cdc/dmr/marquee/clientLib.min.css') }}" type="text/css">
        <script type="text/javascript" src="{{ asset('pages2/etc/designs/cdc/dmr/marquee/clientLib.min.js') }}"></script>

        <div id="registeration-form" style="padding-top: 20px; padding-bottom:20px;" class="dmc-blade row full blowout spotlight-xl no-padding  Do not override" data-config-metrics-group="Spotlight, XL" data-config-metrics-title="Intelligence Beyond">
                <div class="col full">
                    <div class="dmr dmc-inpage-marquee var-2">
                        <div style="background-color: #00BCEB; padding-left: 8%; padding-top: 3%;" class="marquee-image focal-L">

                                @if (session('status'))
                                <h2 style="margin:8px; padding:16px; background-color: #cfc; color: #050 text-align:center">
                                    {{ session('status') }}
                                </h2>
                                @endif
                            <form id="contact" method="POST" action="{{ url('/sendReg') }}" >
                                @csrf
                                <h3>Registration Form</h3>
                                <h4>Fill in the details</h4>
                                <fieldset>
                                    <input placeholder="Your name" type="text" tabindex="1" required autofocus name="name">
                                </fieldset>
                                <fieldset>
                                    <select name="course" required>
										<option value=''>- - -Select - - -</option>
										<option value='Troubleshooting and Maintaining SolarWinds Solutions, Part 1'>Troubleshooting and Maintaining SolarWinds Solutions, Part 1</option>
                                    </select>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Your Corporate Email Address" type="email" tabindex="2" required name="email" title="Public mail domains are prohibited" pattern="^(?!.*@(?:gmail\.com|yahoo\.com|hotmail\.com|outlook\.com)$).*">
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" name="mobilenumber" required>
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Organisation" type="text" tabindex="4" required name="organization">
                                </fieldset>
                                <fieldset>
                                    <input placeholder="Designation" type="text" tabindex="5" required name="designation">
                                </fieldset>

                               <!-- <fieldset id="meal">
                                    <select id="meal" name="meal" required>
                                        <option value=''>Select Meal Option</option>
                                        <option value='non-solid'>Non solid (Rice, Beans, etc)</option>
                                        <option value='solid'>Solid (Eba, Pounded yam, etc)</option>
                                    </select>
                                </fieldset>

                                <fieldset id="non-solid">
                                    <select name="nonsolid">
                                        <option value=''>Select Non-solid</option>
                                        <option value='Rice'>Rice</option>
                                        <option value='Beans'>Beans</option>
                                        <option value='Porridge'>Porridge</option>
                                    </select>
                                </fieldset>

                                <fieldset id="solid">
                                    <select id="solid" name="solid">
                                        <option value=''>Select Solid</option>
                                        <option value='Eba'>Eba</option>
                                        <option value='Pounded-yam'>Pounded Yam</option>
                                        <option value='Semovita'>Semovita</option>
                                    </select>
                                </fieldset>

                                <fieldset id="soup">
                                    <select name="soup">
                                        <option value=''>Select Soup</option>
                                        <option value='Edika-nko'>Edika Nko</option>
                                        <option value='Efo-riro'>Efo Riro</option>
                                        <option value='Edika-nko'>Edika Nko</option>
                                        <option value='Egusi'>Egusi</option>
                                    </select>
                                </fieldset>

                                <fieldset id="extra">
                                    <select name="extra">
                                        <option value=''>Select Extra</option>
                                        <option value='Moi-moi'>Moi Moi</option>
                                        <option value='Plantain'>Plantain</option>
                                    </select>
                                </fieldset>

                                <fieldset id="protien">
                                    <select name="protien">
                                        <option value=''>Select Protien</option>
                                        <option value='Fish'>Fish</option>
                                        <option value='Chicken'>Chicken</option>
                                        <option value='Beef'>Beef</option>
                                    </select>
                                </fieldset>-->

                                <fieldset>
                                    <button type="submit">Submit</button>
                                </fieldset>
                            </form>
                        </div>

                        <div class="marquee-content">
                            <div class="content-non-blowout">
                                <p style="font-size:20px;">
                                    <strong>Venue:</strong> Lagos State, Nigeria Only<br>
                                    <strong>Terms and Conditions (T/C):</strong> All other T/Cs Apply
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script>
    window.onload = function() {

            $("#protien").children().prop('disabled',true).hide();
            $("#extra").children().prop('disabled',true).hide();
            $("#soup").children().prop('disabled',true).hide();
            $("#non-solid").children().prop('disabled',true).hide();
            $("#solid").children().prop('disabled',true).hide();

        };

        // use :input to get value inside a selection from a div or container
    $('#meal :input').on('change',function(){
        if( $(this).val()==="solid"){

            $("#solid").children().prop('disabled',false).show();
            $("#soup").children().prop('disabled',false).show();
            $("#protien").children().prop('disabled',false).show();

            $("#extra").children().prop('disabled',true).hide();
            $("#non-solid").children().prop('disabled',true).hide();

        }else if( $(this).val()==="non-solid"){

            $("#non-solid").children().prop('disabled',false).show();
            $("#extra").children().prop('disabled',false).show();
            $("#protien").children().prop('disabled',false).show();

            $("#soup").children().prop('disabled',true).hide();
            $("#solid").children().prop('disabled',true).hide();

        }else{

        }
    });
</script>

@endsection
