<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ mix('/css/all.css') }}">
{{--  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">--}}
  @yield('styles')

  @yield('head')
</head>
<body class="@yield('body-class')">
  <div id="app">
    <section class="menu cid-r4inU3rSBT" once="menu" id="menu2-0">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="https://mobirise.com">
                            <img src="assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                        </a>
                    </span>

                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#modalLogin" data-toggle="modal">
                            Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#modalRegister" data-toggle="modal">
                            Register
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="https://mobirise.com">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="https://mobirise.com">
                            About Us
                        </a>
                    </li>
                </ul>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-sm btn-primary display-4" href="tel:+1-234-567-8901">
                        <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
                        </span>
                        +1-234-567-8901
                    </a>
                </div>
            </div>
        </nav>
    </section>
      @yield('content')
      <section class="footer4 cid-r4iq4YrbTP" id="footer4-7">
          <div class="container">
              <div class="media-container-row content mbr-white">
                  <div class="col-md-3 col-sm-4">
                      <div class="mb-3 img-logo">
                          <a href="https://mobirise.com/">
                              <img src="assets/images/logo2.png" alt="Mobirise">
                          </a>
                      </div>
                      <p class="mb-3 mbr-fonts-style foot-title display-7">
                          MOBIRISE
                      </p>
                      <p class="mbr-text mbr-fonts-style mbr-links-column display-7">
                          <a href="#" class="text-white">About Us</a>
                          <br><a href="#" class="text-white">Services</a>
                          <br><a href="#" class="text-white">Selected Work</a>
                          <br><a href="#" class="text-white">Get In Touch</a>
                      </p>
                  </div>
                  <div class="col-md-4 col-sm-8">
                      <p class="mb-4 foot-title mbr-fonts-style display-7">
                          RECENT NEWS
                      </p>
                      <p class="mbr-text mbr-fonts-style foot-text display-7">
                          Footer with solid color background and a contact form, Easily add subscribe and contact forms without any server-side integration.
                          <br>
                          <br>Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface.
                      </p>
                  </div>
                  <div class="col-md-4 offset-md-1 col-sm-12">
                      <p class="mb-4 foot-title mbr-fonts-style display-7">
                          SUBSCRIBE
                      </p>
                      <p class="mbr-text mbr-fonts-style form-text display-7">
                          Get monthly updates and free resources.
                      </p>
                      <div class="media-container-column" data-form-type="formoid">
                          <div data-form-alert="" hidden="" class="align-center">
                              Thanks for filling out the form!
                          </div>

                          <form class="form-inline" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
                              <input type="hidden" value="jwa1e4Hat8DphghUQKDy+SeosBtSoJ+H4hwu6zNDDJXUZIFOezfWhqCXqLBdA5y6HLGqQHlAqLNP9X4NwixK/XhK4EiyM5tpcoolvBhaPwNBQ/mj39uXEMOYeYiZrpH6" data-form-email="true">
                              <div class="form-group">
                                  <input type="email" class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email-footer4-7">
                              </div>
                              <div class="input-group-btn m-2">
                                  <button href="" class="btn btn-primary display-4" type="submit" role="button">Subscribe</button>
                              </div>
                          </form>
                      </div>
                      <p class="mb-4 mbr-fonts-style foot-title display-7">
                          CONNECT WITH US
                      </p>
                      <div class="social-list pl-0 mb-0">
                          <div class="soc-item">
                              <a href="https://twitter.com/mobirise" target="_blank">
                                  <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                              </a>
                          </div>
                          <div class="soc-item">
                              <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                  <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                              </a>
                          </div>
                          <div class="soc-item">
                              <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                  <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                              </a>
                          </div>
                          <div class="soc-item">
                              <a href="https://instagram.com/mobirise" target="_blank">
                                  <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                              </a>
                          </div>
                          <div class="soc-item">
                              <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                  <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                              </a>
                          </div>
                          <div class="soc-item">
                              <a href="https://www.behance.net/Mobirise" target="_blank">
                                  <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer-lower">
                  <div class="media-container-row">
                      <div class="col-sm-12">
                          <hr>
                      </div>
                  </div>
                  <div class="media-container-row mbr-white">
                      <div class="col-sm-12 copyright">
                          <p class="mbr-text mbr-fonts-style display-7">
                              © Copyright 2017 Mobirise - All Rights Reserved
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal fade" id="modalRegister">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">Choose Account Type To Register</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                                  <div class="col-6"><button type="button" class="btn btn-secondary btn-sm btn-block">Hire</button></div>
                                  <div class="col-6"><button type="button" class="btn btn-primary btn-sm btn-block">Work</button></div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-sm"  data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>

          <div class="modal fade" id="modalLogin">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">Choose Login Account Type</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-6"><button type="button" class="btn btn-secondary btn-sm btn-block">Hire</button></div>
                              <div class="col-6"><button type="button" class="btn btn-primary btn-sm btn-block">Work</button></div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-sm"  data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

</div>
   <script src="{{ mix('/js/all.js') }}"></script>
{{--  <script src="assets/web/assets/jquery/jquery.min.js"></script>--}}
{{--  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>--}}
{{--  <script src="assets/bootstrap/js/bootstrap.min.js"></script>--}}
{{--  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>--}}
  @stack('scripts')
</body>
</html>





