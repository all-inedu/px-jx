<?php include ("controller/main.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALL-in Junior Xplorer | ALL-in Passion Xplorer</title>
    <meta name="title" content="ALL-in Junior Xplorer | ALL-in Passion Xplorer">
    <!-- <meta name="description" content="Lorem"> -->

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="ALL-in Junior Xplorer | ALL-in Passion Xplorer">
    <!-- <meta property="og:description" content="Lorem"> -->
    <meta property="og:image" content="<?=$base_url;?>assets/img/webp/LP_PX_ASET-09.webp">

    <!-- Twitter -->
    <!-- <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="ALL-in Passion Xplorer & ALL-in Junior Xplorer">
    <meta property="twitter:description" content="Lorem">
	<meta property="twitter:image" content="<?=$base_url;?>assets/img/webp/LP_PX_ASET-09.webp"> -->

    <!-- Bootstrap CSS -->
    <link rel="icon" href="<?=$base_url;?>assets/img/icon.ico" type="image/ico" sizes="16x16">

    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/bootstrap.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GLGS4THNEK"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GLGS4THNEK');
    </script>
    <style type="text/css">
    #JX {
        background-image: url('<?=$base_url;?>assets/img/webp/JX-BG.webp');
        background-size: cover;
        background-repeat: no-repeat;
        padding: 10% 0;
    }

    #PX {
        background-image: url('<?=$base_url;?>assets/img/webp/PX-BG.webp');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center-bottom;
        padding: 10% 0;
    }

    .mt-10 {
        margin-top: 10%;
    }

    .pb-10 {
        padding-bottom: 10%;
    }

    .container-fluid .row h4,
    .container-fluid .row h3 {
        font-weight: bold;
    }

    h3.jx-title {
        font-size: 3.5vw;
        font-weight: 800;
    }

    h3.px-title {
        font-size: 3.5vw;
        font-weight: 800;
    }

    .jx-col-bold {
        background-color: #1a2250;
        color: #f57e20;
        padding: 0.7em 1.5em;
        border-radius: .3em;
    }

    .f-2 {
        padding-top: 5px;
        font-size: 3vw;
    }

    .f-1 {
        font-size: 1.8vw;
    }

    .btn-pxjx {
        font-weight: bold;
        font-size: 2vw;
        border-radius: .3em;
        padding: .3em 1.3em
    }

    @media only screen and (max-width: 600px) {
        h3.jx-title {
            font-size: 4vw;
        }

        .f-2 {
            font-size: 3.5vw;
        }

        .f-1 {
            font-size: 3vw;
        }

        .btn-pxjx {
            font-size: 3.5vw;
        }

        h3.px-title {
            color: white;
            font-size: 3.5vw;
            font-weight: 800;
        }
    }
    </style>
    <title></title>
</head>

<body>
    <div class="container-fluid" id="JX">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3 class="jx-title">YOU'RE ONE CLICK AWAY TO AIM FOR<BR>YOUR RIGHT MAJOR!</h4>
                </div>
            </div>
            <div class="row align-items-center text-center mt-10">
                <div class="col-5">
                    <img loading="lazy" src="<?=$base_url;?>assets/img/webp/LP_JX_ASET-07.webp"
                        alt="ALL-in Junior Xplorer" width="80%">
                </div>
                <div class="col-7">
                    <div class="row">
                        <div class="col-xl">
                            <div class="jx-col-bold">
                                <h3 class="f-2">21<sup>st</sup> - 26<sup>th</sup> JUNE 2021</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl" style="padding: .7em;color: #1a2250">
                            <h4 class="f-1">Students Grade 7-9</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-xl">
                    <img loading="lazy" src="<?=$base_url;?>assets/img/webp/LP_JX_ASET-06.webp"
                        alt="ALL-in Junior Xplorer Stage One Aspire" width="70%">
                </div>
            </div>
            <div class="row text-center mt-10">
                <div class="col-xl">
                    <h3 class="jx-title">Pick a stream of your interest and <br> delve deep into the field through <br>
                        Game Developing!</h3>
                </div>
            </div>
            <div class="row text-center mt-10">
                <div class="col-xl">
                    <a target="_blank" href="http://bit.ly/juniorxplorer-aspire-rsvp"
                        class="btn btn-danger btn-pxjx">REGISTER
                        NOW</a>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid" id="PX">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3 class="jx-title">YOU'RE ONE CLICK AWAY TO AIM FOR<BR>YOUR RIGHT MAJOR!</h4>
                </div>
            </div>
            <div class="row align-items-center text-center mt-10">
                <div class="col-5">
                    <img loading="lazy" src="<?=$base_url;?>assets/img/webp/LP_PX_ASET-08.webp"
                        alt="ALL-in Passion Xplorer" width="80%">
                </div>
                <div class="col-7 mt-3">
                    <div class="row">
                        <div class="col-xl">
                            <div class="jx-col-bold">
                                <h3 class="f-2">24<sup>th</sup> JUNE - 03<sup>rd</sup> JULY 2021</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl" style="padding: .7em;color: #1a2250">
                            <h4 class="f-1">Students Grade 9-12 <br>
                                University Students (sem 1-2)</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-xl">
                    <img loading="lazy" src="<?=$base_url;?>assets/img/webp/LP_PX_ASET-09.webp"
                        alt="ALL-in Passion Xplorer" width="80%">
                </div>
            </div>
            <div class="row text-center mt-10">
                <div class="col-xl">
                    <h3 class="px-title">Choose between three important <br> roles and work to solve real <br>
                        corporate issues!</h3>
                </div>
            </div>
            <div class="row text-center mt-10">
                <div class="col-xl">
                    <a target="_blank" href="http://bit.ly/passionxplorer-wep-rsvp"
                        class="btn btn-danger btn-pxjx">REGISTER
                        NOW</a>
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
</body>

</html>