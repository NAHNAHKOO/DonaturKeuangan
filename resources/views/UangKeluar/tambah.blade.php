@extends('template.main')
@section('konten')

{{-- !-- [ Header ] start --> --}}
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
 
 
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ asset('ablepro-master') }}dist/assets/images/logo.png" alt="" class="logo">
                <img src="{{ asset('ablepro-master') }}dist/assets/images/logo-icon.png" alt="" class="logo-thumb">
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
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="icon feather icon-bell"></i></a>
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
                                        <img class="{{ asset('ablepro-master') }}/dist/assets/images-radius"
                                            src="{{ asset('ablepro-master') }}dist/assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="{{ asset('ablepro-master') }}dist/assets/images-radius"
                                            src="{{ asset('ablepro-master') }}dist/assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="{{ asset('ablepro-master') }}/dist/assets/images-radius"
                                            src="{{ asset('ablepro-master') }}dist/assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="{{ asset('ablepro-master') }}/dist/assets/images-radius"
                                            src="{{ asset('ablepro-master') }}dist/assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span></p>
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
                                <img src="{{ asset('ablepro-master') }}dist/assets/assets/images/user/avatar-1.jpg"
                                    class="{{ asset('ablepro-master') }}/dist/assets/images-radius"
                                    alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i>
                                        Profile</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My
                                        Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i>
                                        Lock Screen</a></li>
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
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Keuangan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->



            <div class="card">
                <div class="card-body table-border-style">
                    <h3 class="mb-3">Tambah Data Uang Keluar</h3>
                    <hr class="col-mt-20" style="border: 1px solid black;">
            <div class="row">
                
    <div class="col-md-12">
       
       
        
        
        <form method="POST" action="{{route('simpanuangkeluar')}}">
            @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" placeholder="Text">
                                @error('tanggal')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Mutasi</label>
                                    <select class="form-control" name="jenismutasi" id="exampleFormControlSelect1">
                                        <option hidden>- Pilih jenis mutasi</option>
                                        <option value="uang_masuk">Uang Masuk</option>
                                        <option value="uang_keluar">Uang Keluar</option>
                                    </select>
                                    @error('jenismutasi')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                                </div>
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nominal</label>
                                    <input type="text" name="nominal"class="form-control" placeholder="Masukkan nominal">
                                    @error('nominal')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                        
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterangan">
                                     @error('keterangan')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                       
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Uraian</label>
                                    <textarea name="uraian" class="form-control" id="" cols="30" rows="10"></textarea>
                                @error('uraian')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
 
                        <center>
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </center>
 
                    </form>

    </div>
</div>

             
@endsection
