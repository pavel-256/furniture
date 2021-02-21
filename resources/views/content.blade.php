<!-----------------------------------------------------amado------------->

@extends('master')

@section('main_content1')

<body>
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <div class="container">
                            <div class="row">
                                @if( $contents )
                                @foreach( $contents as $content )
                                <div class="col-12">
                                    <h3 style="font-family: 'Sniglet', cursive; text-decoration: underline;">
                                        {{ $content->ctitle }}</h3>
                                    <p>{!!$content->article!!}</p>
                                </div>
                                @endforeach
                                @else
                                <div class="col">
                                    <p> <i>No Content Available</i> </p>
                                </div>
                                @endif
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
