<!----------------------Amado------------------------------------------------------------->


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
                <div class="col-md-6 login-form-1">
                    <h3 class="text-info">Sign In with your acount</h3>
                    <form class="ml-5" action="" method="POST" autocomplete="off" novalidate="novalidate">
                        @csrf()
                        <div class="form-group">
                            <label for="inputEmail4">*Email</label>
                            <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control"
                                id="inputEmail4">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4">*Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Don't have an acount?</a>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger col-lg-6">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
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
