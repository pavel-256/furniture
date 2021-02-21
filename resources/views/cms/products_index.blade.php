     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => 'Products'])
     <div class="row">
         <div class="col">
             <a href="{{url('cms/products/create')}}" class="btn btn-info mr-4">
                 <i class="far fa-plus-square "></i>
                 Add New Product
             </a>
         </div>
     </div>
     <div class="row mt-3">
         <div class="col">
             <table class="table table-bordered">
                 <thead>
                     <tr>
                         <th>Product Title</th>
                         <th>Image</th>
                         <th>Last Update</th>
                         <th>Operations</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach( $products as $product_item)
                     <tr>
                         <td>{{$product_item['ptitle']}}</td>
                         <td><img width="100" height="100" src="{{ asset('furniture/'.$product_item['pimage'])}}"
                                 alt="">
                         </td>
                         <td>{{date('d.m.Y',strtotime($product_item['updated_at']) )}}</td>
                         <td>
                             <a href="{{url('cms/products/'. $product_item['id'] . '/edit')}}"><i
                                     class="fas fa-user-edit"></i>Edit</a>
                             |
                             <a href="{{url('cms/products/'. $product_item['id'])}}"><i
                                     class="fas fa-eraser"></i>Delete</a>
                         </td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
     @endsection
