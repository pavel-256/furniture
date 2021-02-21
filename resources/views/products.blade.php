<!-------------------------Amado--------------------------------------------------->

@extends('master')
@section('main_content1')

<div class="shop_sidebar_area" style="background-color: #e9f7f7;">


    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h4 class="text-warning c_title">Catagories</h4>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>
                @if(!empty($categories))
                @foreach($categories as $categorie)
                <li class="nav-item">
                    <a class="nav-link " href="{{url('shop/'.$categorie['curl'])}}">{{$categorie['ctitle']}}</a>
                </li>
                @endforeach
                @endif
            </ul>
        </div>
    </div>
    <div class="widget price mb-50">
    </div>
</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <h1 class="text-warning display-4 c_title3">{{$products[0]->ctitle}}</h1 class="category-title">
                    <a type="button" class="btn my2-btn" type="button"
                        href="{{url('shop/'.$products[0]->curl)}}?orderBy=desc" class="">High to Low</a>
                    <a class="btn my2-btn" type="button" href="{{url('shop/'.$products[0]->curl)}}?orderBy=asc">Low to
                        High</a>
                    <!-- Sorting -->
                </div>
            </div>
        </div>

        <div class="row" style="min-height: 1000px">

            @foreach($products as $product)
            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <!--categories-->
                <div class="single-product-wrapper" style="background-color:#e9f7f7;">
                    <!-- Product Image -->
                    <div class="product-img">
                        <a href="{{url('shop/'.$product->curl. '/'. $product->purl)}}"><img
                                src="{{ asset('furniture/' . $product->pimage)}}" alt=""></a>
                        <!-- Hover Thumb -->
                        <img class="hover-img" src="#" alt="">
                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">${!! $product->price !!}</p>
                            <a href="{{url('shop/'.$product->curl. '/'. $product->purl)}}">
                                <h4 class="p_title2">{{$product->ptitle}}</h4>
                            </a>
                        </div>
                        <!-- Ratings & Cart -->
                        @if(! Cart::get($product->id))

                        <button data-pid="{{ $product->id }}" type="button" class="btn btn-info add-to-cart-btn ml-3  ">
                            <i class="fab fa-opencart"></i>
                            Add
                            to Cart </button>
                        @else

                        <div class="cart">
                            <button type="button" class="btn btn btn-warning" disabled='disabled'
                                data-pid="{{ $product->id }}"><b>In Cart</b></button>

                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                {{$products->links()}}
                <!--pagination-->
            </div>
        </div>
    </div>
</div>
</body>

</html>

@endsection
