@extends('layouts.layout')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, User!</h2>


            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="../assets/img/akuku.jpg" class="rounded-circle profile-widget-picture">
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">Evina Dinda Syawalia <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Web Developer
                                </div>
                            </div>
                            Halo Semua <b>Saya</b>, Evina Dinda Syawalia</b>.
                            <p>
                                Aplikasi ini dibuat  <b>oleh</b>, Evina Dinda Syawalia</b>.
                                
                            </p>
                            <p>
                                  <b>NIM</b> 1931710072</b>.
                                
                            </p>
                            <p>
                                 <b>Tanggal</b> 30 Oktober 2021</b>.
                                
                            </p>
                        </div>

                    </div>
                </div>
            </div>
    </section>
</div>
@endsection