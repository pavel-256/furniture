<!-----------------------------amado categories------------------------------>
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
                    <a href="{{url('shop/'.$categorie['curl'])}}">{{$categorie['ctitle']}}</a>
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
                    <h1 class="pavel text-warning display-4"></h1 class="category-title">
                    <!-- Sorting -->
                </div>
                <div class="row mt-3">
                    @if( $categories )
                    <!--if we dont have categories-->
                    @foreach($categories as $category)

                    <div class="col-lg-6 col-xl-4">
                        <h2 class="text-center c_title2">{{$category['ctitle']}}</h2>
                        <div class="card mb-4 shadow-sm">
                            <!--from data base -->
                            <img src="{{ asset('images/' . $category['cimage'])}}" alt="">
                            <div class="card-body d-flex flex-column">
                                <p class="card-text mb-auto ">{!!$category['carticle']!!}</a>
                                    <!--xscc atack cancel for wisiwig-->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="{{url('shop/'.$category['curl'])}}" type="button"
                                                class="my-btn align-self-end">View
                                                Products</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col">
                        <p>
                            <i>No categories available</i>
                        </p>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
