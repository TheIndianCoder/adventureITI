@extends('web.include.master')

@section('master-content')

@push('name')
    <title>Contact Us</title>
    
@endpush
		<!-- Contact Section Start -->
		<div class="contact-page-section sec-spacer">
        	<div class="container">
        		
        		<div class="sec-title-2 mb-20">
            	    <h2>CONTACT US(ENQUIRY)</h2>      
            		
            	</div>
        		<div class="row contact-address-section">
    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address</h4>
    						<p>Nawada - Shikhpura Barbigha, Nawada.</p>
    						
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="contact-info contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<p>+91 9631559349
							<br />
							
							</p>
    					</div>
    				</div>
    				<div class="col-md-4 pr-0">
    					<div class="contact-info contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<p>adventureitc@gmail.com <br /></p>
    						
    						
									
        				</div>
        			</div>
        		</div>
        		<div class="row mb-2">
        		<div class="col-lg-6">
        		<div class="contact-comment-section">
        			<h3>Enquiry Form</h3>
                    <div id="form-messages"></div>
					<form method="post" action="https://skit.net.in/contactus.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTg4MjQyOTAwNQ9kFgICAw9kFgICDQ8PFgIeB1Zpc2libGVoZGRkv0HQhi3PpcKdF1ylLASMc2/vUWs=" />
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="46798EB0" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAdMeSvPbGT6JHyl+OiETNZb1VXLCZniQEihPDabNrSt9NzhqBVdMB+AVo7zudn5893c/QZQc31mJWUAJxFJv5gKIy1ZWF6z4FVu70NVqFRM5eyiMklNm3N1aR6nQqY14bbN+DvxnwFeFeJ9MIBWR693cyScQ0jiBTyeGsI7+WOzlZus45w=" />
</div>
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Name*</label>
										
										<input name="name" id="name" name="name" class="form-control" type="text" placeholder="Enter Name" required="" AutoComplete="off" style="color:Black;" />

									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										
                                     <input name="email" id="email" name="email" class="form-control" type="email" placeholder="Enter Email" AutoComplete="off" style="color:Black;" />

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Subject*</label>
                    <input name="subject" id="subject" name="subject" class="form-control" type="text" placeholder="Enter Subject" AutoComplete="off" style="color:Black;" />

									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Phone *</label>
                    <input name="phone" id="phone" name="phone" class="form-control" type="number" placeholder="Enter Phone" required="" AutoComplete="off" style="color:Black;" />

									</div>
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12">    
									<div class="form-group">
										<label>Message *</label>
                       <textarea name="comments" rows="2" cols="20" id="comments" name="comments" class="form-control" type="text" placeholder="Enter Message" AutoComplete="off" style="height:160px;color:Black;">
</textarea>

									</div>
								</div>
							</div>							        
							<div class="form-group mb-0">
								
								
								 <input type="submit" name="Button1" value="Submit Now" id="Button1" class="btn-send" />

         
							</div>
							   
						</fieldset>
					</form>						
        		</div>
        		</div>
        		<div class="col-lg-6">
        		<h3>LOCATION MAP</h3>
        		<br />
        		
        		
        		<div>
        		{{-- <iframe 
				src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14512.143081758875!2d87.0800937!3d24.5879617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f0e8b5a981439b%3A0xdf71668ceb6d1f3c!2sShri%20Krishna%20ITI!5e0!3m2!1sen!2sin!4v1683272918234!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen=""></iframe> --}}
        		</div>
        		</div>
        		</div>

        		
        	</div>
        </div>
        <!-- Contact Section End -->     
@endsection