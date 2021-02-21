     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => '+ Add New Content'])
     <div class="row">
         <div class="col-md-8">
             <form action="{{url('cms/content')}}" method="POST" novalidate='novalidate' autocomplete="off">
                 @csrf
                 <div class="form-group">
                     <label class="h5">*Menu link</label>
                     <select name="menu_id" id="menu-id" class="form-control">
                         <option value="">Choose Menu link...</option>
                         @foreach ($menu as $menus)
                         <option @if( old('menu_id')==$menus['id'] ) selected='selected' @endif
                             value="{{$menus['id']}}">
                             {{$menus['link']}}</option>
                         @endforeach
                     </select>
                     <span class="text-danger">{{$errors->first('menu_id')}}</span>
                 </div>
                 <div class="form-group">
                     <label class="h5">*Title</label>
                     <input class="form-control target-text" type="text" class="title" id="title" name="title"
                         value="{{old('title')}}">
                     <span class="text-danger">{{$errors->first('title')}}</span>
                 </div>
                 <div class="form-group">
                     <label class="h5">*Article</label>
                     <textarea class="form-control" type="text" class="article" id="article" name="article" cols="30"
                         rows="10">{{old('article')}}</textarea>
                     <span class="text-danger">{{$errors->first('article')}}</span>
                 </div>
                 <input type="submit" value="Save Menu" class="btn btn-success" name="submit">
                 <a href="{{url('cms/content')}}" class="btn btn-info">Cancel</a>
             </form>
         </div>
     </div>
     @endsection
