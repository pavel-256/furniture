     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => 'Menu'])
     <div class="row">
         <div class="col">
             <a href="{{url('cms/menu/create')}}" class="btn btn-info mr-4">
                 <i class="far fa-plus-square "></i>
                 Add Menu Link
             </a>
         </div>
     </div>
     <div class="row mt-3">
         <div class="col">
             <table class="table table-bordered">
                 <thead>
                     <tr>
                         <th>Menu Links</th>
                         <th>Oerations</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach( $menu as $menu_item)
                     <tr>
                         <td>{{$menu_item['link']}}</td>
                         <td>
                             <a href="{{url('cms/menu/'. $menu_item['id'] . '/edit')}}"><i
                                     class="fas fa-user-edit"></i>Edit</a>
                             |
                             <a href="{{url('cms/menu/'. $menu_item['id'])}}"><i class="fas fa-eraser"></i>Delete</a>
                         </td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
     @endsection
