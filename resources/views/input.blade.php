@extends('layouts.app')

@section('content')
    <div style="padding: 24px 0px 24px 0px">
        <form action="#" method="POST" class="container">
            {{-- <h1 style="margin: 0px 0px 30px 0px">Form Data</h1> --}}
            <div class="mb-3">
                <label for="" class="form-label">Nama Pemesan <span style="color: red">*</span></label>
                <input required type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone </div> --}}
            </div>

            <div class="mb-3">
                <label for="" class="form-label form-check-inline">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="" id="">
                    <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                </div>

                <div class="form-check">
                    <label class="form-check-label" for="">Default checked radio</label>
                    <input checked class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nomor Identitas</label>
                <input type="number" name="nomor_identitas" placeholder="16" class="form-control">
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
                <input disabled type="text" value="" placeholder="500.000" class="form-control">
            </div>

            <div class="row g-3">
                <div class="mb-3 col-sm-4">
                    <label for="">Tanggal Pesan</label>
                    <input type="date" name="tanggal_pesan" placeholder="DD/MM/YY">
                </div>

                <div class="mb-3 col-sm">
                    <label for="">Durasi Menginap</label>
                    <input type="number" name="durasi_menginap" placeholder=""> Hari
                </div>

                <div class="mb-3 col-sm">
                    <label for="">Termasuk Breakfast</label>
                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="Ya"> Ya            
                </div>
            </div>

            <div class="mb-3">
                <label for="">Total Bayar</label>
                <input disabled type="text" name="" id="" placeholder="Rp. 1.500.000">
            </div>
        </form>
    </div>
@endsection