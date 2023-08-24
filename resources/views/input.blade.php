@extends('layouts.app')

@section('content')
    <div style="padding: 24px 0px 24px 0px">
        <form class="container" action="/store" method="POST">
            @csrf
            {{-- <h1 style="margin: 0px 0px 30px 0px">Form Data</h1> --}}
            <div class="mb-3">
                <label for="" class="form-label">Nama Pemesan <span style="color: red">*</span></label>
                <input required type="text" class="form-control" name="nama_pemesan" placeholder="Nama Lengkap">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone </div> --}}
            </div>

            <div class="mb-3">
                <label for="" class="form-label form-check-inline">Jenis Kelamin</label>
                <div class="form-check">
                    <label class="form-check-label">Laki-laki</label>
                    <input class="form-check-input" type="radio" name="jenis_kelamin">
                </div>

                <div class="form-check">
                    <label class="form-check-label" >Perempuan</label>
                    <input checked class="form-check-input" type="radio" name="jenis_kelamin">
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nomor Identitas</label>
                <input type="number" placeholder="16" class="form-control" name="nomor_identitas">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Tipe Kamar</label>
                <select required name="tipe_kamar" class="form-select">
                    <option value="">None</option>
                    <option value="Standar">Standar</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Family">Family</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input type="number" class="form-control" placeholder="500.000" value="500000" name="harga">
            </div>

            <div class="row g-3">
                <div class="mb-3 col-sm-4">
                    <label for="">Tanggal Pesan</label>
                    <input type="date" placeholder="DD/MM/YY" name="tanggal_pesan">
                </div>

                <div class="mb-3 col-sm">
                    <label for="">Durasi Menginap</label>
                    <input type="number" placeholder="" name="durasi_menginap" > Hari
                </div>

                <div class="mb-3 col-sm">
                    <label for="">Termasuk Breakfast</label>
                    <input class="form-check-input" type="checkbox" value="Ya" name="breakfast"> Ya            
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Total Bayar</label>
                <input type="number" class="form-control" placeholder="500.000" value="500000" name="total_bayar">
            </div>

            <!-- Button Submit Input -->
            <button type="submit" name="submit" value="Save" class="btn btn-primary" onclick="">Submit</button>
        </form>
    </div>
@endsection