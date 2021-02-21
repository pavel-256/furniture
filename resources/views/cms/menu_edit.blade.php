     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => 'Edit Link'])
     <div class="row">
         <div class="col-md-8">
             <form action="{{url('cms/menu/'. $item['id'])}}" method="POST" novalidate='novalidate' autocomplete="off">
                 @csrf
                 {{method_field('PUT')}}
                 <input type="hidden" name="item_id" value="{{ $item['id'] }}">
                 <div class="form-group">
                     <label class="h5">*Link</label>
                     @php $link_value = !empty(old('link')) ? old('link') : $item['link']; @endphp
                     <input class="form-control origin-text" type="text" class="link" id="link" name="link"
                         value="{{  $link_value }}">
                     <span class="text-danger">{{$errors->first('link')}}</span>
                 </div>
                 <div class="form-group">
                     <label class="h5">*Url</label>
                     @php $url_value = !empty(old('url')) ? old('url') : $item['url']; @endphp
                     <input class="form-control target-text" type="text" class="url" id="url" name="url"
                         value="{{$url_value }}">
                     <span class="text-danger">{{$errors->first('url')}}</span>
                 </div>
                 <div class="form-group">
                     <label class="h5">*Title</label>
                     @php $title_value = !empty(old('title')) ? old('title') : $item['title']; @endphp
                     <input class="form-control" type="text" class="title" id="title" name="title"
                         value="{{$title_value}}">
                     <span class="text-danger">{{$errors->first('title')}}</span>
                 </div>
                 <input type="submit" value="Save Menu" class="btn btn-success" name="submit">
                 <a href="{{url('cms/menu')}}" class="btn btn-info">Cancel</a>
             </form>
         </div>
     </div>
     @endsection
