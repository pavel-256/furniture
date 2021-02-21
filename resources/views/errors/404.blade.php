@php
$menu = App\menu::all()->toArray();
@endphp
@extends('master')
@section('main_content')
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>Oops!</h1>
            <h2>404 - The Page can't be found</h2>
        </div>
        <a href="{{url('')}}">Go TO Homepage</a>
    </div>
</div>
@endsection


<!--------------amado----------------------->

@php
$menu = App\menu::all()->toArray();
@endphp
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

        <h1></h1>

        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>Oops!</h1>
                    <h2>404 - The Page can't be found</h2>
                </div>
                <a href="{{url('')}}">Go TO Homepage</a>
            </div>
        </div>

    </div>
</div>
</div>
</body>

</html>
@endsection
