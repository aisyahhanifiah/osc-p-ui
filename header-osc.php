<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="kpkt.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="HNrtFOEsEwaq8bHBxs1hi9d6bxnTQnoKSfmsn31X">

    <title>OSC 3 Plus Online</title>


    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" >
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v0.0.1/css/unicons.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        @-webkit-keyframes blinker {
          from {opacity: 1.0;}
          to {opacity: 0.0;}
        }
        .blink{
            text-decoration: blink;
            -webkit-animation-name: blinker;
            -webkit-animation-duration: 2s;
            -webkit-animation-iteration-count:infinite;
            -webkit-animation-timing-function:ease-in-out;
            -webkit-animation-direction: alternate;
        }
    </style>
    <link href="css/app.css?id=577fcf1b727f3ba9d298" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

<!-- Custom CSS -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
    <style>
        .top-bar { min-width: 0px !important; }
        .table-condensed>tbody>tr>td, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>td, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>thead>tr>th {
            padding: 8px !important;
        }
        .table-custom>tbody>tr>td, .table-custom>tbody>tr>th, .table-custom>tfoot>tr>td, .table-custom>tfoot>tr>th, .table-custom>thead>tr>td, .table-custom>thead>tr>th {
            padding: 1px !important;
        }
        .table-custom>tbody>tr>th {
            width: 270px;
        }
    </style>
</head>

<body>
<div id="main-wrapper" class="d-flex flex-column">

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap337.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css

    <header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md staff">
        <div class="navbar-header">
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="uil uil-bars"></i></a>
            <a class="navbar-brand" href="/"><img src="images/pbt/logos/MPKj.png" alt="" style="width: 35px;"
                                                  class="mr-2">
                                    <span class="logo-text"><strong>Pegawai PBT MPKj</strong></span>
                
            </a>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
               data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
               aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                                                          href="javascript:void(0)" data-sidebartype="mini-sidebar"><i
                                class="uil uil-bars font-24 text-black-50"></i></a></li>
            </ul>
            <ul class="navbar-nav float-right">
                <li class="navbar-brand mt-3"><span class="logo-text" style="padding-top:0.1rem"><strong>Pegawai OSC MPKj</strong></span><span style="font-weight: 100"> (Pegawai OSC MPKj)</span></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class='uil uil-user-square display-7 text-primary'></i></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated" style="min-width: 0px;">

                        <a class="dropdown-item"
                           href="#">
                            <i class='uil uil-cog  m-r-5 m-l-2'></i> Kemaskini Akaun
                        </a>
                        <a class="dropdown-item"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                           style="cursor: pointer"><i class="uil uil-exit m-r-5 m-l-2"></i> Log Keluar</a>
                        <form id="logout-form" action="https://oscstaging.kpkt.gov.my/staff/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="HNrtFOEsEwaq8bHBxs1hi9d6bxnTQnoKSfmsn31X">                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>