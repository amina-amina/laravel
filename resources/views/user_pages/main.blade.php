@extends('layouts.layout')
@section('content')
<div class="search_container_block home_main_search_part main_search_block" data-background-image="images/city_search_background.jpg">
  <div class="main_inner_search_block">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Site des annonces gratuites <span class=""></span></h2>
          <h4>Trouver votre affaire facilement d'un seul click</h4>
          
          
          
          
          
            <form action="{{route("searchform")}}" method="post">
              @csrf
              <div class="main_input_search_part">
            <div class="main_input_search_part_item">
              <input type="text" name="searchselect" placeholder="What are you looking for?" value=""/>
            </div>

            <div class="main_input_search_part_item intro-search-field">
              <select name="villeSelect" class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="Select Location">
              @foreach ($villes as $ville)
                <option value={{$ville->id}}>{{$ville->name}}</option>          
              @endforeach
            </select>
            </div>

            <div class="main_input_search_part_item intro-search-field">
              <select name="categorieSelect" data-placeholder="All Categories" class="selectpicker default" title="All Categories" data-live-search="true" data-selected-text-format="count" data-size="5">
               @foreach ($categories as $category)
               <option value={{$category->id}}>{{$category->name}} </option>
               @endforeach
              </select>
            </div>
            <button class="button" onclick="window.location.">Search</button>
          </div>
          </form>
         


          <div class="main_popular_categories">
            <h3>Tous les catégories</h3>	
            <ul class="main_popular_categories_list">
              
              @foreach ($categories as $categorie)
              <li> <a href="{{route('filtreCategorie',['id'=>$categorie->id])}}">
                <div class="utf_box"> <i class="im im-icon-Business-Man" aria-hidden="true"></i>
                  <p>{{$categorie->name}}</p>
                </div>
                </a> 
              </li>
              @endforeach
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>    
</div>

<div class="container padding-bottom-70">
  <div class="row">
    <div class="col-md-12">
      <h3 class="headline_part centered margin-bottom-35 margin-top-70">Les annonces <span>Trouver votre affaire facilement</span></h3>
    </div>
    
    @foreach ($posts as $post)
   
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
    
 
    @endforeach
   
    
   
    
    
   
    <div class="col-md-12 centered_content"> <a href="#" class="button border margin-top-20">View More Categories</a> </div>
  </div>
</div>


@endsection
