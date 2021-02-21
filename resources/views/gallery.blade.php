@extends('master')
@section('main_content1')
<div class="shop_sidebar_area" style="background-color: #e9f7f7;">


</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <h1 class=" text-warning display-4"></h1 class="category-title">
                    <!-- Sorting -->
                </div>
            </div>
        </div>


        <div class="col-12 col-lg-7">
            <h1 class="text-center" style="font-family: 'Sniglet', cursive;">Cool Design</h1>
            <div class="single_product_thumb">
                <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#product_details_slider" data-slide-to="0"
                            style="background-image: url();">
                        </li>
                        <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url();">
                        </li>
                        <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url();">
                        </li>
                        <li data-target="#product_details_slider" data-slide-to="4" style="background-image: url();">
                        <li data-target="#product_details_slider" data-slide-to="5" style="background-image: url();">
                        <li data-target="#product_details_slider" data-slide-to="6" style="background-image: url();">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a class="gallery_img" href="{{asset('lib/amado/img/gallery/1.jpeg')}}">
                                <img class="d-block w-100" src="{{asset('lib/amado/img/gallery/1.jpeg')}}"
                                    alt="First slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="gallery_img" href="{{asset('lib/amado/img/gallery/2.jpeg')}}">
                                <img class="d-block w-100" src="{{asset('lib/amado/img/gallery/2.jpeg')}}"
                                    alt="Second slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="gallery_img" href="{{asset('lib/amado/img/gallery/3.jpeg')}}">
                                <img class="d-block w-100" src="{{asset('lib/amado/img/gallery/3.jpeg')}}"
                                    alt="Third slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="gallery_img" href="{{asset('lib/amado/img/gallery/4.jpeg')}}">
                                <img class="d-block w-100" src="{{asset('lib/amado/img/gallery/4.jpeg')}}"
                                    alt="Fourth slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="gallery_img" href="{{asset('lib/amado/img/gallery/5.jpeg')}}">
                                <img class="d-block w-100" src="{{asset('lib/amado/img/gallery/5.jpeg')}}"
                                    alt="Fourth slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="gallery_img" href="{{asset('lib/amado/img/gallery/6.jpeg')}}">
                                <img class="d-block w-100" src="{{asset('lib/amado/img/gallery/6.jpeg')}}"
                                    alt="Fourth slide">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</body>

</html>
@endsection
