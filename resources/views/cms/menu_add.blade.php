     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => '+ Add New Link'])
     <div class="row">
         <div class="col-md-8">
             <form action="{{url('cms/menu')}}" method="POST" novalidate='novalidate' autocomplete="off">
                 @csrf
                 <div class="form-group">
                     <label class="h5">*Link</label>
                     <input class="form-control origin-text" type="text" class="link" id="link" name="link"
                         value="{{old('link')}}">
                     <span class="text-danger">{{$errors->first('link')}}</span>
                 </div>
                 <div class="form-group">
                     <label class="h5">*Url</label>
                     <input class="form-control target-text" type="text" class="url" id="url" name="url"
                         value="{{old('url')}}">
                     <span class="text-danger">{{$errors->first('url')}}</span>
                 </div>
                 <div class="form-group">
                     <label class="h5">*Title</label>
                     <input class="form-control" type="text" class="title" id="title" name="title"
                         value="{{old('title')}}">
                     <span class="text-danger">{{$errors->first('title')}}</span>
                 </div>
                 <input type="submit" value="Save Menu" class="btn btn-success" name="submit">
                 <a href="{{url('cms/menu')}}" class="btn btn-info">Cancel</a>
             </form>
         </div>
     </div>
     @endsection
