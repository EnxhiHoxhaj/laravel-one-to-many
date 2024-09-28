 @extends('layouts.app')
 @section('content')
     <div class="container-fluid content p-3 px-4">
         <h1 class="n-txt">Posts divisi per categoria</h1>

         @foreach ($categories as $category)
             <h3 class="mt-5 mb-3 n-txt">{{ $category->name }}</h3>
             <ul class="list-group">
                 @foreach ($category->posts as $post)
                     <li class="list-group-item">{{ $post->title }}</li>
                 @endforeach
             </ul>
         @endforeach

     </div>
 @endsection
