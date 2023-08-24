@extends('layouts.app')

@section('content')
    <div style="padding: 24px 0px 24px 0px">
        <form class="container" action="/store" method="POST">
            @csrf
            {{-- <h1 style="margin: 0px 0px 30px 0px">Form Data</h1> --}}
            <div class="mb-3">
                <label for="" class="form-label">Nama Pemesan <span style="color: red">*</span></label>
                <input required type="text" class="form-control" name="nama_pemesan" placeholder="Nama Lengkap">
            </div>

            <div class="mb-3">
                <label for="" class="form-label form-check-inline">Jenis Kelamin</label>
                <div class="form-check">
                    <label class="form-check-label">Laki-laki</label>
                    <input required class="form-check-input" type="radio" value="Laki-laki" name="jenis_kelamin">
                </div>

                <div class="form-check">
                    <label class="form-check-label" >Perempuan</label>
                    <input required class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin">
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nomor Identitas <span style="color: red">*</span></label>
                <input required type="number" placeholder="16" class="form-control" name="nomor_identitas" oninput="validateIdentitas(this)">
                <small id="identitasWarning" class="form-text text-danger" style="display:none;">Nomor Identitas terdiri maksimal 16 karakter.</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Tipe Kamar <span style="color: red">*</span></label>
                <select required name="tipe_kamar" class="form-select" onchange="updateHarga()">
                    <option value="">None</option>
                    <option value="Standar">Standar</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Family">Family</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input required type="number" class="form-control" placeholder="Harga" id="inputHarga" name="harga" readonly>
                <div id="emailHelp" class="form-text">*Harga akan muncul setelah memilih kamar.</div>
            </div>

            <div class="row">
                <div class="mb-3 col-sm">
                    <label for="">Tanggal Pesan<span style="color: red">*</span></label>
                    <input required type="date" placeholder="DD/MM/YY" name="tanggal_pesan">
                </div>

                <div class="mb-3 col-sm">
                    <label for="">Durasi Menginap<span style="color: red">*</span></label>
                    <input required type="number" placeholder="Hari" min="0" id="inputDurasi" name="durasi_menginap" oninput="validateHari(this)"> Hari
                    <small id="hariWarning" class="form-text text-danger" style="display:none;">Hari melebihi jumlah batas.</small>
                </div>

                <div class="mb-3 col-sm">
                    <label for="">Termasuk Breakfast (Opsional)</label>
                    <input class="form-check-input" type="checkbox" value="Ya" id="inputBreakfast" name="breakfast" onchange="updateBreakfastValue()"> Ya            
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Total Bayar</label>
                <input required type="number" class="form-control" placeholder="Total Bayar" id="inputTotalBayar" name="total_bayar" readonly>
            </div>

            {{-- Tombol Cek Harga --}}
            <div class="mb-3">
                <button type="button" class="btn btn-success" onclick="updateTotalBayar()">Hitung Total Bayar</button>
            </div>

            <!-- Button Submit Input -->
            <button type="submit" name="submit" value="Save" class="btn btn-primary" onclick="updateTotalBayar()">Submit</button>
        </form>
    </div>

    <script>
        // Validasi Data
        function validateIdentitas(input) {
            var maxLength = 16;
            var identitasWarning = document.getElementById("identitasWarning");

            if (input.value.length > maxLength) {
                input.setCustomValidity("Nomor Identitas terdiri maksimal 16 karakter.");
                identitasWarning.style.display = "block";
            } else {
                input.setCustomValidity("");
                identitasWarning.style.display = "none";
            }
        }

        function validateHari(input) {
            var maxHari = 30; // Misalnya, Anda dapat mengganti nilainya sesuai kebutuhan
            var hariWarning = document.getElementById("hariWarning");
            var enteredValue = parseInt(input.value);

            if (enteredValue < 0 || enteredValue > maxHari || isNaN(enteredValue)) {
                input.setCustomValidity("Hari melebihi jumlah batas.");
                hariWarning.style.display = "block";
            } else {
                input.setCustomValidity("");
                hariWarning.style.display = "none";
            }
        }

        
        //Perhitungan Harga
        function updateHarga() {
            var tipeKamarSelect = document.getElementsByName("tipe_kamar")[0];
            var inputHarga = document.getElementById("inputHarga");

            if (tipeKamarSelect.value === "Standar") {
                inputHarga.value = "500000";
            } else if (tipeKamarSelect.value === "Deluxe") {
                inputHarga.value = "800000";
            } else if (tipeKamarSelect.value === "Family") {
                inputHarga.value = "1200000";
            }
        }

        function updateTotalBayar() {
            var tipeKamarSelect = document.getElementsByName("tipe_kamar")[0];
            var inputDurasi = document.getElementById("inputDurasi");
            var inputBreakfast = document.getElementById("inputBreakfast");
            var inputTotalBayar = document.getElementById("inputTotalBayar");

            var hargaPerHari = 0;
            if (tipeKamarSelect.value === "Standar") {
                hargaPerHari = 500000;
            } else if (tipeKamarSelect.value === "Deluxe") {
                hargaPerHari = 800000;
            } else if (tipeKamarSelect.value === "Family") {
                hargaPerHari = 1200000;
            }

            var durasiMenginap = parseFloat(inputDurasi.value);
            var totalHargaKamar = hargaPerHari * durasiMenginap;
            var totalHarga = totalHargaKamar;

            if (inputBreakfast.checked) {
                totalHarga += 80000;
            }

            // Diskon 10% hanya untuk total harga kamar
            if (durasiMenginap > 3) {
                var diskon = totalHargaKamar * 0.1;
                totalHarga -= diskon;
            }

            inputTotalBayar.value = totalHarga;
        }
    </script>
@endsection