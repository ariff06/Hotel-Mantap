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
            @foreach($reservations as $reservation)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $reservation->guest_name }}</td>
                        <td>{{ $reservation->check_in_date }}</td>
                        <td>{{ $reservation->check_out_date }}</td>
                        <td>{{ $reservation->room_type }}</td>
                        <td>{{ $reservation->status }}</td>
                        <td>
                            <!-- Tambahkan aksi yang diperlukan, misalnya tombol untuk mengubah status -->
                            @if($reservation->status == 'belum di konfirmasi')
                            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Konfirmasi</button>
                            </form>
                            @else
                            <span class="badge badge-success">Sudah di konfirmasi</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
            </tbody>
            </table>
        </div>
    </div>
@endsection