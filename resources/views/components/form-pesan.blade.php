<form method="post" action="{{ route('reservations.store') }}" class="row bg-white py-4 px-3 form-pesan border shadow rounded">
        @csrf
        <div class="col-md-6 mb-3">
            <label for="guest_name" class="form-label">Nama Tamu</label>
            <input type="text" id="guest_name" name="guest_name" class="form-control" placeholder="Nama Tamu" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="guest_email" class="form-label">Email Tamu</label>
            <input type="email" id="guest_email" name="guest_email" class="form-control" placeholder="Email Tamu" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="check_in_date" class="form-label">Check In</label>
            <input type="date" id="check_in_date" name="check_in_date" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="check_out_date" class="form-label">Check Out</label>
            <input type="date" id="check_out_date" name="check_out_date" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="room_type" class="form-label">Tipe Kamar</label>
            <select id="room_type" name="room_type" class="form-select" required>
                <option value="" disabled selected>Pilih Tipe Kamar</option>
                <option value="Standart">Standart</option>
                <option value="Suite">Suite</option>
                <option value="Deluxe">Deluxe</option>
            </select>
        </div>
        <div class="col-md-6 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100 py-2">Pesan</button>
        </div>
</form>

<!-- Modal Konfirmasi -->
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservationModalLabel">Reservasi Berhasil</h5>
            </div>
            <div class="modal-body">
                <p>Reservasi Anda berhasil dibuat. Berikut adalah detail reservasi Anda:</p>
                <ul>
                    <li>ID Reservasi: <span id="reservationId"></span></li>
                    <li>Nama Tamu: <span id="reservationGuestName"></span></li>
                    <li>Email Tamu: <span id="reservationGuestEmail"></span></li>
                    <li>Check In: <span id="reservationCheckIn"></span></li>
                    <li>Check Out: <span id="reservationCheckOut"></span></li>
                    <li>Tipe Kamar: <span id="reservationRoomType"></span></li>
                    <li>Status: <span id="reservationStatus"></span></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script>
    @if(session('lastReservation'))
        var reservation = @json(session('lastReservation'));
        document.getElementById('reservationId').innerText = reservation.id;
        document.getElementById('reservationGuestName').innerText = reservation.guest_name;
        document.getElementById('reservationGuestEmail').innerText = reservation.guest_email;
        document.getElementById('reservationCheckIn').innerText = reservation.check_in_date;
        document.getElementById('reservationCheckOut').innerText = reservation.check_out_date;
        document.getElementById('reservationRoomType').innerText = reservation.room_type;
        document.getElementById('reservationStatus').innerText = reservation.status;
        var reservationModal = new bootstrap.Modal(document.getElementById('reservationModal'));
        reservationModal.show();
    @endif
</script>