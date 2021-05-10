@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Tickets</li>
    <li class="breadcrumb-item active">Permintaan Token</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Table Permintaan Token
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table class="table table-responsive-sm" style="white-space: nowrap;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Ticket Pembeli</th>
                                    <th>Token Tiket</th>
                                    <th>Kode Tiket</th>
                                    <th>Kode Refresh Token</th>
                                    <th>Alasan Permintaan Token</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($refreshTokens as $key => $token)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $token['user_ticket_id'] }}</td>
                                    <td>{{ $token['user_tickets']['token'] }}</td>
                                    <td>{{ $token['user_tickets']['code'] }}</td>
                                    <td>{{ $token['user_tickets']['refresh_token'] }}</td>
                                    <td>{{ $token['reason'] }}</td>
                                    <td>
                                        <form action="{{ action('RefreshTokenController@verify', ['id' => $token['user_ticket_id'], 'status' => 'confirmed']) }}" class="d-inline-block" onsubmit="confirmPayment(event)" method="POST">
                                            @csrf
                                            <button class="btn btn-sm btn-success" type="submit">
                                                <i class="cil-lightbulb">Confirm</i>
                                            </button>
                                        </form>
                                        <form action="{{ action('TicketPaymentController@verify', ['id' => $token['user_ticket_id'], 'status' => 'declined']) }}" class="d-inline-block" onsubmit="declinePayment(event)" method="POST">
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
<script>
    function confirmPayment(event) {
        event.preventDefault()

        Swal.fire({
            title: 'Konfirmasi permintaan?',
            text: "Pastikan alasan permintaan sudah sesuai syarat dan kondisi!",
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
            title: 'Tolak permintaan?',
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