@extends('layouts.resep', ['title'=>'User Resepsionis'])

@section('content-header')
<h1 class='m-0'> <i class="data-feather"></i>Reservations</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Tamu</th>
                    <th>Tanggal Cek In</th>
                    <th>Tanggal Cek Out</th>
                    <th>Type Kamar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
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