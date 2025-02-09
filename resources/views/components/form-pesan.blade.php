<form method="get" action="?" class="row bg-white py-4 px-2 form-pesan border shadow">
    <div class="col-md">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-white border-0">Check In</span>
            </div>
            <input type="date" class="form-control rounded" placeholder="Check In">
        </div>
    </div>
    <div class="col-md">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-white border-0">Check Out</span>
            </div>
            <input type="date" class="form-control rounded" placeholder="Check Out">
        </div>
    </div>
    <div class="col-md-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-white border-0">Number of Rooms</span>
            </div>
            <input type="text" class="form-control rounded" maxlength="3">
        </div>
    </div>
    <div class="col-md-1">
        <button type="button" class="btn btn-block btn-info" data-bs-toggle="modal" data-bs-target="#reservationModal">Pesan</button>
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservationModalLabel">Form Reservasi</h5>
            </div>
            <div class="modal-body">
                <form id="reservationForm" method="post" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="guestName" class="form-label">Nama Tamu</label>
                        <input type="text" class="form-control" id="guestName" name="guestName" required>
                    </div>
                    <div class="mb-3">
                        <label for="guestEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="guestEmail" name="guestEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomType" class="form-label">Tipe Kamar</label>
                        <select class="form-select" id="roomType" name="roomType" required>
                            <option value="Standart">Standart</option>
                            <option value="Suite">Suite</option>
                            <option value="Deluxe">Deluxe</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Konfirmasi Pesanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<!-- <script>
function confirmReservation() {
    if (confirm("Apakah reservasi ingin dicetak?")) {
        // Jika pengguna mengklik "Oke", lanjutkan dengan pengiriman form
        document.getElementById('reservationForm').submit();
    } else {
        // Jika pengguna mengklik "Batal", batalkan pengiriman form
        return false;
    }
}
</script> -->
</form>
