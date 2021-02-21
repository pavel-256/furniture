     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => 'Delete Menu Link'])
     <div class="row">
         <div class="col-md-8">
             <form action="{{url('cms/menu/'.$item_id)}}" method="POST" novalidate='novalidate' autocomplete="off">
                 @csrf
                 {{method_field('DELETE')}}
                 <h4>Are you sure you want to delete this item ?</h4>
                 <input type="submit" value="DELETE" class="btn btn-danger" name="submit">
                 <a href="{{url('cms/menu')}}" class="btn btn-info">Cancel</a>
             </form>
         </div>
     </div>
     @endsection
