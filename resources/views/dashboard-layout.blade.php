<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <!--最小限のビューポート設定-->
    <meta name="viewport" content="width=device-width">
    <!-- <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css"> -->
    <!-- <link rel="stylesheet" href="{{ asset('/style.css')}}" rel="stylesheet" type="text/css"> -->
    <script src="{{ asset('style.css') }}"></script>
    <script src="{{ asset('vendor.js') }}"></script>
    <script src="{{ asset('bundle.js') }}"></script>
    <title></title>
    <style>
        #loader {
            transition: all .3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1);
                opacity: 0
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <link href=" style.css" rel="stylesheet">
</head>
</head>

<body class="app header-fixed sidebar-md-show sidebar-fixed">
    <div>
        <div class="sidebar">
            <div class="sidebar-inner">
                <ul class="sidebar-menu scrollable pos-r ps ps--active-y">
                    <li class="nav-item  "> <a class="nav-link " href="/admin">
                            Home
                        </a>
                        <ul class="nav-dropdown-items"> </ul>
                    </li>
                    <li class="nav-item  "> <a class="nav-link " href="/admin/stores">
                            SHOP
                        </a>
                        <ul class="nav-dropdown-items"> </ul>
                    </li>
                    <li class="nav-item  "> <a class="nav-link " href="/admin/coupons">
                            Coupon
                        </a>
                        <ul class="nav-dropdown-items"> </ul>
                    </li>
                    <li class="nav-item  "> <a class="nav-link " href="/admin/users">
                            Users
                        </a>
                        <ul class="nav-dropdown-items"> </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-container">
            <div class="header-container">
                <ul class="nav-left" style="list-style-type: none">
                    <li>
                        <a class="navbar-brand" href="/" style="font-size: 25px;">
                            Admin
                        </a>
                    </li>
                </ul>
                <main class="main-content bgc-grey-100">
                    <div id="mainContent">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <footer class="app-footer">
            <div> <a href="https://coreui.io">CoreUI</a> <span>© 2018 creativeLabs.</span> </div>
            <div class="ml-auto"> <span>Powered by</span> <a href="https://coreui.io">CoreUI</a> </div>
        </footer>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
        <iframe src="https://c.sharethis.mgr.consensu.org/portal.html" id="st_gdpr_iframe"
            title="GDPR Consent Management"
            style="width: 0px; height: 0px; position: absolute; left: -5000px;"></iframe>
        <div id="PopupSignupForm_0" widgetid="PopupSignupForm_0">
            <!-- MC BANNER -->
            <div class="mc-banner" data-dojo-attach-point="bannerContainer" style="display: none;">
                <div class="mc-layout__bannerContent"> <iframe src="about:blank" frameborder="0" marginwidth="0"
                        marginheight="0" scrolling="no" style="width:100%;"
                        data-dojo-attach-point="iframeBannerContainer"></iframe> </div>
            </div>
            <!-- MC MODAL -->
            <div class="mc-modal" data-dojo-attach-point="modalContainer" style="display: none;">
                <div class="mc-closeModal" data-action="close-mc-modal" data-dojo-attach-point="modalClose">
                </div>
                <div class="mc-layout__modalContent"> <iframe src="about:blank" frameborder="0" marginwidth="0"
                        marginheight="0" style="width:100%;" data-dojo-attach-point="iframeModalContainer"></iframe>
                </div>
            </div>
            <!-- MC MODAL OVERLAY -->
            <div class="mc-modal-bg" data-dojo-attach-point="modalOverlay" style="display: none;"></div>
        </div>
</body>

</html>