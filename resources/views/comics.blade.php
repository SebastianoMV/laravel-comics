
@extends('layout.main')

@section('content')

<div class="container d-flex flex-wrap">
 

@foreach($comics as $comic)

<div class="card"> 
  <div class="card-img">
    <img src="{{$comic->image}}" alt="">
  </div>
  <h5>{{$comic->title}}</h5>
 </div>
  
@endforeach

  

</div>
  


@endsection