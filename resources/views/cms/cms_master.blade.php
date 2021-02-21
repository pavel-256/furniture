<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{asset('cms_css/style.css?=1')}}">

    <title>Pavel Furniture | Admin Panel</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">

</head>

<body>
    <nav class="navbar  fixed-top  flex-md-nowrap p-0  " style="background-color:#fbb710;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 bg-dark " href="{{url('cms/dashboard')}}">
            <h4 style="color:white;">My Admin Panel</h4>
        </a>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap ">
                <h4> <a class="nav-link text-dark " href="{{url('user/logout')}}"><i
                            class="fas fa-power-off mr-2"></i>Logout</a></h4>
            </li>
        </ul>
    </nav>
    <div class="container-fluid ">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <div class="h3">
                        <ul class="nav flex-column mt-2">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('cms/dashboard')}}">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" href="{{url('cms/menu')}}">
                                    <span data-feather="file"></span>
                                    Menu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('cms/content')}}">
                                    <span data-feather="shopping-cart"></span>
                                    Content
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('cms/categories')}}">
                                    <span data-feather="users"></span>
                                    Categories
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('cms/products')}}">
                                    <span data-feather="users"></span>
                                    Products
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('cms/orders')}}">
                                    <span data-feather="bar-chart-2"></span>
                                    Orders
                                </a>
                            </li><br>
                            <li class="nav-item mt-5 mb-5 ">
                                <a class="nav-link text border-top" href="{{url('')}}">
                                    <span data-feather="layers"></span>
                                    Back To Site
                                </a>
                            </li>
                    </div>
                    <img class="logo1" src="{{asset('lib/amado/img/core-img/logo.png')}}" alt="">
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('cms_content')
                @yield('orders')
            </main>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js?=1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="{{ asset('js/cms_script.js')}}"></script>
    @if( Session::has('sm') )
    <!--recognize the session-->
    <script>
        toastr.options.positionClass = "toast-bottom-center";
        toastr.success("{{ Session::get('sm') }}");

    </script>
    @endif
</body>

</html>


<!------dfdfdfddddddddddddddddddddddddddddddddfdfdfdfdfdfdf-->
