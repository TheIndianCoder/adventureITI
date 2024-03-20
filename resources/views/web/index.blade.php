@extends('web.include.master')

@section('master-content')

	@push('title')
		<title>Adventure Pvt ITI - Best ITI College in Nawada</title>
	@endpush

		<!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-111">    
        	<div id="home-slider">
				<!-- Item 1 -->
				<!-- Item 2 -->
				<div class="item">
					<img src="{{asset('web/images/slider/Admition.webp')}} " alt="Slide2" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container">
									<h4 class="slider-title" style="color:orange; font-size:20px;" data-animation-in="fadeInUp" data-animation-out="animate-out">Admission Process</h4>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc1" style="color:#F9071E;">The admission process of Shri Krishna ITI involves a few simple steps.<br /> Students have to fill the inquiry form, later the counsellor of the institute will contact you.</p>  
									<a href="admissionprosidor.html" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="admissionprosidor.html" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">ADMITION NOTICE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Item 3 -->
				<div class="item">
					<img src="{{asset('web/images/slider/Admition.webp')}}" alt="Slide3" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container">
									<h4 class="slider-title" style="color:orange; font-size:20px;" data-animation-in="fadeInUp" data-animation-out="animate-out">Notice Board</h4>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc1">Stay updated with the activities of the institute and the happenings in the institute.<br /> Stay informed about all the activities and events that happen during an academic year.</p>  
									<a href="noticeboard.html" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="noticeboard.html" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">NOTIFICATION</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Item 4 -->
				<div class="item">
					<img src="{{asset('web/images/slider/Admition.webp')}}" alt="Slide3" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container">
									<h4 class="slider-title"  style="color:orange; font-size:20px;" data-animation-in="fadeInUp" data-animation-out="animate-out">Results</h4>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc1" style="color:#F9071E;">The institute is the basic foundation of the knowledge being imparted to a student. <br />It gives a chance to the students to gain knowledge in various domains and achieve great results.</p>  
									<a href="results.html" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="results.html" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">RESULTS</a>


								</div>
							</div>
						</div>
					</div>
				</div>
        	</div> 
            <div class="col-lg-12 col-md-12" style="padding-top:15px;">                
                <marquee id="th" direction="left" scrolldelay="10" scrollamount="4" onmouseover="th.stop();" onmouseout="th.start();">
					<a href='pdf/Admission%20form.html' target="_blank"><span style="font-size:20px;"> <i class="fa fa-hand-o-right" style="color:Black;"></i> <span id="Repeater1_Label1_0" style="color:Red;font-weight:bold;">Admission Form 2023</span>
						<span id="Repeater1_Label3_0">-</span>
						<span id="Repeater1_Label2_0" style="color:Red;font-weight:bold;">Download</span><img src="{{asset('web/newicon.gif')}} " style="vertical-align:middle; margin-right:50px;" /></span> 
					</a>
                </marquee>
        	</div>    
        </div>

		<!-- About Us Start -->
        <div id="rs-about" class="rs-about sec-spacer">
            <div class="container">
           
            
                <div class="sec-title mb-50 text-center">
                     <h1>ADVANTURE PVT. ITI</h1>      
                	
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                       
							<img src="{{asset('web/images/about/Mission%20vision.jpg')}}" alt="Mission"/>
							
						</div>	
						
                    
                    <div class="col-lg-6 col-md-12">
                    	<div class="about-desc">
                		    <h2> About Advanture ITI</h2>      
                			<p style="text-align:justify;">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat sed quisquam vitae atque ducimus eius aperiam fuga harum quasi maiores, at, libero dolor amet reprehenderit iste voluptate sit? Eveniet, ex.Voluptates eveniet hic ab repellat, quidem porro sit in eligendi! Libero reiciendis porro totam autem fugiat. Alias quo amet error ab, expedita tempora quae eum molestiae tempore explicabo quod adipisci?
                				<a href="aboutus.html" class="btn-warning p-1 ml-2">Read More</a>
                			</p>
                    	</div>
                    		<div class="news-btn">
	                    		
	                    	</div>
					
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End -->

        <!-- Courses Start -->
        <div id="rs-courses" class="rs-courses sec-color sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
                    <h1>WHY CHOOSE ADVANTURE ITI ?</h1>
                	<p>Adenture ITI is a prestigious Co-educational institute of Nawada. It has excellent facilities for education.</p>
                </div>
				<div class="row">
				<div class="col-lg-6 col-md-12">
				<p style="text-align:justify;">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dignissimos obcaecati ullam voluptatibus aperiam, incidunt veritatis et exercitationem officiis magni nemo, necessitatibus voluptas hic inventore facilis officia possimus autem nulla.Magnam dolorum obcaecati laudantium inventore labore, porro ea minus dolores nesciunt expedita quasi quo odit, excepturi repudiandae in magni at eaque tempora aut! Distinctio porro assumenda iure ea cumque! Provident?
				
				</p>
				</div>
				<div class="col-lg-6 col-md-12">
				
			        <div class="col-md-12">
						<div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="10" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="true" data-md-device-dots="true">
			               
			                <div class="cource-item">
			                    
			                    <div class="course-body">
			                    	
			                    	<img src="{{asset('web/images/about/1.jpg')}}" alt="skill india mission" style='border-radius:2%; border-style:double; border-width:2px; border-color:#402275;' />
			                    	
			                    </div>
			                   
			                </div>
			                <div class="cource-item">
			                    
			                    <div class="course-body">
			                    	
			                    	<img src="{{asset('web/images/about/2.jpg')}}" alt="skill india mission" style='border-radius:2%; border-style:double; border-width:2px; border-color:#402275;' />
			                    	
			                    </div>
			                   
			                </div>
			                <div class="cource-item">
			                    
			                    <div class="course-body">
			                    	
			                    	<img src="{{asset('web/images/about/3.jpg')}}" alt="skill india mission" style='border-radius:2%; border-style:double; border-width:2px; border-color:#402275;' />
			                    	
			                    </div>
			                   
			                </div>
			               
			            </div>
			        </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Courses End -->
		
		<!-- Counter Up Section Start-->
       
        <!-- Counter Down Section End -->

        <!-- Events Start -->
       
        <!-- Events End -->
        
		<!-- Team Start -->
      
        <!-- Team End -->

        <!-- Calltoaction Start -->
       
        <!-- Calltoaction End -->

        <!-- Latest News Start -->
       
        <!-- Latest News End -->

		<!-- Products Start -->
       

		<!-- Newslatter Start -->
