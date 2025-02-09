@extends('layouts.tamu')

@section('content')

<x-form-pesan/>

    <h1 class="text-center my-4" id="fasilitas">Facilities</h1>
    
    <div class="row fasilitas">
        <div class="col-md-3">
            <a class="card card-light" >
                <div class="card-header">
                    Gym
                </div>
                <div class="card-body p-1">
                    <img src="images/sarapan.jpg" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        <div class="col-md-3">
            <a class="card card-light" >
                <div class="card-header">
                    Swimming Pool
                </div>
                <div class="card-body p-1">
                    <img src="images/kolam_renang.jpg" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        <div class="col-md-3">
            <a class="card card-light">
                <div class="card-header">
                    Restaurant
                </div>
                <div class="card-body p-1">
                    <img src="images/restoran.jpg" class="img-fluid rounded" />
                </div>
                
            </a>
        </div>
        <div class="col-md-3">
            <a class="card card-light">
                <div class="card-header">
                24-hour services
                </div>
                <div class="card-body p-1">
                    <img src="images/resepsionis.jpg" class="img-fluid rounded" />
                </div>
            </a>
        </div>
    </div>

    <h1 class="text-center my-4" id="kamar">Rooms</h1>

    <div class="row kamar">
        <div class="col-md-4">
            <a class="card card-light">
                <div class="card-header">
                    Standart Room
                </div>
                <div class="card-body p-1">
                    <img src="images/kamar_standar.jpg" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    Rp. 400.000
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="card card-light" >
                <div class="card-header">
                    Suite Room
                </div>
                <div class="card-body p-1">
                    <img src="images/kamar_suite.jpg" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    Rp. 750.000
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="card card-light">
                <div class="card-header">
                    Deluxe Room
                </div>
                <div class="card-body p-1">
                    <img src="images/kamar_deluxe.jpg" class="img-fluid rounded" />
                </div>
                <div class="card-footer">
                    Rp. 1.000.000
                </div>
            </a>
        </div>
    </div>

    <h1 class="text-center my-4">About</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta reprehenderit, alias totam, nam consequuntur provident doloribus perferendis vero impedit saepe sit fugit quod! Ut, libero repudiandae! Enim consequatur asperiores, blanditiis, labore reiciendis iure mollitia nulla vitae itaque culpa necessitatibus incidunt ratione id debitis ut laborum eaque recusandae quia adipisci molestias aut exercitationem? Quaerat dicta soluta distinctio delectus exercitationem ad harum?</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iusto voluptate alias consectetur aperiam dignissimos cum sunt quas nihil aliquid laborum, provident eveniet id placeat esse earum sapiente deleniti maxime ducimus, nostrum excepturi neque voluptatum nisi ipsum? Autem fuga ullam, asperiores atque nam odio, eos, excepturi adipisci ipsam animi in?</p>
@endsection