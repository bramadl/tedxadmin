@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Tickets</li>
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
                        <table class="table table-responsive" style="white-space: nowrap;">
                            <thead>
                                <tr>
                                    <th>ID Pembayaran</th>
                                    <th>Nama Pembeli</th>
                                    <th>Email Pembeli</th>
                                    <th>Alamat Pembeli</th>
                                    <th>Tipe Tiket</th>
                                    <th>Harga Tiket</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $payment['id'] }}</td>
                                    <td>{{ $payment['user']['first_name'] }} {{ $payment['user']['last_name'] }}</td>
                                    <td>{{ $payment['user']['email_address'] }}</td>
                                    <td><a href="https://google.com/search?q={{ $payment['user']['street_address'] }}">{{ $payment['user']['street_address'] }}</a></td>
                                    <td>{{ $payment['ticket']['type'] }}</td>
                                    <td>
                                        <strong>Rp {{ number_format($payment['ticket']['price'], 2, ',', '.') }}</strong>
                                    </td>
                                    <td>{{ $payment['payment_method'] }}</td>
                                    <td>
                                        <a href="{{ $url . '/storage/img/payment_proof/' . $payment['payment_proof'] }}" target="_blank">{{ $payment['payment_proof'] }}</a>
                                    </td>
                                    <td>
                                        @if ($payment['payment_status'] === 'pending')
                                        <span class="badge badge-warning">{{ $payment['payment_status'] }}</span>
                                        @elseif ($payment['payment_status'] === 'declined')
                                        <span class="badge badge-danger">{{ $payment['payment_status'] }}</span>
                                        @else
                                        <span class="badge badge-success">{{ $payment['payment_status'] }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($payment['payment_status'] !== 'confirmed')
                                        <form action="{{ action('TicketPaymentController@verify', ['id' => $payment['id'], 'status' => 'confirmed']) }}" class="d-inline-block" onsubmit="confirmPayment(event)" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-success" type="submit">
                                                <i class="cil-lightbulb">Confirm</i>
                                            </button>
                                        </form>
                                        @endif
                                        @if ($payment['payment_status'] !== 'declined')
                                        <form action="{{ action('TicketPaymentController@verify', ['id' => $payment['id'], 'status' => 'declined']) }}" class="d-inline-block" onsubmit="declinePayment(event)" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-danger">
                                                <i class="cil-lightbulb">Decline</i>
                                            </button>
                                        </form>
                                        @endif
                                    </td>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function confirmPayment(event) {
        event.preventDefault()

        Swal.fire({
            title: 'Konfirmasi pembayaran?',
            text: "Pastikan bukti pembayaran sudah sesuai dengan pemesanannya!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, konfirmasi!'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit()
            }
        })
    }

    function declinePayment(event) {
        event.preventDefault()

        Swal.fire({
            title: 'Tolak pembayaran?',
            text: "Kamu tidak dapat mengembalikan tindakan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, tolak!'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit()
            }
        })
    }
</script>

@if (session('success'))
<script>
    Toast.fire({
        icon: 'success',
        title: @json(session('success'))
    })
</script>
@endif
@endpush