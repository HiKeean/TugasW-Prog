<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ShareStuff - Sharing is Caring kata Bapakmu</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{assets/images/logo/logo-4.png}">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/signericafat.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/elegant.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
    <header class="header-area bg-orange">
        <div class="header-large-device">
            <div class="header-top header-top-ptb-7 border-bottom-9">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="/"><img src="assets/images/logo/logo-4.png" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-small-device small-device-ptb-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="mobile-logo">
                            <a href="/">
                                <img alt="" src="assets/images/logo/logo-4.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="header-action header-action-flex">
                            <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc">
                                <a href="login-register.html"><i class="icon-user"></i></a>
                            </div>
                            <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc">
                                <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count black">03</span></a>
                            </div>
                            <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc header-cart">
                                <a class="cart-active" href="#">
                                    <i class="icon-basket-loaded"></i><span class="pro-count black">02</span>
                                </a>
                            </div>
                            <div class="same-style-2 same-style-2-white same-style-2-hover-black main-menu-icon">
                                <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="col-xl-2 col-lg-2">
            <div class="logo">
                <a href="/"><img src="assets/images/logo/logo-4.png" alt="logo"></a>
            </div>
        </div>
        <div class="clickalbe-sidebar-wrap">
            <a class="sidebar-close"><i class="icon_close"></i></a>
            <div class="mobile-header-content-area">
                <div class="mobile-search mobile-header-padding-border-1">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search here…">
                        <button class="button-search"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-padding-border-2">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="/">Home</a>
                            </li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-social-icon">
                    <a class="facebook" href="facebook.com"><i class="icon-social-facebook"></i></a>
                    <a class="twitter" href="x.com"><i class="icon-social-twitter"></i></a>
                    <a class="instagram" href="instagram.com"><i class="icon-social-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">login - register </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-register-area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ms-auto me-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form class="user" action="/login" method="post">
                                            @csrf
                                            <input type="text" name="email" placeholder="email">
                                            @error('email')
                                                {{$message}}
                                            @enderror
                                            <input type="password" name="password" placeholder="password">
                                            @error('password')
                                                {{$message}}
                                            @enderror
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label>Remember me</label>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="/register" method="post">
                                            @csrf
                                            <input type="text" name="nama_member" placeholder="Nama">
                                            <input type="text" name="provinsi" placeholder="Provinsi">
                                            <input type="text" name="kabupaten" placeholder="Kabupaten">
                                            <input type="text" name="kecamatan" placeholder="Kecamatan">
                                            <input type="text" name="detail_alamat" placeholder="Alamat">
                                            <input type="text" name="no_hp" placeholder="No Hp">
                                            <input name="email" placeholder="Email" type="email">
                                            <input type="password" name="password" placeholder="Password">
                                            <input type="password" name="konfirmasi_password" placeholder="Konfirmasi Password">
                                            <div class="button-box">
                                                <button type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/jquery-v3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/slick.js"></script>
    <script type="text/javascript" src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/jquery.instagramfeed.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/wow.js"></script>
    <script type="text/javascript" src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script type="text/javascript" src="assets/js/plugins/jquery-ui.js"></script>
    <script type="text/javascript" src="assets/js/plugins/magnific-popup.js"></script>
    <script type="text/javascript" src="assets/js/plugins/sticky-sidebar.js"></script>
    <script type="text/javascript" src="assets/js/plugins/easyzoom.js"></script>
    <script type="text/javascript" src="assets/js/plugins/scrollup.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ajax-mail.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>