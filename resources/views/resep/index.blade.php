@extends('layouts.resep', ['title'=>'User Resepsionis'])

@section('content-header')
<h1 class='m-0'> <i class="data-feather"></i> Dashboard</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">


            <table class="table table-hover table-striped">
            <thead>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-teal-500 p-6 flex justify-between items-center">
                <div>
                    <p class="text-4xl text-white font-bold">5</p>
                    <p class="text-white">Data Pesanan</p>
                </div>
                <div>
                    <i class="fas fa-home text-6xl text-white opacity-50"></i>
                </div>
            </div>
            <div class="bg-teal-600 p-2 text-center">
                <a href="{{ route('resep.order') }}" class="text-white flex items-center justify-center">
                    More info <i class="fas fa-arrow-circle-right ml-2"></i>
                </a>
            </div>
        </div>
                </thead>
            <tbody>
                <!-- <tr>
                    <td>1</td>
                    <td>Atmin</td>
                    <td>admin</td>
                    <td>admin</td>
                </tr> -->
            </tbody>
            </table>
        </div>
    </div>
@endsection

<script src="https://cdn.tailwindcss.com"></script>