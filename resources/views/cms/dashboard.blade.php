     @extends('cms.cms_master')
     @section('cms_content')
     @include('utils.cms_header' , ['title' => 'Dashboard'])
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <h1>Users Graph</h1>
                 <div>
                     {!! $usersChart->container() !!}
                     {!! $usersChart->script() !!}
                 </div>
             </div>
         </div>
     </div>
     </div>
     @endsection
