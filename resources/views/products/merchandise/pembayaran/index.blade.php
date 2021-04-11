@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Merchandise</li>
    <li class="breadcrumb-item active">Pembayaran</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Table Pembayaran
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Pembayaran</th>
                                            <th>Pesanan</th>
                                            <th>Harga Pesanan</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>B01</td>
                                            <td>Bundle 1</td>
                                            <td>150000</td>
                                            <td>link pembayaran</td>
                                            <td>
                                                <button class="btn btn-sm btn-success">
                                                <i class="cil-lightbulb">Accept</i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                <i class="cil-lightbulb">Decline</i>
                                                </button>
                                            </td>
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
@endsection