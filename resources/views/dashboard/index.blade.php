@extends('template.main')
@section('konten')             
           <!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="{{asset('ablepro-master')}}dist/assets/images/logo.png" alt="" class="logo">
						<img src="{{asset('ablepro-master')}}dist/assets/images/logo-icon.png" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="{{asset('ablepro-master')}}/dist/assets/images-radius" src="{{asset('ablepro-master')}}dist/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="{{asset('ablepro-master')}}dist/assets/images-radius" src="{{asset('ablepro-master')}}dist/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="{{asset('ablepro-master')}}/dist/assets/images-radius" src="{{asset('ablepro-master')}}dist/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="{{asset('ablepro-master')}}/dist/assets/images-radius" src="{{asset('ablepro-master')}}dist/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="{{asset('ablepro-master')}}dist/assets/assets/images/user/avatar-1.jpg" class="{{asset('ablepro-master')}}/dist/assets/images-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="auth-signin.html" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Keuangan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Keuangan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- support-section start -->

			<div class="row">
				<style>
					.my-element {
						margin: -20px;
					}
				</style>
                    <div class="col-sm-4">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-8">
                                <h2 class="m-0" align="center" style="color: #97c262;">Rp 30.200</h2>
                            </div>
                            <div class="card-footer bg-success text-white">
                                <div><h5 style="color: white">Total Pemasukan</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-8">
                                <h2 class="m-0" align="center" style="color: #e64524;" >Rp 30.200</h2>
								<i class="fa-solid fa-square-poll-vertical" style="color: #abd874;"></i>
                            </div>
                            <div class="card-footer bg-danger text-white">
                                <div><h5 style="color: white">Total Pengeluaran</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-8">
                                <h2 class="m-0" align="center" style="color: #efaa14;">350</h2>
                            </div>
                            <div class="card-footer bg-warning text-white">
                                <div><h5 style="color: white">Saldo Akhir</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
    {{-- table Keuangan --}}
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header">
							<h3>Data Keuangan</h3>
						</div>
						<div class="card-body table-border-style">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>NO</th>
											<th>TANGGAL</th>
											<th>NOMINAL</th>
											<th>URAIAN</th>
											<th>KETERANGAN</th>
										</tr>
									</thead>
									<tbody>
										@php
											$no = 1;
										@endphp
										@foreach ($data as $item)
											<tr>
												<td>{{ $no++ }}</td>
												<td>{{ $item->tanggal }}</td>
												<td>{{ $item->nominal }}</td>
												<td>{{ $item->uraian }}</td>
												<td>{{ $item->keterangan }}</td>
												<td>
													<a class="btn btn-dark rounded-pill m-2" href="{{route('editpenerbit',$item->id)}}">Edit</a>
													<a class="btn btn-light rounded-pill m-2" href="{{route('hapuspenerbit',$item->id)}}">Hapus</a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div style="align: right">
						<nav >
							<ul class="pagination justify-content-end">
								<li class="page-item disabled"><span class="page-link">Previous</span></li>
								<li class="page-item"><a class="page-link" href="#!">1</a></li>
								<li class="page-item active"><span class="page-link">2<span class="sr-only">(current)</span></span>
								</li>
								<li class="page-item"><a class="page-link" href="#!">3</a></li>
								<li class="page-item"><a class="page-link" href="#!">Next</a></li>
							</ul>
						</nav>
					</div>
					</div>
				</div>
					
                
                <!-- support-section end --!>

		 

@endsection
