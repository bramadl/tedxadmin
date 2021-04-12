@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Merchandise</li>
    <li class="breadcrumb-item active">Pengiriman</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Table Pembelian
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-bundle-tab" data-toggle="pill" href="#pills-bundle" role="tab" aria-controls="pills-bundle" aria-selected="false">Bundle</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-money-tab" data-toggle="pill" href="#pills-money" role="tab" aria-controls="pills-money" aria-selected="false">E-money</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-lanyard-tab" data-toggle="pill" href="#pills-lanyard" role="tab" aria-controls="pills-contact" aria-selected="false">Lanyard</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-stickers-tab" data-toggle="pill" href="#pills-stickers" role="tab" aria-controls="pills-stickers" aria-selected="false">Stickers</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-shirt-tab" data-toggle="pill" href="#pills-shirt" role="tab" aria-controls="pills-shirt" aria-selected="false">T-Shirt</a></li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemesan</th>
                                            <th>Nomor Telepon</th>
                                            <th>Pesanan</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kota / Kabupaten</th>
                                            <th>Provinsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                              <a href="mailto:{{ $order->email }}" target="_blank">
                                                {{ $order->username }}
                                              </a>
                                            </td>
                                            <td>
                                                <a href="https://api.whatsapp.com/send?phone=+62{{ substr($order->phone_number, 1) }}" target="_blank">
                                                    {{ $order->phone_number }}
                                                </a>
                                            </td>
                                            <td>{{ $order->product }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->kelurahan }}</td>
                                            <td>{{ $order->kecamatan }}</td>
                                            <td>{{ $order->kabupaten }}</td>
                                            <td>{{ $order->provinsi }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="pills-bundle" role="tabpanel" aria-labelledby="pills-bundle-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemesan</th>
                                            <th>Nomor Telepon</th>
                                            <th>Pesanan</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kota / Kabupaten</th>
                                            <th>Provinsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                        @if ($order->product === "Bundle A" || $order->product === "Bundle B")
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                              <a href="mailto:{{ $order->email }}" target="_blank">
                                                {{ $order->username }}
                                              </a>
                                            </td>
                                            <td>
                                                <a href="https://api.whatsapp.com/send?phone=+62{{ substr($order->phone_number, 1) }}" target="_blank">
                                                    {{ $order->phone_number }}
                                                </a>
                                            </td>
                                            <td>{{ $order->product }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->kelurahan }}</td>
                                            <td>{{ $order->kecamatan }}</td>
                                            <td>{{ $order->kabupaten }}</td>
                                            <td>{{ $order->provinsi }}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="pills-money" role="tabpanel" aria-labelledby="pills-money-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemesan</th>
                                            <th>Nomor Telepon</th>
                                            <th>Pesanan</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kota / Kabupaten</th>
                                            <th>Provinsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                        @if ($order->product === "E Money")
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                              <a href="mailto:{{ $order->email }}" target="_blank">
                                                {{ $order->username }}
                                              </a>
                                            </td>
                                            <td>
                                                <a href="https://api.whatsapp.com/send?phone=+62{{ substr($order->phone_number, 1) }}" target="_blank">
                                                    {{ $order->phone_number }}
                                                </a>
                                            </td>
                                            <td>{{ $order->product }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->kelurahan }}</td>
                                            <td>{{ $order->kecamatan }}</td>
                                            <td>{{ $order->kabupaten }}</td>
                                            <td>{{ $order->provinsi }}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="pills-lanyard" role="tabpanel" aria-labelledby="pills-money-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemesan</th>
                                            <th>Nomor Telepon</th>
                                            <th>Pesanan</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kota / Kabupaten</th>
                                            <th>Provinsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                        @if ($order->product === "Lanyard")
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                              <a href="mailto:{{ $order->email }}" target="_blank">
                                                {{ $order->username }}
                                              </a>
                                            </td>
                                            <td>
                                                <a href="https://api.whatsapp.com/send?phone=+62{{ substr($order->phone_number, 1) }}" target="_blank">
                                                    {{ $order->phone_number }}
                                                </a>
                                            </td>
                                            <td>{{ $order->product }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->kelurahan }}</td>
                                            <td>{{ $order->kecamatan }}</td>
                                            <td>{{ $order->kabupaten }}</td>
                                            <td>{{ $order->provinsi }}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="pills-stickers" role="tabpanel" aria-labelledby="pills-money-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemesan</th>
                                            <th>Nomor Telepon</th>
                                            <th>Pesanan</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kota / Kabupaten</th>
                                            <th>Provinsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                        @if ($order->product === "Sticker")
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                              <a href="mailto:{{ $order->email }}" target="_blank">
                                                {{ $order->username }}
                                              </a>
                                            </td>
                                            <td>
                                                <a href="https://api.whatsapp.com/send?phone=+62{{ substr($order->phone_number, 1) }}" target="_blank">
                                                    {{ $order->phone_number }}
                                                </a>
                                            </td>
                                            <td>{{ $order->product }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->kelurahan }}</td>
                                            <td>{{ $order->kecamatan }}</td>
                                            <td>{{ $order->kabupaten }}</td>
                                            <td>{{ $order->provinsi }}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="pills-shirt" role="tabpanel" aria-labelledby="pills-money-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemesan</th>
                                            <th>Nomor Telepon</th>
                                            <th>Pesanan</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kota / Kabupaten</th>
                                            <th>Provinsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                        @if ($order->product === "T-Shirt")
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                              <a href="mailto:{{ $order->email }}" target="_blank">
                                                {{ $order->username }}
                                              </a>
                                            </td>
                                            <td>
                                                <a href="https://api.whatsapp.com/send?phone=+62{{ substr($order->phone_number, 1) }}" target="_blank">
                                                    {{ $order->phone_number }}
                                                </a>
                                            </td>
                                            <td>{{ $order->product }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->kelurahan }}</td>
                                            <td>{{ $order->kecamatan }}</td>
                                            <td>{{ $order->kabupaten }}</td>
                                            <td>{{ $order->provinsi }}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection