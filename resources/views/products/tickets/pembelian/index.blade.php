@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Tickets</li>
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
                        <table class="table table-responsive" style="white-space: nowrap;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pembeli</th>
                                    <th>Email Pembeli</th>
                                    <th>Alamat Pembeli</th>
                                    <th>Tipe Tiket</th>
                                    <th>Harga Tiket</th>
                                    <th>Token Tiket</th>
                                    <th>Kode Tiket</th>
                                    <th>Refresh Token</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $key = 0 @endphp
                                @foreach ($payments as $payment)
                                @if ($payment['payment_status'] === 'confirmed')
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $payment['user']['first_name'] }} {{ $payment['user']['last_name'] }}</td>
                                    <td>{{ $payment['user']['email_address'] }}</td>
                                    <td><a target="_blank" href="https://google.com/search?q={{ $payment['user']['street_address'] }}">{{ $payment['user']['street_address'] }}</a></td>
                                    <td>{{ $payment['ticket']['type'] }}</td>
                                    <td>{{ $payment['ticket']['price'] }}</td>
                                    <td>{{ $payment['user_ticket']['token'] }}</td>
                                    <td>{{ $payment['user_ticket']['code'] }}</td>
                                    <td>{{ $payment['user_ticket']['refresh_token'] }}</td>
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