<!DOCTYPE html>
<html lang="en">


<head>

    <!-- Title -->
	<title>Adventure Pvt. ITI | Admin Register</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="dexignlabs">
	<meta name="robots" content="index, follow">
	

	<meta name="format-detection" content="telephone=no">

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	
	<!-- STYLESHEETS -->
	<link href="{{asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}} " rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}} ">

</head>
<body>
    <div class="fix-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card mb-0 h-auto">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="text-center mb-2">
                                <a href="index.html">
                                    <h2>Adventure ITI</h2>                                                                                             
                                </a>
                            </div>
                            <h4 class="text-center mb-4">Create Admin account</h4>
                            <form action="{{route('admin.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="Name">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="username" name="name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-4 position-relative">
                                    <label class="form-label" for="dlabPassword">Password</label>
                                    <input type="password" id="dlabPassword" name="password" class="form-control" value="123456">
                                    <span class="show-pass eye">
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor/global/global.min.js')}} "></script>
	<script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/js/dlabnav-init.js')}}"></script>
    <script src="{{asset('admin/js/demo.js')}}"></script>
    
</body>


</html>