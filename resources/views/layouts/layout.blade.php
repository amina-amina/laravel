<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>U-Listing Directory</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="colors">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
        type="text/css">
        <!-- CSS only -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>

<body class="header-one">

    <!-- Wrapper -->
    <div id="main_wrapper">
        <header id="header_part">
            <div id="header">
                <div class="container">
                    <div class="utf_left_side">
                        <div id="logo"> <a href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a> </div>
                        <div class="mmenu-trigger">
                            <button class="hamburger utfbutton_collapse" type="button">
                                <span class="utf_inner_button_box">
                                    <span class="utf_inner_section"></span>
                                </span>
                            </button>
                        </div>
                        <nav id="navigation" class="style_one">
                            <ul id="responsive">
                                <li><a class="current" href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('listings') }}">Listing</a></li>
                                
                                {{-- dashboard dropdown --}}

                                </li>
                                <li><a href="{{ route('blog') }}">Blog</a>

                                </li>
                                <li><a href="{{ route('FAQ') }}">FAQ</a></li>

                                <li><a href="{{ route('contact') }}">Contactez-Nous</a></li>
                                @if (Auth::check() && Auth::user()->isadminn == 1)
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a>
                                @endif
                                {{-- dashboard dropdown --}}

                                </li>

                            </ul>



                        </nav>
                        <div class="clearfix"></div>
                    </div>
                    <div class="utf_right_side ">

                        @if (Auth::check())
                            <div class="header_widget">
                                <div class="dashboard_header_button_item has-noti js-item-menu">
                                    <i class="sl sl-icon-bell"></i>
                                    <div class="dashboard_notifi_dropdown js-dropdown">
                                        <div class="dashboard_notifi_title">
                                            <p>You Have 2 Notifications</p>
                                        </div>
                                        <div class="dashboard_notifi_item">
                                            <div class="bg-c1 red">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your Listing <b>Burger House (MG Road)</b> Has Been Approved!</p>
                                                <span class="date">2 hours ago</span>
                                            </div>
                                        </div>
                                        <div class="dashboard_notifi_item">
                                            <div class="bg-c1 green">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <p>You Have 7 Unread Messages</p>
                                                <span class="date">5 hours ago</span>
                                            </div>
                                        </div>
                                        <div class="dashboard_notify_bottom text-center pad-tb-20">
                                            <a href="#">View All Notification</a>
                                        </div>
                                    </div>
                                </div>

                                @if (Auth::user()->isadminn==0)
                                <div class="utf_user_menu">
                                    <div class="utf_user_name"><span><img src="{{asset('storage/'. Auth::user()->image)}}" alt=""></span>Hi, {{Auth::user()->name}}</div>
                                    <ul>
                                      <li><a href="{{route('userProfile')}}"><i class="sl sl-icon-user"></i> Mon profile</a></li>
                                      <li><a href="{{route('userListings')}}"><i class="sl sl-icon-list"></i> Mes annonces</a></li>
                                      <li><a href="{{route('bookmarks')}}"><i class="sl sl-icon-list"></i> Bookmarks</a></li>
                                      <li><a href="{{route('changePassword')}}"><i class="sl sl-icon-list"></i> Changer le mot de passe</a></li>
                      
                                      <form method="POST" action="{{ route('logout') }}">
                                          @csrf
                                      <li><a 	onclick="event.preventDefault();
                                          this.closest('form').submit();" :href="route('logout')"><i class="sl sl-icon-power"></i>	{{ __('Logout') }}</a></li>
                      
                                      </form>
                                    </ul>
                                  </div>
                                @endif
                    </div>
                </div>
            @else
                <a href="#dialog_signin_part" class="button border sign-in popup-with-zoom-anim"><i
                        class="fa fa-sign-in"></i> Sign In</a>
                @endif
                <a href="{{ route('addlisting') }}" class="button border_user with-icon"><i class="sl sl-icon-user"></i> Add
                    Listing</a>
            </div>


    </div>

    <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
        <div class="small_dialog_header">
            <h3>Sign In</h3>
        </div>
        <div class="utf_signin_form style_one">
            <ul class="utf_tabs_nav">
                <li class=""><a href="#tab1">Log In</a></li>
                <li><a href="#tab2">Register</a></li>
            </ul>
            <div class="tab_container alt">
                <div class="tab_content" id="tab1" style="display:none;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <a href="javascript:void(0);" class="social_bt facebook_btn"><i class="fa fa-facebook"></i>Login
                            with Facebook</a>
                        <a href="javascript:void(0);" class="social_bt google_btn"><i
                                class="fa fa-google-plus"></i>Login with Google</a>
                        <p class="utf_row_form utf_form_wide_block">
                            <label for="username">
                                <x-input id="email" placeholder="Username" class="input-text" type="email" name="email"
                                    :value="old('email')" required autofocus />
                            </label>
                        </p>
                        <p class="utf_row_form utf_form_wide_block">
                            <label for="password">

                                <x-input id="password" class="input-text" placeholder="Password" type="password"
                                    name="password" required autocomplete="current-password" />
                            </label>
                        </p>
                        
                        
                            
                             
                             <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span
                                class="lost_password fl_left"><a href="{{route('resetpassword')}}"> forget Password? </a>
                            </span>
                            <div class="checkboxes fl_right">
                                <input id="remember-me" type="checkbox" name="check">
                                <label for="remember-me">Remember Me</label>
                            </div>
                        </div>
                             
             


                      
                        <div class="utf_row_form">
                            <x-button class="button border margin-top-5">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                </div>
                {{-- /////register --}}
                <div class="tab_content" id="tab2" style="display:none;">
                    <form class="register" method="POST" action="{{ route('register') }}">
                        @csrf
                        <p class="utf_row_form utf_form_wide_block">
                            <label for="username2">
                                <x-input id="name" placeholder="Username" class="input-text" type="text" name="name"
                                    :value="old('name')" required autofocus />
                            </label>
                        </p>
                        <p class="utf_row_form utf_form_wide_block">
                            <label for="email2">
                                <x-input id="email" placeholder="Email" class="input-text" type="email" name="email"
                                    :value="old('email')" required />
                            </label>
                        </p>
                        <p class="utf_row_form utf_form_wide_block">
                            <label for="password1">
                                <x-input id="password" class="input-text" placeholder="Password" type="password"
                                    name="password" required autocomplete="new-password" />
                            </label>
                        </p>
                        <p class="utf_row_form utf_form_wide_block">
                            <label for="password2">
                                <x-input id="password_confirmation" class="input-text" placeholder="Confirm Password"
                                    type="password" name="password_confirmation" required />
                            </label>
                        </p>
                        <x-button class="button border fw margin-top-10">
                            {{ __('Register') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </header>
    @yield('content')





    <!-- Footer -->
    <div id="footer" class="footer_sticky_part">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>Useful Links</h4>
                    <ul class="social_footer_link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Listing</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>My Account</h4>
                    <ul class="social_footer_link">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">My Listing</a></li>
                        <li><a href="#">Favorites</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>Pages</h4>
                    <ul class="social_footer_link">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">How It Work</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>Help</h4>
                    <ul class="social_footer_link">
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Add Listing</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <h4>About Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom_backto_top"><a href="#"></a></div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('scripts/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('scripts/chosen.min.js') }}"></script>
    <script src="{{ asset('scripts/slick.min.js') }}"></script>
    <script src="{{ asset('scripts/rangeslider.min.js') }}"></script>
    <script src="{{ asset('scripts/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('scripts/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('scripts/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('scripts/mmenu.js') }}"></script>
    <script src="{{ asset('scripts/tooltips.min.js') }}"></script>
    <script src="{{ asset('scripts/color_switcher.js') }}"></script>
    <script src="{{ asset('scripts/jquery_custom.js') }}"></script>
    <script src="{{ asset('scripts/typed.js') }}"></script>
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["Attractions", " Restaurants", " Hotels"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
        });
    </script>

    <!-- Style Switcher -->
    <div id="color_switcher_preview">
        <h2>Choose Your Color <a href="#"><i class="fa fa-cog fa-spin (alias)"></i></a></h2>
        <div>
            <ul class="colors" id="color1">
                <li><a href="#" class="stylesheet"></a></li>
                <li><a href="#" class="stylesheet_1"></a></li>
                <li><a href="#" class="stylesheet_2"></a></li>
                <li><a href="#" class="stylesheet_3"></a></li>
                <li><a href="#" class="stylesheet_4"></a></li>
                <li><a href="#" class="stylesheet_5"></a></li>
            </ul>
        </div>
    </div>
</body>

</html>
