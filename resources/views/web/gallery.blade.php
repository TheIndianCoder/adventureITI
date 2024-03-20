@extends('web.include.master')

@section('master-content')

@push('name')
    <title>Our Gallery</title>
    
@endpush
       <!-- Gallery Start -->
        <div class="rs-gallery-4 rs-gallery sec-spacer">
            <div class="container">
            	<div class="sec-title-2 mb-50 text-center">
            	    <h2>PHOTO GALLERY</h2>      
            		
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