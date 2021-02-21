     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => 'Category'])
     <div class="row">
         <div class="col">
             <a href="{{url('cms/categories/create')}}" class="btn btn-info mr-4">
                 <i class="far fa-plus-square "></i>
                 Add New Category
             </a>
         </div>
     </div>
     <div class="row mt-3">
         <div class="col">
             <table class="table table-bordered">
                 <thead>
                     <tr>
                         <th>Category Title</th>
                         <th>Image</th>
                         <th>Last Update</th>
                         <th>Operations</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach( $categories as $category_item)
                     <tr>
                         <td>{{$category_item['ctitle']}}</td>
                         <td><img width="80" src="{{ asset('images/'.$category_item['cimage'])}}" alt=""></td>
                         <td>{{date('d.m.Y',strtotime($category_item['updated_at']) )}}</td>
                         <td>
                             <a href="{{url('cms/categories/'. $category_item['id'] . '/edit')}}"><i
                                     class="fas fa-user-edit"></i>Edit</a>
                             |
                             <a href="{{url('cms/categories/'. $category_item['id'])}}"><i
                                     class="fas fa-eraser"></i>Delete</a>
                         </td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
     @endsection
