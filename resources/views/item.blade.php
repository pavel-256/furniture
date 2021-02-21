<!--------------------------------------------------amado---------------------------->

@extends('master')

@section('main_content1')

<!-- Product Details Area Start -->
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb mt-5">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="{{asset('furniture/'.$item['pimage'])}}">
                                    <img class="d-block w-95" src="{{asset('furniture/'.$item['pimage'])}}"
                                        alt="First slide">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 mt-5">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">${{$item['price']}}</p>

                        <h2 class="p_title">{{$item['ptitle']}}</h2>

                        <!-- Ratings & Review -->
                        <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!-- Avaiable -->
                        <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                    </div>

                    <div class="short_overview my-5">
                        <p>{!!$item['particle']!!}</p>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" method="post">

                        @if( ! Cart::get($item['id']))
                        <button data-pid="{{ $item['id'] }}" type="button" class="btn amado-btn 
                        add-to-cart-btn mb-4 "><i class="fab fa-opencart mr-2"></i>Add to Cart
                        </button>
                        <!--if the product isnt in the cart-->
                        @else
                        <button disabled='disabled' type="button" class="btn amado-btn  
                        add-to-cart-btn mb-4 text-white active">Product in Cart
                        </button>
                        @endif
                        <!--if the product in the cart-->
                        <!--data-pid use in ajax-->
                        <a href="{{url('shop/cart')}}" class=' btn amado-btn text-white'>
                            To Cart</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>

</html>
@endsection
