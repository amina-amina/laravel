@extends('layouts.layout')
@section('content')
<div class="utf_dashboard_content_user"> 
    <div id="titlebar" class="dashboard_gradient">
      <div class="row">
        <div class="col-md-12">
          <h2>My Listings</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="{{Route('home')}}">Accueil</a></li>
              <li><a href="{{Route('dashboard')}}">Dashboard</a></li>
              <li>Mes annonces</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-lg-12 col-md-12">
        <div class="utf_dashboard_list_box margin-top-0">
          <div class="sort-by my_sort_by">
              <div class="utf_sort_by_select_item">
                <select data-placeholder="Default Listing" class="utf_chosen_select_single">
                  <option>Default Listing</option>
                  <option>Active Listing</option>
                  <option>Pending Listing</option>
                  <option>Expired Listing</option>
                </select>
              </div>
          </div>
          <h4><i class="sl sl-icon-list"></i> Mes annonces</h4>
          <ul>
            
            
            
           @foreach ($posts as $post)
           <li>
            <div class="utf_list_box_listing_item">
              <div class="utf_list_box_listing_item-img"><a href="#"><img src="{{asset('storage/'.$post->image)}}" alt=""></a></div>
              <div class="utf_list_box_listing_item_content">
                <div class="inner">
                  <h3>{{$post->name}}</h3>
                  @foreach ($villes as $ville)
                  @if ($post->ville_id == $ville->id)
                      <span><i class="sl sl-icon-location"></i>{{$ville->name}}</span>
                  @endif
                  @endforeach

                  @foreach ($users as $user)
                  @if ($post->user_id == $user->id)
                  <span><i class="sl sl-icon-phone"></i> {{$user->phone}}</span>
                  @endif
                  @endforeach

                    <div class="utf_star_rating_section" data-rating="4.5">
                        <div class="utf_counter_star_rating">(4.5)</div>							
                    </div>
                    <p>{{$post->description}}</p>
                </div>
              </div>
            </div>
            <div class="buttons-to-right"> 

             
               
                <a href="{{Route('updateListing',['id'=>$post->id])}}" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
            

              <form action="{{Route('userListingDelete',['id'=>$post->id])}}" method="post">
                @csrf
                @method("DELETE")
                <button class="button gray"><i class="fa fa-trash-o"></i> Delete</button> 
              </form>

            </div>
          </li>
           @endforeach
            
           


          </ul>
        </div>
        <div class="clearfix"></div>
        <div class="utf_pagination_container_part margin-top-30 margin-bottom-30">
          <nav class="pagination">
            <ul>
              <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
              <li><a href="#" class="current-page">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-md-12">
        <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection