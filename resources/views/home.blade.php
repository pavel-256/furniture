<!----------------  main amdado------------------ -->

@extends('master')
@section('main_content1')
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        <h1 style="font-family: 'Sniglet', cursive;">The Best Furniture</h1>
        <!-- Single Catagory -->
        @foreach($homeproducts as $products)
        <div class="single-products-catagory clearfix mt-5 ">
            <a href="{{url('shop/'.$products->curl.'/'.$products->purl)}}">
                <img src="{{asset('lib/amado/img/bg-img/1.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p class="text-white">From ${{$products->price}}</p>
                    <h4 class="text-white">{{$products->ptitle}}</h4>
                </div>
            </a>
        </div>
        @endforeach
        @foreach($homeproducts2 as $products)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="{{url('shop/'.$products->curl.'/'.$products->purl)}}">
                <img src="{{asset('lib/amado/img/bg-img/2.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From ${{$products->price}}</p>
                    <h4>{{$products->ptitle}}</h4>
                </div>
            </a>
        </div>
        @endforeach
        @foreach($homeproducts3 as $products)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="{{url('shop/'.$products->curl.'/'.$products->purl)}}">
                <img src="{{asset('lib/amado/img/bg-img/3.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From ${{$products->price}}</p>
                    <h4>{{$products->ptitle}}</h4>
                </div>
            </a>
        </div>
        @endforeach
        @foreach($homeproducts1 as $products)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="{{url('shop/'.$products->curl.'/'.$products->purl)}}">
                <img src="{{asset('lib/amado/img/bg-img/4.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From ${{$products->price}}</p>
                    <h4>{{$products->ptitle}}</h4>
                </div>
            </a>
        </div>
        @endforeach
        @foreach($homeproducts4 as $products)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="{{url('shop/'.$products->curl.'/'.$products->purl)}}">
                <img src="{{asset('lib/amado/img/bg-img/5.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From ${{$products->price}}</p>
                    <h4>{{$products->ptitle}}</h4>
                </div>
            </a>
        </div>
        @endforeach
        @foreach($homeproducts5 as $products)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="{{url('shop/'.$products->curl.'/'.$products->purl)}}">
                <img src="{{asset('lib/amado/img/bg-img/6.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From {{$products->price}}</p>
                    <h4>{{$products->ptitle}}</h4>
                </div>
            </a>
        </div>
        @endforeach
        @foreach($homeproducts6 as $products)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="{{url('shop/'.$products->curl.'/'.$products->purl)}}">
                <img src="{{asset('lib/amado/img/bg-img/7.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From ${{$products->price}}</p>
                    <h4>{{$products->ptitle}}</h4>
                </div>
            </a>
            <h1 class="text-center mt-4" style="font-family: 'Sniglet', cursive;">The Best Design</h1>
        </div>
        @endforeach
        @foreach($homeproducts7 as $products)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="{{url('shop/'.$products->curl.'/'.$products->purl)}}">
                <img src="{{asset('lib/amado/img/bg-img/8.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From ${{$products->price}}</p>
                    <h4>{{$products->ptitle}}</h4>
                </div>
            </a>
            <h1 class="text-centers" style="font-family: 'Sniglet', cursive;">Fast Delivery</h1>
        </div>
        @endforeach
        @foreach($homeproducts8 as $products)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="{{url('shop/'.$products->curl.'/'.$products->purl)}}">
                <img src="{{asset('lib/amado/img/bg-img/9.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p class="text-white">From ${{$products->price}}</p>
                    <h4 class="text-white">{{$products->ptitle}}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
