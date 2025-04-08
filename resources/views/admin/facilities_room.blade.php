@extends('layouts.admin', ['title'=>'User Atmin'])

@section('content-header')
<h1 class='m-0'> Manage Rooms</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Room Type</th>
                    <th>Facilities Room</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Standart</td>
                    <td>
                        1. TV <br>
                        2. AC <br>
                        3. bathroom
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Suite</td>
                    <td>
                        1. TV <br>
                        2. AC <br>
                        3. bathroom <br>
                        4. Soffa & Coffe Maker
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Deluxe</td>
                    <td>
                    1. TV <br>
                        2. AC <br>
                        3. Bathroom & Bathub <br>
                        4. Soffa & Coffe Maker <br>
                        5. Mini Bar
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
@endsection