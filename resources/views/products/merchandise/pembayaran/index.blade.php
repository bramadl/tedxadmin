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
                                    <th>ID</th>
                                    <th>Pemesan</th>
                                    <th>Pesanan</th>
                                    <th>Harga Pesanan</th>
                                    <th>Harga Ongkir</th>
                                    <th>Harga Total</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>
                                        <a href="mailto:{{ $payment->email }}" target="_blank">
                                            {{ $payment->username }}
                                        </a>
                                    </td>
                                    <td>{{ $payment->product }}</td>
                                    <td>Rp {{ number_format($payment->price, 2, ',', '.') }}</td>
                                    <td>Rp {{ number_format($provinces[$payment->provinsi], 2, ',', '.') }}</td>
                                    <td>
                                        <strong>
                                            Rp {{ number_format($payment->price + $provinces[$payment->provinsi], 2, ',', '.') }}
                                        </strong>
                                    </td>
                                    <td>
                                        <a href="{{ asset('assets/img/payments_proofs/' . $payment->payment_proof ) }}" target="_blank">{{ $payment->payment_proof }}
                                        </a>
                                    </td>
                                    <td>
                                        @if ($payment->status === 'pending')
                                        <span class="badge badge-warning">{{ $payment->status }}</span>
                                        @elseif ($payment->status === 'declined')
                                        <span class="badge badge-danger">{{ $payment->status }}</span>
                                        @else
                                        <span class="badge badge-success">{{ $payment->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ action('PaymentsController@confirm', [ 'id' => $payment->id ]) }}" class="d-inline-block" onsubmit="confirmPayment(event)" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-success" type="submit">
                                                <i class="cil-lightbulb">Confirm</i>
                                            </button>
                                        </form>
                                        <form action="{{ action('PaymentsController@decline', [ 'id' => $payment->id ]) }}" class="d-inline-block" onsubmit="declinePayment(event)" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-danger">
                                                <i class="cil-lightbulb">Decline</i>
                                            </button>
                                        </form>
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
@if (session('success'))
<script>
    Toast.fire({
        icon: 'success',
        title: @json(session('success'))
    })
</script>
@endif

@if (session('error'))
<script>
    Toast.fire({
        icon: 'error',
        title: @json(session('error'))
    })
</script>
@endif

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
@endpush