@extends('layouts.admin', ['title'=>'Manage Fasilitas'])

@section('content-header')
<h1 class='m-0'> Manage Fasilitas</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary md-2" type="button" data-bs-toggle="modal" data-bs-target="#addFacilityModal">Add Facilities</button>
        </div>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Facilities</th>
                    <th>Floor</th>
                    <th>Operating Hours</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($facilities as $facility)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $facility->name }}</td>
                    <td>{{ $facility->floor }}</td>
                    <td>{{ $facility->operating_hours }}</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <form action="{{ route('admin.facilities.destroy', $facility->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>

    <!-- Add Facility Modal -->
    <div class="modal fade" id="addFacilityModal" tabindex="-1" aria-labelledby="addFacilityModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFacilityModalLabel">Tambah Fasilitas Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.facilities.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Facilities</label>
                            <select name="name" class="form-control" required>
                                <option value="Gym">Gym</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Swimming Pool">Swimming Pool</option>
                                <option value="Services">Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="floor">Floor</label>
                            <input type="text" name="floor" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="operating_hours">Operating Hours</label>
                            <input type="text" name="operating_hours" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Fasilitas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Edit Facility Modal -->
<div class="modal fade" id="editFacilityModal" tabindex="-1" aria-labelledby="editFacilityModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFacilityModalLabel">Edit Fasilitas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editFacilityForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editFacilityId">
                    <div class="form-group">
                        <label for="editName">Name</label>
                        <input type="text" name="name" id="editName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="editFloor">Floor</label>
                        <input type="text" name="floor" id="editFloor" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="editOperatingHours">Operating Hours</label>
                        <input type="text" name="operating_hours" id="editOperatingHours" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Facility</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>