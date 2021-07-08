<!DOCTYPE html>
<html lang="zxx">
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>U-Listing Directory</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
<link rel="stylesheet" href="{{asset('css/mmenu.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}" id="colors">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="header-one">
<!-- Wrapper -->
<div id="main_wrapper"> 
  <header id="header_part" class="fixed fullwidth_block dashboard"> 
    <div id="header" class="not-sticky">
      <div class="container"> 
        <div class="utf_left_side"> 
          <div id="logo"> <a href="index_1.html"><img src="{{asset('images/logo.png')}}" alt=""></a> <a href="index_1.html" class="dashboard-logo"><img src="{{asset('images/logo2.png')}}" alt=""></a> </div>
          <div class="mmenu-trigger">
			<button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
			</button>
		  </div>
          <nav id="navigation" class="style_one">
            <ul id="responsive">
              <li><a class="current" href="{{route('home')}}">Accueil</a>
                
              </li>			  
              <li><a href="{{route('listings')}}">Les Annonces</a></li>
              <li><a href="{{route('dashboard')}}">Dashboard</a>
                <ul>
				  <li><a href="{{route('addlisting')}}">Ajouter une annonce</a></li>
                  <li><a href="{{route('userListings')}}">Mes annonces</a></li>				  
				  <li><a href="{{route('bookmarks')}}">Bookmark</a></li>
				  <li><a href="{{route('userProfile')}}">Mon profile</a></li>				  
				  <li><a href="{{route('changePassword')}}">Changer mot de passe</a></li>	  
                </ul>
              </li>
              <li><a href="{{route('blog')}}">Blog</a>	 
              </li>        
            </ul>
            <ul>				 
               <li><a href="{{route('FAQ')}}">FAQ</a></li>			
            </ul>
            <ul>				 
               <li><a href="{{route('contact')}}">Contactez-Nous</a></li>
            </ul>
            
          </nav>
          <div class="clearfix"></div>
        </div>
        <div class="utf_right_side"> 
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
      </div>
    </div>
  </header>
  <div class="clearfix"></div>
  
  <!-- Dashboard -->
  <div id="dashboard"> 
    <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Menu</a>
    <div class="utf_dashboard_navigation js-scrollbar">
      <div class="utf_dashboard_navigation_inner_block">
        <ul>
          <li class=""><a href="{{route('dashboard')}}"><i class="sl sl-icon-layers"></i> Dashboard</a></li>       
		  <li><a href="{{route('addlisting')}}"><i class="sl sl-icon-plus active"></i> Ajouter une nouvelle annonce</a></li>	          
		  <li>
			<a href="#" ><i class="sl sl-icon-layers active"></i> tous les annonces</a>
			<ul>
				
				 <form action="" method='post'>
					{{-- @foreach ($annonces as $annonce) --}}

					<li><a href="#">Accepter <span class="nav-tag green"></span></a></li>
					<li><a href="#">Refuser <span class="nav-tag yellow"></span></a></li>
					{{-- @endforeach --}}

				 
				</form> 
				{{-- @foreach ($annonces as $annonce)
				<h1>{{$annonce->name}}</h1>
					
				@endforeach
			 --}}
			</ul>	
		  </li>		  		 
		  	  
		  <li><a href="{{route('bookmarks')}}"><i class="sl sl-icon-heart active"></i> Bookmark</a></li>                                    		 
		  <li><a href="{{route('userProfile')}}"><i class="sl sl-icon-user active"></i> My Profile</a></li>
		  <li><a href="{{route('changePassword')}}"><i class="sl sl-icon-key active"></i> Change Password</a></li> 
		  <form method="POST" action="{{ route('logout') }}">
			@csrf     
		  <li><a onclick="event.preventDefault();
			this.closest('form').submit();" :href="route('logout')"><i class="sl sl-icon-power active"></i>	{{ __('Logout') }}</a></li>
			</form>
        </ul>
      </div>
    </div>    
@yield('dashcontent')
</div>

<!-- Scripts --> 
<script src="{{asset('scripts/jquery-3.4.1.min.js')}}"></script> 
<script src="{{asset('scripts/chosen.min.js')}}"></script> 
<script src="{{asset('scripts/slick.min.js')}}"></script> 
<script src="{{asset('scripts/rangeslider.min.js')}}"></script> 
<script src="{{asset('scripts/magnific-popup.min.js')}}"></script> 
<script src="{{asset('scripts/jquery-ui.min.js')}}"></script> 
<script src="{{asset('scripts/bootstrap-select.min.js')}}"></script> 
<script src="{{asset('scripts/mmenu.js')}}"></script>
<script src="{{asset('scripts/tooltips.min.js')}}"></script> 
<script src="{{asset('scripts/color_switcher.js')}}"></script>
<script src="{{asset('scripts/jquery_custom.js')}}"></script>
<script src="{{asset('scripts/typed.js')}}"></script>
<script>
(function($) {
try {
	var jscr1 = $('.js-scrollbar');
	if (jscr1[0]) {
		const ps1 = new PerfectScrollbar('.js-scrollbar');

	}
    } catch (error) {
        console.log(error);
    }
})(jQuery);
</script>
<!-- Style Switcher -->
<div id="color_switcher_preview">
  <h2>Choose Your Color <a href="#"><i class="fa fa-gear fa-spin (alias)"></i></a></h2>	
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