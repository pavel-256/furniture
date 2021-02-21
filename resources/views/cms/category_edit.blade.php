     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => 'Edit Category'])
     <div class="row">
         <div class="col-md-8">
             <form action="{{ url('cms/categories/'. $item['id']) }}" method="POST" novalidate='novalidate'
                 autocomplete="off" enctype="multipart/form-data">
                 @csrf
                 {{method_field('PUT')}}
                 <input type="hidden" name="item_id" value="{{ $item['id'] }}">
                 <div class="form-group">
                     <label class="h5">*Title</label>
                     <input class="form-control origin-text" type="text" class="title" id="title" name="title"
                         value="{{$item['ctitle']}}">
                     <span class="text-danger">{{$errors->first('title')}}</span>
                 </div>
                 <div class="form-group">
                     <label class="h5">*Url</label>
                     <input class="form-control target-text" type="text" class="url" id="url" name="url"
                         value="{{ $item['curl']}}">
                     <span class="text-danger">{{$errors->first('url')}}</span>
                 </div>
                 <div class="form-group">
                     <label class="h5">*Article</label>
                     <textarea class="form-control" type="text" class="article" id="article" name="article" cols="30"
                         rows="10">{{ $item['carticle']}}</textarea>
                     <span class="text-danger">{{$errors->first('article')}}</span>
                 </div>
                 <img src="{{asset('images/'. $item['cimage'])}}" alt="" class="rounded mx-auto d-block">
                 <div class="form-group">
                     <label class="h5">*Category Image</label>
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                             <span class="input-group-text" id="inputGroupFileAddon01">Upload </span>
                         </div>
                         <div class="custom-file">
                             <input type="file" name="image" class="custom-file-input" id="image"
                                 aria-describedby="inputGroupFileAddon01">
                             <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                         </div>
                     </div>
                 </div>

                 <div class="form-group">
                     <span class="text-danger">{{$errors->first('image')}}</span>
                 </div>
                 <input type="submit" value="Update Category" class="btn btn-success" name="submit">
                 <a href="{{url('cms/categories')}}" class="btn btn-info">Cancel</a>
             </form>
         </div>
     </div>
     @endsection
