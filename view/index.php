<?php include ("../controller/main.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/bootstrap.min.css">
    <style type="text/css">
    #JX {
        background-image: url('../assets/img/webp/LP_JX_BG-04.webp');
        background-size: cover;
        background-repeat: no-repeat;
        padding: 10% 0;
    }

    #PX {
        background-image: url('../assets/img/webp/LP_PX_BG-03.webp');
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
        color: white;
        font-size: 3.5vw;
        font-weight: 800;
        text-shadow: 1px 1px #aaaaaa;
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
                    <img src="../assets/img/webp/LP_JX_ASET-07.webp" alt="ALL-in Junior Xplorer" width="80%">
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
                    <img src="../assets/img/webp/LP_JX_ASET-06.webp" alt="ALL-in Junior Xplorer Stage One Aspire"
                        width="70%">
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
                    <button class="btn btn-danger btn-pxjx">REGISTER
                        NOW</button>
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
                    <img src="../assets/img/webp/LP_PX_ASET-08.webp" alt="ALL-in Passion Xplorer" width="80%">
                </div>
                <div class="col-7 mt-3">
                    <div class="row">
                        <div class="col-xl" style="padding: .7em;color: #1a2250">
                            <h4 class="f-2">Students Grade 9-12</h4>
                            <h4 class="f-2">University Students (sem 1-2)</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-xl">
                    <img src="../assets/img/webp/LP_PX_ASET-09.webp" alt="ALL-in Passion Xplorer" width="80%">
                </div>
            </div>
            <div class="row text-center mt-10">
                <div class="col-xl">
                    <h3 class="px-title">Choose beetwen three important <br> roles and work to solve real <br>
                        corporate issues!</h3>
                </div>
            </div>
            <div class="row text-center mt-10">
                <div class="col-xl">
                    <button class="btn btn-danger btn-pxjx">REGISTER
                        NOW</button>
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