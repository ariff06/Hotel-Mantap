@extends('layouts.admin', ['title'=>'Manage Facilities'])

@section('content-header')
<h1 class='m-0'> Manage Fasilitas</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary md-2" type="button">Add Facilities</button>
        </div>

            <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Facilitiess</th>
                    <th>Floor</th>
                    <th>operating hours</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Gym</td>
                    <td>3</td>
                    <td>24 Hours</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Restaurant</td>
                    <td>1 and 3</td>
                    <td>07:00 AM Until 09:00 PM</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Swimming Pool</td>
                    <td>3</td>
                    <td>06:00 AM Until 12:00 AM</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Services</td>
                    <td>-</td>
                    <td>24 Hours</td>
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