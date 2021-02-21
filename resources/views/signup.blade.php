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
                    <h1 class="pavel text-warning display-4"></h1 class="category-title">
                    <!-- Sorting -->
                </div>
            </div>
        </div>

        <h1></h1>


        <div class="container login-container">
            <div class="row">
                <div class="col-md-8 login-form-1">
                    <h3 class="text-info">Sign Up With Your Acount</h3>
                    <form class="ml-5" action="" method="POST" autocomplete="off" novalidate="novalidate">
                        @csrf()
                        <div class="form-group">
                            <label for="name">*Name</label>
                            <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control"
                                placeholder="Name">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">*Email</label>
                            <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control"
                                placeholder="Email">
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4">*Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password">
                        </div>
                        <span class="text-danger">{{$errors->first('password')}}</span>
                        <div class="form-group">
                            <label for="password-confirmation">*Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control" placeholder="Password">
                        </div>
                        <div class="mt-4">
                            <input name="submit" type="submit" value="Sign Up" class="btn btn-primary mt-4"></input>
                            <a href="{{ url('user/signin'. $rn)}}">Already signed</a>
                        </div>
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
