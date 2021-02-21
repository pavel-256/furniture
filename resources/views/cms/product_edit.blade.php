     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => '+ Edit Product'])
     <div class="row">
         <div class="col-md-8">
             <form action="{{ url('cms/products/'. $item['id']) }}" method="POST" novalidate='novalidate'
                 autocomplete="off" enctype="multipart/form-data">
                 @csrf
                 {{method_field('PUT')}}
                 <input type="hidden" name="item_id" value="{{ $item['id'] }}">
                 <div class="form-group">
                     <label for="category-id" class="h5">*Category</label>
                     <select name="categorie_id" id="categorie-id" class="form-control">
                         @foreach($categories as $category)
                         <option @if( $item['categorie_id']==$category['id'] ) selected="selected" @endif
                             value="{{$category['id']}}">
                             {{$category['ctitle']}}</option>
                         @endforeach
                     </select>
                     <span class="text-danger">{{$errors->first('categorie_id')}}</span>
                 </div>
                 <div class="form-group">
                     <label for="title" class="h5">*Title</label>
                     <input class="form-control origin-text" type="text" class="title" id="title" name="title"
                         value="{{ $item['ptitle']}}">
                     <span class="text-danger">{{$errors->first('title')}}</span>
                 </div>
                 <div class="form-group">
                     <label for="url" class="h5">*Url</label>
                     <input class="form-control target-text" type="text" class="url" id="url" name="url"
                         value="{{$item['purl']}}">
                     <span class="text-danger">{{$errors->first('url')}}</span>
                 </div>
                 <div class="form-group">
                     <label for="title" class="h5">*Price</label>
                     <input class="form-control" type="price" class="price" id="price" name="price"
                         value="{{$item['price']}}">
                     <span class="text-danger">{{$errors->first('price')}}</span>
                 </div>
                 <div class="form-group">
                     <label for="article" class="h5">*Article</label>
                     <textarea class="form-control" type="text" class="article" id="article" name="article" cols="30"
                         rows="10">{{$item['particle']}}</textarea>
                     <span class="text-danger">{{$errors->first('article')}}</span>
                 </div>
                 <img width="600px" height="500px" src="{{asset('furniture/'. $item['pimage'])}}" alt=""
                     class="rounded mx-auto d-block">
                 <div class="form-group">
                     <label class="h5">* Change Product Image</label>
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                             <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
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
                 <input type="submit" value="Update Product" class="btn btn-success" name="submit">
                 <a href="{{url('cms/products')}}" class="btn btn-info">Cancel</a>
             </form>
         </div>
     </div>
     @endsection
