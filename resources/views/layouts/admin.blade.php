<!doctype html>
<html lang="en" dir="ltr">

@include('backend.includes.head')

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{asset('backend/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

           @include('backend.includes.appheader')

            <!--APP-SIDEBAR-->
           @include('backend.includes.sidebar')

            <!--app-content open-->
 <div class="main-content app-content mt-0">
    <div class="side-app">
        @yield('admin-content')

        <!-- CONTAINER END -->
    </div>
</div>
<!--app-content close-->


        </div>





        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span
                            class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

   @include('backend.includes.scripts')


</body>

</html>
