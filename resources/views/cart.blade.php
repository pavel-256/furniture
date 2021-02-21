<!-------------------------------------------------amado----------------------------------------->

@extends('master')

@section('main_content1')

<body>
    <div class="cart-table-area section-padding-100">
        <h2 class="text-center" style="font-family: 'Sniglet', cursive;">Shopping Cart</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                    </div>

                    <div class="cart-table clearfix">
                        @if($cart)
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th>Remove Item</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $item)
                                <tr>
                                    <td class="cart_product_img">
                                        <img src="{{asset('furniture/'. $item['attributes']['image'])}}" alt="Product">
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{$item['name']}}</h5>
                                    </td>
                                    <td class="price">
                                        <span>${{$item['price']}}</span>
                                    </td>
                                    <td class="quantity">
                                        <a data-op="minus" data-pid="{{$item['id']}}" class="update-cart-btn"
                                            href="#"><i class="fas fa-minus"></i></a>
                                        <input size="1" value="{{$item['quantity']}}" type="text" class="text-center">
                                        <a data-op="plus" data-pid="{{$item['id']}}" href="#" class="update-cart-btn"><i
                                                class="fas fa-plus"></i> </a>
                                    </td>
                                    <td class="cart_product_desc">${{$item['price'] * $item['quantity']}}</td>
                                    <td class="text-center">
                                        <a class="remove-item-btn" href="{{url('shop/remove-cart'.$item['id'])}}"
                                            class="text-danger"><i class="fas fa-trash fa-2x"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>date:</span> <span>{{date('d/m/Y')}}</span>
                            </li>
                            <li><span>delivery:</span> <span>Free</span></li>
                            <li><span>total:</span> <span>${{Cart::getTotal()}}</span></li>
                        </ul>


                        <div class="cart-btn mt-100">
                            <a href="{{url('shop/clear-cart')}}" class="btn amado-btn w-100 remove-cart active ">Clear
                                Cart</a>
                        </div>
                        <div class="cart-btn mt-50">
                            <a href="{{url('shop/order-now')}}" class="btn amado-btn w-100">Order Now!</a>
                        </div>
                        @else
                        <p><i>No items in cart</i></p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
@endsection
