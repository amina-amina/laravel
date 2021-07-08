@extends('layouts.layout')

@section('content')
@foreach ($users as $user)
    
@if ($user->id == $posts->user_id)
    


  <div class="clearfix container"></div>
    <div id="utf_listing_gallery_part" class="utf_listing_section">
        <div class="utf_listing_slider utf_gallery_container margin-bottom-0">
            <a href="{{asset('storage/'.$posts->image)}}" data-background-image="{{asset('storage/'.$posts->image)}}"
                class="item utf_gallery"></a>
            <a href="{{asset('storage/'.$posts->image)}}" data-background-image="{{asset('storage/'.$posts->image)}}"
                class="item utf_gallery"></a>
            <a href="images/single-listing-03.jpg" data-background-image="images/single-listing-03.jpg"
                class="item utf_gallery"></a>
            <a href="images/single-listing-04.jpg" data-background-image="images/single-listing-04.jpg"
                class="item utf_gallery"></a>
        </div>
    </div>



    <div class="container">
        <div class="row utf_sticky_main_wrapper">
            <div class="col-lg-8 col-md-8">
                <div id="titlebar" class="utf_listing_titlebar">
                    <div class="utf_listing_titlebar_title">
                        <h2>{{ $posts->name }} <span class="listing-tag">Restaurant</span></h2>
                        <span> <a href="#utf_listing_location" class="listing-address"> <i class="sl sl-icon-location"></i>
                                {{ $user->adresse }}
                              </a> </span>
                        <span class="call_now"><i class="sl sl-icon-phone"></i> {{ $user->phone }}</span>
                        <div class="utf_star_rating_section" data-rating="4.5">
                            <div class="utf_counter_star_rating">(4.5) / (14 Reviews)</div>
                        </div>

                    </div>
                </div>
                <div id="utf_listing_overview" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30"> Description</h3>
                    <p>{{ $posts->description }}</p>
                    <p>{{ $posts->description }}</p>
                    <p>{{ $posts->description }}</p>
                    <p>{{ $posts->description }}</p>
                    <div id="utf_listing_tags"
                        class="utf_listing_section listing_tags_section margin-bottom-10 margin-top-0">
                        <a href="#"><i class="sl sl-icon-phone" aria-hidden="true"></i>{{$user->phone }}</a>
                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$user->email }}</a>
                        <a href="#"><i class="sl sl-icon-globe" aria-hidden="true"></i> {{ $user->facebook }}</a>
                    </div>
                    <div class="social-contact">
                        <a href="#" class="facebook-link"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="twitter-link"><i class="fa fa-twitter"></i> Twitter</a>
                        <a href="#" class="instagram-link"><i class="fa fa-instagram"></i> Instagram</a>
                        <a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i> Linkedin</a>
                        <a href="#" class="youtube-link"><i class="fa fa-youtube-play"></i> Youtube</a>
                    </div>
                </div>







                <div id="utf_listing_location" class="utf_listing_section">
                    <h3 class="utf_listing_headline_part margin-top-60 margin-bottom-40">Location</h3>
                    <div id="utf_single_listing_map_block">
                        <div id="utf_single_listingmap" data-latitude="36.778259" data-longitude="-119.417931"
                            data-map-icon="im im-icon-Hamburger"></div>
                        <a href="#" id="utf_street_view_btn">Street View</a>
                    </div>
                </div>

                <div id="utf_listing_reviews" class="utf_listing_section">

                </div>
                <div class="comments utf_listing_reviews">
                    <h1>Reviews</h1>
                    <ul>
                        <li>
                            <div class="avatar"><img src="images/client-avatar1.jpg" alt="" /></div>
                            <div class="utf_comment_content">
                                <div class="utf_arrow_comment"></div>
                                <div class="utf_star_rating_section" data-rating="5"></div>
                                <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i>
                                        Jan 05, 2019 - 8:52 am</span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                    Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien
                                    vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                            </div>
                        </li>
                        <li>
                            <div class="avatar"><img src="images/client-avatar2.jpg" alt="" /> </div>
                            <div class="utf_comment_content">
                                <div class="utf_arrow_comment"></div>
                                <div class="utf_star_rating_section" data-rating="4"></div>
                                <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i>
                                        Jan 05, 2019 - 8:52 am</span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                    Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien
                                    vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                            </div>
                        </li>
                        <li>
                            <div class="avatar"><img src="images/client-avatar3.jpg" alt="" /> </div>
                            <div class="utf_comment_content">
                                <div class="utf_arrow_comment"></div>
                                <div class="utf_star_rating_section" data-rating="4"></div>
                                <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i>
                                        Jan 05, 2019 - 8:52 am</span> </div>
                                <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                    Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien
                                    vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                            </div>
                        </li>
                        <li>
                            <div class="avatar"><img src="images/client-avatar1.jpg" alt="" /></div>
                            <div class="utf_comment_content">
                                <div class="utf_arrow_comment"></div>
                                <div class="utf_star_rating_section" data-rating="4.5"></div>
                                <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i>
                                        Jan 05, 2019 - 8:52 am</span> </div>
                                <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                    Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien
                                    vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                                <div class="review-images utf_gallery_container">
                                    <a href="images/review-image-01.jpg" class="utf_gallery"><img
                                            src="images/review-image-01.jpg" alt=""></a>
                                    <a href="images/review-image-02.jpg" class="utf_gallery"><img
                                            src="images/review-image-02.jpg" alt=""></a>
                                    <a href="images/review-image-03.jpg" class="utf_gallery"><img
                                            src="images/review-image-03.jpg" alt=""></a>
                                    <a href="images/review-image-01.jpg" class="utf_gallery"><img
                                            src="images/review-image-01.jpg" alt=""></a>
                                    <a href="images/review-image-02.jpg" class="utf_gallery"><img
                                            src="images/review-image-02.jpg" alt=""></a>
                                    <a href="images/review-image-03.jpg" class="utf_gallery"><img
                                            src="images/review-image-03.jpg" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="avatar"><img src="images/client-avatar3.jpg" alt="" /> </div>
                            <div class="utf_comment_content">
                                <div class="utf_arrow_comment"></div>
                                <div class="utf_star_rating_section" data-rating="4"></div>
                                <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i>
                                        Jan 05, 2019 - 8:52 am</span> </div>
                                <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                                    Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien
                                    vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                @endif
                @endforeach

                </section>
            @endsection
