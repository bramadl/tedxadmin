@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Merchandise</li>
    <li class="breadcrumb-item active">Pembelian</li>
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
                                            <th>Nama</th>
                                            <th>Pesanan</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Samppa Nori</td>
                                            <td>Bundle 1</td>
                                            <td>2012/01/01</td>
                                            <td><span class="badge badge-danger">Pending</span></td>
                                        </tr>
                                        @endfor
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
                                            <th>Nama</th>
                                            <th>Pesanan</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Samppa Nokia</td>
                                            <td>Bundle 2</td>
                                            <td>2012/01/01</td>
                                            <td><span class="badge badge-danger">Pending</span></td>
                                        </tr>
                                        @endfor
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
                                            <th>Nama</th>
                                            <th>Pesanan</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Samppa Nori</td>
                                            <td>Bundle 1</td>
                                            <td>2012/01/01</td>
                                            <td><span class="badge badge-danger">Pending</span></td>
                                        </tr>
                                        @endfor
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
                                            <th>Nama</th>
                                            <th>Pesanan</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Samppa Nori</td>
                                            <td>Bundle 1</td>
                                            <td>2012/01/01</td>
                                            <td><span class="badge badge-danger">Pending</span></td>
                                        </tr>
                                        @endfor
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
                                            <th>Nama</th>
                                            <th>Pesanan</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Samppa Nori</td>
                                            <td>Bundle 1</td>
                                            <td>2012/01/01</td>
                                            <td><span class="badge badge-danger">Pending</span></td>
                                        </tr>
                                        @endfor
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
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Pesanan</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Samppa Nori</td>
                                            <td>T-Shirt</td>
                                            <td>2012/01/01</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        @endfor
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