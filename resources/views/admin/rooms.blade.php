@extends('layouts.admin', ['title'=>'User Atmin'])

@section('content-header')
<h1 class='m-0'> Manage Rooms</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary md-2" type="button" data-bs-toggle="modal" data-bs-target="#addRoomModal">Add Rooms</button>
        </div>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Room Type</th>
                    <th>Floor</th>
                    <th>Total Rooms</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $room->room_type }}</td>
                    <td>{{ $room->floor }}</td>
                    <td>{{ $room->total_rooms }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editRoomModal" data-id="{{ $room->id }}" data-room_type="{{ $room->room_type }}" data-floor="{{ $room->floor }}" data-total_rooms="{{ $room->total_rooms }}">Edit</button>
                        <form action="{{ route('admin.rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
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

    <!-- Add Room Modal -->
    <div class="modal fade" id="addRoomModal" tabindex="-1" aria-labelledby="addRoomModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRoomModalLabel">Tambah Room Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.rooms.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="room_type">Room Type</label>
                            <select name="room_type" class="form-control" required>
                                <option value="Standart">Standart</option>
                                <option value="Suite">Suite</option>
                                <option value="Deluxe">Deluxe</option>
                            </select>
                            @if ($errors->has('room_type'))
                                <span class="text-danger">{{ $errors->first('room_type') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="floor">Floor</label>
                            <input type="number" name="floor" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="total_rooms">Total Rooms</label>
                            <input type="number" name="total_rooms" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Room</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Room Modal -->
    <div class="modal fade" id="editRoomModal" tabindex="-1" aria-labelledby="editRoomModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editRoomModalLabel">Edit Room</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form id="updateRoomForm" action="{{ route('admin.rooms.update', $room->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Sesuai dengan HTTP method update -->
                    <input type="hidden" name="id" value="{{ $room->id }}">

                    <div class="mb-3">
                        <label for="room_type" class="form-label">Room Type</label>
                        <input type="text" class="form-control" id="room_type" name="room_type" value="{{ $room->room_type }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="floor" class="form-label">Floor</label>
                        <input type="number" class="form-control" id="floor" name="floor" value="{{ $room->floor }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="total_rooms" class="form-label">Total Rooms</label>
                        <input type="number" class="form-control" id="total_rooms" name="total_rooms" value="{{ $room->total_rooms }}" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var editRoomModal = document.getElementById('editRoomModal');

        editRoomModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');

            // Mengambil data dari server menggunakan fetch API
            fetch('/admin/rooms/' + id + '/edit')
                .then(response => response.json())
                .then(data => {
                    var editRoomType = editRoomModal.querySelector('#editRoomType'); // Room Type (Disabled)
                    var editFloor = editRoomModal.querySelector('#editFloor');
                    var editTotalRooms = editRoomModal.querySelector('#editTotalRooms');

                    editRoomType.value = data.room_type; 
                    editFloor.value = data.floor;
                    editTotalRooms.value = data.total_rooms;
                })
                .catch(error => console.error('Error fetching room data:', error));
        });
    });
</script> -->

