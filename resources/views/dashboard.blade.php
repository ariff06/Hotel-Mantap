@extends('layouts.admin',['title'=>'Dashboard'])


@section('content-header')
<h1 class='m-0'>Dashboard</h1>
@endsection


@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="m-0">Featured</h5>
    </div>
    <div class="card-body">
        <h6 class="card-title">1. Tamu dapat melihat informasi tentang tipe kamar yang tersedia beserta fasilitas setiap tipe kamar dan fasilitas-fasilitas yang tersedia di Hotel  ✓</h6><br><br>
        <h6 class="card-title">2. Tamu dapat melakukan reservasi kamar secara online  ✓</h6><br><br>
        <h6 class="card-title">3. Tamu hanya bisa memesan tipe kamar yang sama saat melakukan pemesanan lebih dari 1 kamar dalam 1 kali pemesanan  ✓</h6><br><br>
        <h6 class="card-title">4. Tamu dapat mencetak bukti reservasi untuk diserahkan resepsionis pada saat check-in  ✓</h6><br><br>-
        <br>
        <br>
        <h6 class="card-title">1. Admin dapat menambah, dan mengupdate data kamar  ✓  <b>button Edit belum berfungsi</b></h6><br><br>
        <h6 class="card-title">2. Admin dapat menambah, dan mengupdate data fasilitas kamar</h6><br><br>
        <h6 class="card-title">3. Admin dapat menambah, dan mengupdate data fasilitas umum hotel  ✓<b>button Edit belum berfungsi</b></h6><br><br>-
        <br>
        <br>
        <h6 class="card-title">1. Resepsionis dapat melakukan pengecekan data reservasi  ✓</h6><br><br>
        <h6 class="card-title">2. Resepsionis dapat melakukan filtering berdasarkan tanggal check-in</h6><br><br>
        <h6 class="card-title">3. Resepsionis dapat melakukan pencarian data reservasi berdasarkan nama tamu</h6><br><br>
        <br>
        <p class="card-text">- <b>Login page tidak berfungsi</b>, masih ada bug pada Authenticate</p>
        <!-- <a href="{{ route ('resep.index') }}" class="btn btn-primary">Receptionist Page</a> -->
    </div>
</div>
@endsection