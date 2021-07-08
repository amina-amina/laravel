@extends('layouts.layout')
@section('content')
<div class="utf_contact_map margin-bottom-70"> 
    <div id="utf_single_listing_map_block">
      <div id="utf_single_listingmap" data-latitude="36.778259" data-longitude="-119.417931" data-map-icon="im im-icon-Map2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1648350.0339787197!2d-15.58818800000001!3d36.204653049808954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1624559834187!5m2!1sen!2sma" width=100% height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>      
	</div>   
  </div>
  <div class="clearfix"></div>
  
  <div class="container">
    <div class="row"> 
      <div class="col-md-8">
        <section id="contact" class="margin-bottom-70">
          <h4><i class="sl sl-icon-phone"></i> Contact Form</h4>          
          <form id="contactform">
            <div class="row">
              <div class="col-md-6">  
				  <input name="name" type="text" placeholder="First Name" required />                
              </div>
              <div class="col-md-6">                
                  <input name="name" type="text" placeholder="Last Name" required />                
              </div>
              <div class="col-md-6">                
                  <input name="email" type="email" placeholder="Email" required />                
              </div>
              <div class="col-md-6">
                  <input name="subject" type="text" placeholder="Subject" required />              
              </div>
			  <div class="col-md-12">
				  <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>
			  </div>
            </div>            
            <input type="submit" class="submit button" id="submit" value="Submit" />
          </form>
        </section>
      </div>
      
      <div class="col-md-4">
		<div class="utf_box_widget margin-bottom-70">
			<h3><i class="sl sl-icon-map"></i> Office Address</h3>
			<div class="utf_sidebar_textbox">
			  <ul class="utf_contact_detail">
				<li><strong>Phone:-</strong> <span>+ 001 245 0154</span></li>
				<li><strong>Web:-</strong> <span><a href="#">www.sitename.com</a></span></li>
				<li><strong>E-Mail:-</strong> <span><a href="mailto:info@example.com">info@example.com</a></span></li>
				<li><strong>Address:-</strong> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</span></li>
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