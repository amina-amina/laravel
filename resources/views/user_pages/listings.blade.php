@extends('layouts.layout')

@section('content')
<div class="clearfix"></div>
<div id="titlebar" class="gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Site des annonces gratuites</h2>
        <nav id="breadcrumbs">
          <ul>
            <li><a href="{{Route('home')}}">Acceuil</a></li>
            <li>Annonce</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8">
      
      <div class="row">
        
@foreach ($posts as $post)
@if($post->status == 1)

<div class="col-lg-12 col-md-12">
  <div class="utf_listing_item-container list-layout"> <a href="{{route('detaillisting',['id'=>$post->id])}}" class="utf_listing_item">
    <div class="utf_listing_item-image">
    
      <img src="{{asset('storage/'.$post->image)}}" alt=""> 
     

      <div class="utf_listing_prige_block utf_half_list">							
          <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> {{$post->prix}}</span>					
      </div>
    </div>
    <div class="utf_listing_item_content">
      <div class="utf_listing_item-inner">
        
        <h3>{{$post->name}}</h3>
        @foreach ($villes as $ville)
        @if ($post->ville_id == $ville->id)
        <span><i class="sl sl-icon-location"></i> {{$ville->name}}</span>
  
        @endif

        @endforeach
        @foreach ($users as $user)
        @if ($post->user_id == $user->id)
        <span><i class="sl sl-icon-phone"></i> {{$user->phone}}</span>

        @endif

        @endforeach
        
        <p>{{$post->description}}</p>
        @if ( !$post->haslike()->where('user_id',Auth::user()->id)->first())
        <form action="{{Route("bookmarkPost")}}" method="post">
          @csrf
          <input name="post_id" value="{{$post->id}}" type="hidden">
          <button class="btn"><span class="material-icons-outlined">
            <i class="fas fa-heart"></i>
            </span>Add to bmmm</button> 
        </form>
        @endif

      </div>
    </div>
    </a> 
  </div>
</div>
@endif    
@endforeach
        





      </div>




      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="utf_pagination_container_part margin-top-20 margin-bottom-70">
            <nav class="pagination">
              <ul>
                <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                <li><a href="#" class="current-page">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sidebar -->
    <div class="col-lg-4 col-md-4">
      <div class="sidebar">
        <div class="utf_box_widget margin-bottom-35">
          <h3><i class="sl sl-icon-direction"></i> Filtrer</h3>			
          <div class="row with-forms">
            <div class="col-md-12">
              <input type="text" placeholder="What are you looking for?" value=""/>
            </div>
          </div>            
          <div class="row with-forms">
            <div class="col-md-12">
              <div class="input-with-icon location">
                <input type="text" placeholder="Search Location..." value=""/>
                <a href="#"><i class="sl sl-icon-location"></i></a> </div>
            </div>
          </div>
          <a href="#" class="more-search-options-trigger margin-bottom-10" data-open-title="More Filters Options" data-close-title="More Filters Options"></a>
          <div class="more-search-options relative">
              <div class="checkboxes one-in-row margin-bottom-15">
                @foreach ($categories as $category)
                <input id="check-a" type="checkbox" name="check">
                <label for="check-a">{{$category->name}}</label>
                @endforeach
                  
                  
              </div>				
          </div>			
          <button class="button fullwidth_block margin-top-5">Update</button>
        </div>		  
        <div class="utf_box_widget margin-top-35 margin-bottom-75">
          <h3><i class="sl sl-icon-folder-alt"></i> Categories</h3>
          <ul class="utf_listing_detail_sidebar">
            @foreach ($categories as $category)
            <li><i class="fa fa-angle-double-right"></i> <a href="#">{{$category->name}}</a></li>

            @endforeach

           
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="utf_cta_area_item utf_cta_area2_block">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="utf_subscribe_block clearfix">
                  <div class="col-md-8 col-sm-7">
                      <div class="section-heading">
                          <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Newsletter!</h2>
                          <p class="utf_sec_meta">
                              Subscribe to get latest updates and information.
                          </p>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-5">
                      <div class="contact-form-action">
                          <form method="post">
                              <span class="la la-envelope-o"></span>
                              <input class="form-control" type="email" placeholder="Enter your email" required="">
                              <button class="utf_theme_btn" type="submit">Subscribe</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>
@endsection