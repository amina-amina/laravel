@extends('layouts.layout')
@section('content')
<div class="container padding-bottom-70">
    <div class="row">
      <div class="col-md-12">
        <h3 class="headline_part centered margin-bottom-35 margin-top-70">Les annonces <span>Trouver votre affaire facilement</span></h3>
      </div>
      
      @foreach ($posts as $post)
      
     @if ($post->categorie_id ==$post->category->id)
           @if ($post->status==1)
          <div class="col-md-4"> 
        <a href="{{route('detaillisting',['id'=>$post->id])}}" class="img-box" data-background-image="{{asset('storage/'.$post->image)}}">
           <div class="utf_img_content_box visible">
             <h4>{{$post->name}} </h4>
             <span>{{$post->prix}}</span> 
           </div>
        </a> 
     </div>      
      @endif
     @endif
    
      
   
      @endforeach
     
      
     
      
      
     
      <div class="col-md-12 centered_content"> <a href="#" class="button border margin-top-20">View More Categories</a> </div>
    </div>
  </div>
  @endsection
