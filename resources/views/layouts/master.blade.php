<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/bootstrap.min.css') }} ">
    <!-- Plugins -->
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/jquery.horizontalmenu.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/nouislider.min.css') }} ">
    <!-- Font Icon -->
    <link rel="stylesheet" href=" {{ asset('/assets/css/vendor/materialdesignicons.min.css') }} ">
    <!-- Main CSS File -->
    <link rel="stylesheet" href=" {{ asset('/assets/css/main.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/assets/css/colors/default.css') }} " id="colorswitch">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>

    <div class="wrapper">

               <!-- Start mini-header -->
               <header class="mini-header pt-4 pb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="logo-area-mini-header">
                                <a href="#">
                                    <img src=" {{asset('/assets/img/digikala.png')}} " style="height: 20px " alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               </header>
               <!-- End mini-header -->

               <!-- Start Sidebar -->
               <main class="main-content dt-sl mt-4 mb-3">
                <div class="container main-container">
                  <div class="row">
      
                      <!-- Start Sidebar -->
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 sticky-sidebar">
                          <div class="profile-sidebar dt-sl">
                              <div class="dt-sl dt-sn mb-3">
                                  <div class="profile-sidebar-header dt-sl">
                                      <div class="profile-avatar float-right">
                                          <img src=" {{ asset('/assets/img/mohammadkazeminavaei.jpg') }} " alt="">
                                      </div>
                                      <div class="profile-header-content mr-3 mt-2 float-right">
                                          <span class="d-block profile-username">محمد کاظمی نوایی</span>
                                          <span class="d-block profile-phone">توسعه دهنده نرم افزارهای تحت وب</span>
                                      </div>
                                      <div class="profile-link mt-2 dt-sl">
                                          <div class="row">
                                              @auth
                                              <div class="col-6 text-center">
                                                  <a href=" {{ route('password.request') }} ">
                                                      <i class="mdi mdi-lock-reset"></i>
                                                      <span class="d-block">تغییر رمز</span>
                                                  </a>
                                              </div>
                                              <div class="col-6 text-center">
                                                  <a href=" {{ route('logout') }} "  onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                                      <i class="mdi mdi-logout-variant"></i>
                                                      <span class="d-block">خروج از حساب</span>
                                                  </a>
                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                      @csrf
                                                  </form>
                                              </div>  
                                              <div class="col-6 text-center mt-5">
                                                <a href=" {{ route('verification.notice') }} ">
                                                    <i class="mdi mdi-lock-reset"></i>
                                                    <span class="d-block">تایید ایمیل</span>
                                                </a>
                                              </div>
                                              <div class="col-6 text-center mt-5">
                                                <a href=" {{ route('password.confirm') }} ">
                                                    <i class="mdi mdi-lock-reset"></i>
                                                    <span class="d-block">تایید رمز</span>
                                                </a>
                                              </div>                                            
                                              @endauth
                                              @guest
                                              <div class="col-6 text-center">
                                                  <a href=" {{ route('google') }} ">
                                                      <i class="mdi mdi-lock-reset"></i>
                                                      <span class="d-block">ورود با گوگل</span>
                                                  </a>
                                              </div>
                                              @endguest
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End Sidebar -->
                     <!-- Start main-content -->
                      @yield('main')
                     <!-- End main-content -->
                  </div>
                </div>
               </main>
                <!-- End Sidebar -->



               <!-- Start mini-footer -->
               <footer class="mini-footer dt-sl">
                <div class="container main-container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="mini-footer-menu">
                                <li><a href="#">درباره دیجی کالا</a></li>
                                <li><a href="#">فرصت های شغلی</a></li>
                                <li><a href="#">تماس با ما</a></li>
                                <li><a href="#">همکاری با سازمان ها</a></li>
                            </ul>
                        </div>
                        <div class="col-12 mt-2 mb-3">
                            <div class="footer-light-text">
                                استفاده از مطالب فروشگاه اینترنتی دیجی کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به (فروشگاه آنلاین دیجی کالا) می‌باشد.
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <div class="copy-right-mini-footer">
                                Copyright © 2019 Digikala
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End mini-footer -->

    </div>



    <!-- Core JS Files -->
    <script src=" {{ asset('/assets/js/vendor/jquery-3.4.1.min.js') }} "></script>
    <script src=" {{asset('/assets/js/vendor/popper.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/bootstrap.min.js')}} "></script>
    <!-- Plugins -->
    <script src=" {{asset('/assets/js/vendor/owl.carousel.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/isotope.pkgd.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/jquery.horizontalmenu.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/nouislider.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/wNumb.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/ResizeSensor.min.js')}} "></script>
    <script src=" {{asset('/assets/js/vendor/theia-sticky-sidebar.min.js')}} "></script>
    <!-- Main JS File -->
    <script src=" {{asset('/assets/js/main.js')}} "></script>
</body>
@include('sweet::alert')
</html>