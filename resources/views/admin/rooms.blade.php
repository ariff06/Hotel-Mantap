@extends('layouts.admin', ['title'=>'User Atmin'])

@section('content-header')
<h1 class='m-0'> Manage Rooms</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary md-2" type="button">Add Rooms</button>
        </div>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Room Type</th>
                    <th>Floor</th>
                    <th>Total Rooms</th>
                    <th>Room Facilities</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Standart</td>
                    <td>1</td>
                    <td>25</td>
                    <td>AC - TV - Shower - Wi-Fi</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Suite</td>
                    <td>2</td>
                    <td>15</td>
                    <td>AC - TV - Shower & Bathtub - Wi-Fi</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Deluxe</td>
                    <td>3</td>
                    <td>10</td>
                    <td>AC - TV - Shower & Bathtub - Soffa - Coffe Maker - Wi-Fi</td>
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