@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Pengguna</li>
    <li class="breadcrumb-item active">Audiens</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Table Audiens
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Email Address</th>
                                    <th>Joined At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($audiens as $key => $audien)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $audien->first_name }}</td>
                                    <td>{{ $audien->last_name }}</td>
                                    <td>{{ $audien->username }}</td>
                                    <td>
                                        <a href="mailto:{{ $audien->email_address }}">
                                            {{ $audien->email_address }}
                                        </a>
                                    </td>
                                    <td>{{ $audien->created_at }}</td>
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