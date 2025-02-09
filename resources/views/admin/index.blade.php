@extends('layouts.admin', ['title'=>'User Atmin'])

@section('content-header')
<h1 class='m-0'> <i class="data-feather"></i> User Admin</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary md-2" type="button">Add User</button>
        </div>

            <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama User</th>
                    <th>username</th>
                    <th>Role</th>
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