@extends('web.include.master')

@section('master-content')

@push('name')
    <title>Notice Board</title>
    
@endpush
        <!-- Why Choose Us Start-->
        <div class="rs-why-choose sec-spacer" style=" padding-top:20px;">
            <div class="container">
        		<div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="sec-title mb-40">
		                    <h2>Notice Board</h2> 
		                </div>
                        @php
                            // echo "<pre>";
                            //     print_r($notice);
                            //     die;
                        @endphp
		                <form>
                            @foreach ($notice as $item)
                                <div class="news-desc">
                                    <div class="col-lg-12 col-md-12" style="border-bottom-style: Dashed; border-width: thin; border-color: #808080;     padding:5px;">
                                        <a href='{{asset('uploads/notice')}}/{{$item->file}} ' target="_blank" style="">
                                            <i class="fa fa-bell-o"></i>
                                            <span id="Repeater2_Label4_0" style="color:Blue;font-size:Medium;font-weight:bold;">{{$item->title}} </span>
                                            <span id="Repeater2_Label5_0">-</span>
                                            <span id="Repeater2_Label6_0" style="font-size:Medium;text-align:justify; color:Red">Download</span><img src="{{asset('web/newicon.gif')}} " style="vertical-align:middle;" />
                                        </a>
                                    </div>    
                                    <br />
                                </div>
                            @endforeach
	                    </form>
                    </div>
                 
        		</div>
            </div>
        </div>
        <!-- Why Choose Us End -->

@endsection