<!--
        <div id="rs-newslatter" class="rs-newslatter sec-black sec-spacer">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-md-6">
                        <h3 class="newslatter-title">STAY CONNECTED WITH US</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <form class="newslatter-form">
                            <input type="text" class="form-input" placeholder="Enter Your Email Address">
                            <button type="submit" class="form-button">SUBSCRIBE</button>
                        </form>						
                    </div>
                </div>
            </div>
        </div>
-->

		<!-- Testimonial Start -->
        <div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
					<h2 class="white-color">SOMETHING TO PONDER OVER</h2>     
					<p class="white-color">Something to Ponder over </p>
				</div>
				<div class="row">
			        <div class="col-md-12">
						<div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
			                <div class="testimonial-item">
			                    <div class="testi-img">
			                        <img src="{{asset('web/images/about/images-160x160.jpg')}}" alt="Rabindranath Tagore">
			                    </div>
			                    <div class="testi-desc">
			                        <h4 class="testi-name">Rabindranath Tagore</h4>
			                        <p>"The highest education is that which does not merely give us information but makes our life in harmony with all existence."<br /><br /><br />
			                        </p>
			                    </div>
			                </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{asset('web/images/about/apj.jpg')}}" alt="APJ Abdul Kalam">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">APJ Abdul Kalam</h4>
					                <p>
					                   Failure will never overtake me if my determination to succeed is strong enough.” “All birds find shelter during a rain, but an eagle avoids rains by flying above the clouds.” “If you fail, never give up because FAIL means 'First Attempt in Learning.”
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{asset('web/images/about/download-160x160.jpg')}}" alt="Nelson Mandela">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Nelson Mandela</h4>
					                <p>
					                    "It is not beyond our power to create a world in which all children have access to a good education. Those who do not believe this have small imaginations."
					                    <br />
					                    <br />
					                   
					                   
					                    
					                </p>
					            </div>
					        </div>
					       
			            </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Testimonial End -->
        
		 <div id="rs-courses-categories" class="rs-courses-categories pt-100 pb-70">
			<div class="container">
				<div class="sec-title-2 mb-50 text-center">
                    <h2>ADVANTURE INSTITUTE OF TECHNOLOGY PVT ITI </h2>
                    <p>Important Links</p>
                	
                </div>
                    <div class="row">
    	            	<div class="col-lg-3 col-md-6 mycourse">
    	            		<div class="courses-item">
    	            		<a href="#">
    	            	        <i class="fa fa-desktop"></i>
    	            	        <h4 class="courses-title">Computer Lab</h4>
    	            	        </a>
    	            	    </div>
    	            	</div>
    	            	<div class="col-lg-3 col-md-6 mycourse">
    	            		<div class="courses-item">
    	            		<a href="{{route('web.electrician')}}">
    	            	        <i class="fa fa-battery-half"></i>
    	            	        <h4 class="courses-title">Electrician</h4>
    	            	       </a>
    	            	    </div>
    	            	</div>
    	            	<div class="col-lg-3 col-md-6 mycourse">
    	            		<div class="courses-item">
    	            		<a href="{{route('web.fitter')}}">
    	            	        <i class="fa fa-automobile"></i>
    	            	        <h4 class="courses-title">Fitter</h4>
    	            	       </a>
    	            	    </div>
    	            	</div>
    	            	<div class="col-lg-3 col-md-6 mycourse">
    	            		<div class="courses-item">
    	            		<a href="{{route('web.notice')}}">
    	            	        <i class="fa fa-bell-o"></i>
    	            	        <h4 class="courses-title">Notice Alert</h4>
    	            	      </a>
    	            	    </div>
    	            	</div>
                    </div>
                    <div class="row">
    	            	<div class="col-lg-3 col-md-6 mycourse">
    	            		<div class="courses-item">
    	            		<a href="#" target="_blank">
    	            	        <i class="fa fa-facebook"></i>
    	            	        <h4 class="courses-title">Facebook</h4>
    	            	        </a>
    	            	    </div>
    	            	</div>
    	            	<div class="col-lg-3 col-md-6 mycourse">
    	            		<div class="courses-item">
    	            		<a href="#" target="_blank">
    	            	        <i class="fa fa-instagram"></i>
    	            	        <h4 class="courses-title">Instagram</h4>
    	            	       </a>
    	            	    </div>
    	            	</div>
    	            	<div class="col-lg-3 col-md-6 mycourse">
    	            		<div class="courses-item">
    	            		<a href="#" target="_blank">
    	            	        <i class="fa fa-google-plus"></i>
    	            	        <h4 class="courses-title">Google+</h4>
    	            	       </a>
    	            	    </div>
    	            	</div>
    	            	<div class="col-lg-3 col-md-6 mycourse">
    	            		<div class="courses-item">
    	            		<a href="#" target="_blank">
    	            	        <i class="fa fa-youtube"></i>
    	            	        <h4 class="courses-title">Youtube</h4>
    	            	      </a>
    	            	    </div>
    	            	</div>
                    </div>
	            </div>
            </div>
     
       <!-- Gallery Start -->
  
        <div class="rs-gallery-4 rs-gallery sec-spacer mt-0 pt-10">
            <div class="container">
          <div class="sec-title-2 mb-50 text-center">
                    <h2>PHOTO GALLERY</h2>

                    <div class="view-more">
                		<a href="gallery.html">View All Gallery <i class="fa fa-angle-double-right"></i></a>
                	</div>
                </div>
            	<div id="galleryshow" class="row">
					@foreach ($gallery as $item)
						<div class='col-lg-3 col-md-6 pb-2'>
							<div class='gallery-item'>
								<img src='{{asset('uploads/gallery')}}/{{$item->image}}' alt='9' style='height:200px; width:100%;' />
								<div class='gallery-desc'>
									<h3><a href='#'>{{$item->title}} </a></h3>
									<a class='image-popup' href='gallery/play234737785.jpg' title='9'>
										<i class='fa fa-plus' style='margin-top:15px;'></i>
									</a>
								</div>
							</div>
						</div>
					@endforeach
					<div class='col-lg-3 col-md-6 pb-2'>
						<div class='gallery-item'>
							<img src='{{asset('web/gallery/Placement234604685.jpg')}} ' alt='8' style='height:200px; width:100%;' />
							<div class='gallery-desc'>
								<h3><a href='#'>SKIT</a></h3>
								<p>8</p>
								<a class='image-popup' href='gallery/Placement234604685.jpg' title='8'>
									<i class='fa fa-plus' style='margin-top:15px;'></i>
								</a>
							</div>
						</div>
					</div>
					<div class='col-lg-3 col-md-6 pb-2'><div class='gallery-item'><img src='{{asset('web/gallery/IMG-20180228-WA0041234547762.jpg')}}' alt='7' style='height:200px; width:100%;' /><div class='gallery-desc'><h3><a href='#'>TITLE</a></h3><p>7</p><a class='image-popup' href='gallery/IMG-20180228-WA0041234547762.jpg' title='7'><i class='fa fa-plus' style='margin-top:15px;'></i></a></div></div></div><div class='col-lg-3 col-md-6 pb-2'><div class='gallery-item'><img src='{{asset('web/gallery/Fitter%20Workshop234531874.jpg')}}' alt='6' style='height:200px; width:100%;' /><div class='gallery-desc'><h3><a href='#'>TITLE</a></h3><p>6</p><a class='image-popup' href='gallery/Fitter%20Workshop234531874.jpg' title='6'><i class='fa fa-plus' style='margin-top:15px;'></i></a></div></div></div><div class='col-lg-3 col-md-6 pb-2'><div class='gallery-item'><img src='{{asset('web/gallery/Electrician%20Workshop1234517291.jpg')}}' alt='5' style='height:200px; width:100%;' /><div class='gallery-desc'><h3><a href='#'>TITLE</a></h3><p>5</p><a class='image-popup' href='gallery/Electrician%20Workshop1234517291.jpg' title='5'><i class='fa fa-plus' style='margin-top:15px;'></i></a></div></div></div><div class='col-lg-3 col-md-6 pb-2'><div class='gallery-item'><img src='{{asset('web/gallery/Electrician%20Workshop234503778.jpg')}}' alt='4' style='height:200px; width:100%;' /><div class='gallery-desc'><h3><a href='#'>TITLE</a></h3><p>4</p><a class='image-popup' href='gallery/Electrician%20Workshop234503778.jpg' title='4'><i class='fa fa-plus' style='margin-top:15px;'></i></a></div></div></div><div class='col-lg-3 col-md-6 pb-2'><div class='gallery-item'><img src='{{asset('web/gallery/Computer%20Lab234451720.jpg')}}' alt='3' style='height:200px; width:100%;' /><div class='gallery-desc'><h3><a href='#'>TITLE</a></h3><p>3</p><a class='image-popup' href='gallery/Computer%20Lab234451720.jpg' title='3'><i class='fa fa-plus' style='margin-top:15px;'></i></a></div></div></div><div class='col-lg-3 col-md-6 pb-2'><div class='gallery-item'><img src='{{asset('web/gallery/Class%20Room234432376.jpg')}}' alt='2' style='height:200px; width:100%;' /><div class='gallery-desc'><h3><a href='#'>TITLE</a></h3><p>2</p><a class='image-popup' href='gallery/Class%20Room234432376.jpg' title='2'><i class='fa fa-plus' style='margin-top:15px;'></i></a></div></div></div>
           
        	  
            </div>
        </div>
        <!-- Gallery End -->
        
@endsection