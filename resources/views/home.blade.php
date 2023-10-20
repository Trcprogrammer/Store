@extends('layoust.index')
@section('title')
@section('content')
@component('components.navbar')
    
@endcomponent
@component('components.navbar2')
    
@endcomponent
@component('components.info')
    
@endcomponent

@component('components.ropa')

@endcomponent

<div  class="row">

 @foreach ($posts as $post )
    <div  class="col-lg-4" >

    <div class="card" style="width: 18rem;">
        <img src="http://localhost:8000/storage/{{$post->image_url}}"  height="200px"  class="card-img-top" alt="...">
        <div class="card-body">
        </div>
      </div>
 </div>
 

@endforeach    
</div>
 
    
@endsection