<!---------------------amado------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Sniglet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.12/css/bootstrap-select.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    </link>
    <link rel="stylesheet" href="{{asset('lib/amado/css/core-style.css?=1')}}">
    <script>
        var BASE_URL = "{{url('')}}/";

    </script>
    <!--for ajax-->
    <title>{{$page_title ?? ''}}</title>
    <link rel="icon" href="{{asset('lib/amado/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form>
                            @csrf()
                            <input id="search" type="search" placeholder="Search your furniture...">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- General main content -->
    <div class="main-content-wrapper d-flex clearfix" style="background-color: #e9f7f7;">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="{{url('')}}"><img src="{{asset('lib/amado/img/core-img/logoNew4.png')}}" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- General nav bar -->
        <header class="header-area clearfix" style="background-color: #e9f7f7;">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <a href="{{url('')}}">
                <div class="logo">
                    <img class="general-logo" src="{{asset('lib/amado/img/core-img/logo.png')}}" alt=""><img>
                    <img class="sofa" src="{{asset('lib/amado/img/core-img/logoNew4.png')}}" alt=""><img>
                </div>
            </a>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="{{url('')}}">Home</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>


                    @if(!empty($menu))
                    @foreach($menu as $menu_item)
                    <li>
                        <a href="{{url($menu_item['url'])}}">{{$menu_item['link']}}</a>
                    </li>
                    @endforeach
                    @endif

                </ul>
            </nav>
            <!-- Button Group -->
            @if( ! Session::has('user_id') )

            <div>
                <a class="btn amado-btn mb-15" href="{{url('user/signin')}}">Sign in</a>
                <a class="btn amado-btn active" href="{{url('user/signup')}}">Sign up</a>
            </div>

            @else
            <div>
                <a class="btn amado-btn mb-15" href="{{url('user/profile')}}">{{Session::get('user_name')}}</a>
            </div>
            @if( Session::has('is_admin') )
            <div class="amado-btn-group">
                <a class="btn amado-btn mb-15" href="{{url('cms/dashboard')}}">Admin Panel</a>
            </div>
            @endif
            <div class="amado-btn-group">
                <a class="btn amado-btn active mb-15" href="{{url('user/logout')}}">Logout</a>
            </div>
            @endif
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="{{url('shop/cart')}}" class="cart-nav"><i class="fab fa-opencart"></i>
                    Cart
                    @if(!Cart::isEmpty())
                    <span class="total-items-in-cart text-danger">({{Cart::getTotalQuantity()}})</span>
                    @endif</a>
                <a href="#" class="search-nav"><i class="fa fa-search"></i>
                    Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->
        @yield('main_content1')
    </div>
    <!-- ##### Main Content Wrapper End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo2">
                            <div class="logo">
                                <img src="{{asset('lib/amado/img/core-img/logo2.png')}}" alt=""><img>
                            </div>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script>
                            All rights reserved <br>This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#footerNavContent" aria-controls="footerNavContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><i
                                        class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{url('search')}}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('shop')}}">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('shop/cart')}}">Cart</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <!--laravel way to write-and make html enteties string interpulation-recog-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    @if( Session::has('sm') )
    <!--recognize the session-->
    <script>
        toastr.options.positionClass = "toast-bottom-center";
        toastr.success("{{ Session::get('sm') }}");

    </script>
    @endif
    <!-- Plugins js -->
    <script src="{{url('lib/amado/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{url('lib/amado/js/active.js')}}"></script>


</body>

</html>
