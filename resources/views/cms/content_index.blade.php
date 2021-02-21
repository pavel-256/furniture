     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => 'Content'])
     <div class="row">
         <div class="col">
             <a href="{{url('cms/content/create')}}" class="btn btn-info mr-4">
                 <i class="far fa-plus-square "></i>
                 Add Content Link
             </a>
         </div>
     </div>
     <div class="row mt-3">
         <div class="col">
             <table class="table table-bordered">
                 <thead>
                     <tr>
                         <th>Content Links</th>
                         <th>Operations</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach( $contents as $content_item)
                     <tr>
                         <td>{{$content_item['ctitle']}}</td>
                         <td>
                             <a href="{{url('cms/content/'. $content_item['id'] . '/edit')}}"><i
                                     class="fas fa-user-edit"></i>Edit</a>
                             |
                             <a href="{{url('cms/content/'. $content_item['id'])}}"><i
                                     class="fas fa-eraser"></i>Delete</a>
                         </td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
     @endsection
