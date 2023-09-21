<!doctype html>
<html lang="en">
<head>
   @include('portal-frontend.includes.head')
</head>

<body class="home-1-bg">
    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div>
            <div class="nb-spinner"></div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->


       @include('portal-frontend.includes.header')

           @yield('content')

       @include('portal-frontend.includes.footer')

    <!--====== GO TO TOP PART START ======-->

    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>

    <!--====== GO TO TOP PART ENDS ======-->


    <!--====== PART START ======-->

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>

    <!--====== PART ENDS ======-->



    @include('portal-frontend.includes.sweetalert')
    @include('portal-frontend.includes.scripts')
</body>
</html>
