@extends('layouts.layout')
@section('content')
    <div class="utf_dashboard_content_user">
        <div id="titlebar" class="dashboard_gradient">
            <div class="row">
                <div class="col-md-12">
                    <h2>Bookmark</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{ Route('home') }}">Accueil</a></li>
                            <li>Bookmark</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="utf_dashboard_list_box margin-top-0">
                    <h4><i class="sl sl-icon-heart"></i> All Bookmarked Listings</h4>
                    <ul>
                    
                          @foreach ($posts as $post)
                          @foreach ($post->haslike as $item)
                            @if ($item->pivot->post_id==$post->id && Auth::user()->id==$item->pivot->user_id)
                        <li>
                            <div class="utf_list_box_listing_item">
                                <div class="utf_list_box_listing_item-img">
                                    <a href="#"><img src="images/utf_listing_item-01.jpg" alt=""></a>
                                    <span class="like-icon"></span>
                                </div>
                                <div class="utf_list_box_listing_item_content">
                                    <div class="inner">
                                        <h3>{{$post->name}}</h3>
                                        <span><i class="sl sl-icon-location"></i> {{$post->users->adresse}}</span>
                                        <span><i class="sl sl-icon-phone"></i> {{$post->users->phone}}</span>
                                        <div class="utf_star_rating_section">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star half"></span>
                                            <span class="star empty"></span>
                                        </div>
                                        <p>{{$post->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('bookmarkDelete',['id'=>$post->id])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <input type="hidden"
                                name="pivot"
                                value="{{$item->pivot->id}}"
                                />
                            <div class="buttons-to-right"> <button class="button gray"><i class="sl sl-icon-close"></i>
                                    Delete</button> </div>
                            </form>
                        </li>
                        @endif
                        @endforeach
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

        </div>
    </div>
    </div>
    </div>
@endsection
