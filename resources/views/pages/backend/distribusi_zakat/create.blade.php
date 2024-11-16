@extends('layouts.backend.master')

@section('title', 'Tambah Data Distribusi Zakat — Masjid Nur Ilahi')
@section('content')

@push('timepicker-styles')
<link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/timepicker.css') }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    span.select2.select2-container.select2-container--classic {
        width: 100% !important;
    }

    .select2-container .select2-selection--single {
        border-color: #495057 !important;
    }
</style>
@endpush

<div class="container-fluid">

    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">
                    Tambah Data Distribusi Zakat
                </h5>
            </div>
            <div class="card-body">
                <p>
                    Dibawah ini adalah form untuk tambah data distribusi zakat.
                    <span class="d-none d-md-inline">
                        Data dibawah pastikan anda isi dengan benar dan lengkap ya, nanti datanya masuk menjadi laporan
                        distribusi zakat.
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Data Distribusi Zakat</h5>
                </div>
                <form method="POST" action="{{ route('distribusi_zakat.store') }}" enctype="multipart/form-data"
                    class="needs-validation">
                    @csrf
                    <div class="card-body">
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                <li>
                                    <h4>Ada error nih 😓</h4>
                                </li>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-row">
                            <div class="form-group col-12 mb-2">
                                <label for="nama_matkul">Nama Lengkap Mustahik <span class="text-danger">*</span></label>
                                <div class="">
                                    <select class="js-example-basic-single" name="nama_mustahik">
                                        <option></option>
                                        @foreach ($items as $item)
                                        <option value="{{ $item->nama_mustahik }}">{{ $item->nama_mustahik }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="form-group col-md-12">
                                <div class="alert bg-primary py-2" role="alert">
                                    Jika memilih jenis distribusi menggunakan beras maka isi tanpa satuan KG dan jika uang maka isi dengan nominal angka
                                </div>
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label for="jenis_zakat">Jenis Zakat <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="inputGroupSelect01" name="jenis_zakat" onchange="toggleInputFields()">
                                        <option value="" disabled selected>Pilih Jenis Dahulu...</option>
                                        <option value="Beras">Beras</option>
                                        <option value="Uang">Uang</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-8 mb-2" id="inputBeras" style="display: none;">
                                <label for="bayar_beras">Jumlah Beras <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="bayar_beras" type="number" value="{{ old('bayar_beras') }}" class="form-control" name="jumlah_beras">
                                </div>
                            </div>

                            <div class="form-group col-md-8 mb-2" id="inputUang" style="display: none;">
                                <label for="bayar_uang">Jumlah Uang <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="bayar_uang" type="number" value="{{ old('bayar_uang') }}" class="form-control" name="jumlah_uang">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary m-r-15" type="submit">Tambah</button>
                        <button class="btn btn-light" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('timepicker-scripts')
<script src="{{ url('cuba/assets/js/time-picker/jquery-clockpicker.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/time-picker/highlight.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/time-picker/clockpicker.js') }}"></script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            theme: "classic",
            width: 'resolve', // need to override the changed default
            placeholder: "Pilih Mustahik yang Terdaftar",
        });
    });

    function toggleInputFields() {
        var jenisZakat = document.getElementById('inputGroupSelect01').value;
        var inputBeras = document.getElementById('inputBeras');
        var inputUang = document.getElementById('inputUang');

        if (jenisZakat === 'Beras') {
            inputBeras.style.display = 'block';
            inputUang.style.display = 'none';
        } else if (jenisZakat === 'Uang') {
            inputBeras.style.display = 'none';
            inputUang.style.display = 'block';
        } else {
            inputBeras.style.display = 'none';
            inputUang.style.display = 'none';
        }
    }
</script>
@endpush

@endsection