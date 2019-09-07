<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!--最小限のビューポート設定-->
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
  <title></title>
</head>
<body class="app header-fixed sidebar-md-show sidebar-fixed">
  <header class="app-header navbar"> <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
<span class="navbar-toggler-icon"></span>
</button> <a class="navbar-brand" href="/" style="font-size: 25px;">
<!-- <img src="https://coreui.io/docs/assets/brand/logo.svg" width="89" height="25" alt="CoreUI Logo"> -->
    Admin
</a>
    <ul class="nav navbar-nav d-md-down-none">
      <!-- <li class="nav-item px-3"> <a class="btn btn btn-outline-warning" href="https://coreui.io/support/">Contact &amp; Support</a> </li> -->
    </ul>
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav ps">
        <ul class="nav">
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
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
          <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
          <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
          <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
          <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
      </nav>
    </div>
    <main class="main">
      @yield('content')
    </main>
  </div>
  <footer class="app-footer">
    <div> <a href="https://coreui.io">CoreUI</a> <span>© 2018 creativeLabs.</span> </div>
    <div class="ml-auto"> <span>Powered by</span> <a href="https://coreui.io">CoreUI</a> </div>
  </footer>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
<iframe src="https://c.sharethis.mgr.consensu.org/portal.html" id="st_gdpr_iframe" title="GDPR Consent Management" style="width: 0px; height: 0px; position: absolute; left: -5000px;"></iframe>
  <div id="PopupSignupForm_0" widgetid="PopupSignupForm_0">
    <!-- MC BANNER -->
    <div class="mc-banner" data-dojo-attach-point="bannerContainer" style="display: none;">
      <div class="mc-layout__bannerContent"> <iframe src="about:blank" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="width:100%;" data-dojo-attach-point="iframeBannerContainer"></iframe> </div>
    </div>
    <!-- MC MODAL -->
    <div class="mc-modal" data-dojo-attach-point="modalContainer" style="display: none;">
      <div class="mc-closeModal" data-action="close-mc-modal" data-dojo-attach-point="modalClose"></div>
      <div class="mc-layout__modalContent"> <iframe src="about:blank" frameborder="0" marginwidth="0" marginheight="0" style="width:100%;" data-dojo-attach-point="iframeModalContainer"></iframe> </div>
    </div>
    <!-- MC MODAL OVERLAY -->
    <div class="mc-modal-bg" data-dojo-attach-point="modalOverlay" style="display: none;"></div>
  </div>
</body>
</html>