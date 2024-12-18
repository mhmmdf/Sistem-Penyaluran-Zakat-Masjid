@extends('layouts.backend.master')

@section('title', 'Selamat datang di Dashboard Masjid Nur Ilahi')
@section('content')

@push('datatable-styles')
<link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/scrollable.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/datatable-extension.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.3.1/dist/css/splide.min.css">
@endpush

<div class="container-fluid">
    <!--div class="row mb-4">
        <div class="col-xl-12 col-sm-12 mt-4">
            <div class="splide"
                style="box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px; border-radius:8px;">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{ url('images/splide/index.png') }}" class="d-block w-100"
                                style="border-radius:8px;">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div-->

    <div class="row mb-4 second-chart-list third-news-update">
        <div class="col-sm-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>💰 • Pembayaran Zakat Terbaru</span>
                </div>
                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <table class="display" id="auto-fill">
                            <thead>
                                <tr>
                                    <th>Nama Muzzaki</th>
                                    <th>Jenis Bayar</th>
                                    <th>Tanggungan Dibayar</th>
                                    <th>Bayar Beras</th>
                                    <th>Bayar Uang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="avatars mr-2">
                                                <div class="avatar ratio"><img
                                                        style="object-fit: cover;
                                                        width: 40px;
                                                        height: 40px;"
                                                        class="b-r-8"
                                                        src="https://ui-avatars.com/api/?background=004040&color=fff&name={{ $item->nama_muzakki }}">
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                <div class="font-weight-bold">{{ $item->nama_muzakki }}</div>
                                                <div class="text-muted">Tanggungan: &nbsp;<a href="#"
                                                        class="text-reset">{{ $item->jumlah_tanggungan }}</a></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $item->jenis_bayar }}</td>
                                    <td class="text-center">{{ $item->jumlah_tanggungandibayar }} Orang</td>
                                    <td class="text-center">{{ $item->bayar_beras ? $item->bayar_beras . ' KG' : '-' }}</td>
                                    <td class="text-center">{{ $item->bayar_uang ? 'Rp ' . $item->bayar_uang : '-' }}</td>

                                </tr>
                                @empty
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@push('datatable-scripts')
<script src="{{ url('cuba/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
<script src="{{ url('cuba/assets/js/datatable/datatable-extension/custom.js') }}"></script>
<script src="{{ url('cuba/assets/js/tooltip-init.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.3.1/dist/js/splide.min.js"></script>
<script>
    new Splide('.splide', {
        autoplay: 'playing',
        rewind: true,
        arrows: false,
        interval: 1600,
    }).mount();
</script>
@endpush

@endsection