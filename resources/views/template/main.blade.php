<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donatur Keuangan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('ablepro-master')}}/dist/assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('ablepro-master')}}/dist/assets/css/style.css">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius">
						<div class="user-details">
							<div id="more-details">UX Designer</div>
						</div>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item">
					    <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item">
					    <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"> <i class="fas fa-users"></i></span><span class="pcoded-mtext">Users</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fas fa-wallet"></i></span><span class="pcoded-mtext">Keuangan</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="{{ route('uangmasuk.index')}}" target="">Uang Masuk</a></li>
					        <li><a href="" target="">Uang Keluar</a></li>
					    </ul>
					</li>

				</ul>
				
				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Download Pro</h6>
						<p>Getting more features with pro version</p>
						<a href="https://1.envato.market/qG0m5" target="_blank" class="btn btn-primary btn-sm text-white m-0">Upgrade Now</a>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->

    @yield('konten')
    
	
      
            


    <!-- Required Js -->
    <script src="{{asset('ablepro-master')}}/dist/assets/js/vendor-all.min.js"></script>
    <script src="{{asset('ablepro-master')}}/dist/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset('ablepro-master')}}/dist/assets/js/ripple.js"></script>
    <script src="{{asset('ablepro-master')}}/dist/assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="{{asset('ablepro-master')}}/dist/assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="{{asset('ablepro-master')}}/dist/assets/js/pages/dashboard-main.js"></script>
</body>

</html>
