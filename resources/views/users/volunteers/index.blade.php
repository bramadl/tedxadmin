@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">Pengguna</li>
    <li class="breadcrumb-item active">Volunteers</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Table Volunteers
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-web-tab" data-toggle="pill" href="#pills-web" role="tab" aria-controls="pills-web" aria-selected="false">WM</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-event-tab" data-toggle="pill" href="#pills-event" role="tab" aria-controls="pills-event" aria-selected="false">EM</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-executive-tab" data-toggle="pill" href="#pills-executive" role="tab" aria-controls="pills-executive" aria-selected="false">EP</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-sponsor-tab" data-toggle="pill" href="#pills-sponsor" role="tab" aria-controls="pills-sponsor" aria-selected="false">SP</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false">VP</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-desain-tab" data-toggle="pill" href="#pills-desain" role="tab" aria-controls="pills-desain" aria-selected="false">D</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-cem-tab" data-toggle="pill" href="#pills-cem" role="tab" aria-controls="pills-cem" aria-selected="false">CEM</a></li>

                            <li class="nav-item"><a class="nav-link" id="pills-currator-tab" data-toggle="pill" href="#pills-currator" role="tab" aria-controls="pills-currator" aria-selected="false">CUR</a></li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Street Address</th>
                                            <th>Role</th>
                                            <th>Division</th>
                                            <th>Verified</th>
                                            <th>Joined At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteers as $key => $volunteer)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $volunteer['first_name'] }} {{ $volunteer['last_name'] }}</td>
                                            <td>{{ $volunteer['email_address'] }}</td>
                                            <td>{{ $volunteer['phone_number'] ? $volunteer['phone_number'] : '-' }}</td>
                                            <td>{{ $volunteer['street_address'] ? $volunteer['street_address'] : '-' }}</td>
                                            <td>{{ $volunteer['role'] }}</td>
                                            <td>{{ $volunteer['division'] }}</td>
                                            <td>{{ $volunteer['verified'] ? 'Confirmed' : 'Not Confirmed' }}</td>
                                            <td>{{ date('d M, Y', strtotime($volunteer['created_at'])) }}</td>
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

                            <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-bundle-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Street Address</th>
                                            <th>Role</th>
                                            <th>Division</th>
                                            <th>Verified</th>
                                            <th>Joined At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteers as $key => $volunteer)
                                        @if ($volunteer['division'] === 'Website')
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $volunteer['first_name'] }} {{ $volunteer['last_name'] }}</td>
                                            <td>{{ $volunteer['email_address'] }}</td>
                                            <td>{{ $volunteer['phone_number'] ? $volunteer['phone_number'] : '-' }}</td>
                                            <td>{{ $volunteer['street_address'] ? $volunteer['street_address'] : '-' }}</td>
                                            <td>{{ $volunteer['role'] }}</td>
                                            <td>{{ $volunteer['division'] }}</td>
                                            <td>{{ $volunteer['verified'] ? 'Confirmed' : 'Not Confirmed' }}</td>
                                            <td>{{ date('d M, Y', strtotime($volunteer['created_at'])) }}</td>
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

                            <div class="tab-pane fade" id="pills-event" role="tabpanel" aria-labelledby="pills-event-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Street Address</th>
                                            <th>Role</th>
                                            <th>Division</th>
                                            <th>Verified</th>
                                            <th>Joined At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteers as $key => $volunteer)
                                        @if ($volunteer['division'] === 'Event Manager')
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $volunteer['first_name'] }} {{ $volunteer['last_name'] }}</td>
                                            <td>{{ $volunteer['email_address'] }}</td>
                                            <td>{{ $volunteer['phone_number'] ? $volunteer['phone_number'] : '-' }}</td>
                                            <td>{{ $volunteer['street_address'] ? $volunteer['street_address'] : '-' }}</td>
                                            <td>{{ $volunteer['role'] }}</td>
                                            <td>{{ $volunteer['division'] }}</td>
                                            <td>{{ $volunteer['verified'] ? 'Confirmed' : 'Not Confirmed' }}</td>
                                            <td>{{ date('d M, Y', strtotime($volunteer['created_at'])) }}</td>
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

                            <div class="tab-pane fade" id="pills-executive" role="tabpanel" aria-labelledby="pills-executive-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Street Address</th>
                                            <th>Role</th>
                                            <th>Division</th>
                                            <th>Verified</th>
                                            <th>Joined At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteers as $key => $volunteer)
                                        @if ($volunteer['division'] === 'Executive Producer')
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $volunteer['first_name'] }} {{ $volunteer['last_name'] }}</td>
                                            <td>{{ $volunteer['email_address'] }}</td>
                                            <td>{{ $volunteer['phone_number'] ? $volunteer['phone_number'] : '-' }}</td>
                                            <td>{{ $volunteer['street_address'] ? $volunteer['street_address'] : '-' }}</td>
                                            <td>{{ $volunteer['role'] }}</td>
                                            <td>{{ $volunteer['division'] }}</td>
                                            <td>{{ $volunteer['verified'] ? 'Confirmed' : 'Not Confirmed' }}</td>
                                            <td>{{ date('d M, Y', strtotime($volunteer['created_at'])) }}</td>
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

                            <div class="tab-pane fade" id="pills-sponsor" role="tabpanel" aria-labelledby="pills-sponsor-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Street Address</th>
                                            <th>Role</th>
                                            <th>Division</th>
                                            <th>Verified</th>
                                            <th>Joined At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteers as $key => $volunteer)
                                        @if ($volunteer['division'] === 'Sponsorship')
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $volunteer['first_name'] }} {{ $volunteer['last_name'] }}</td>
                                            <td>{{ $volunteer['email_address'] }}</td>
                                            <td>{{ $volunteer['phone_number'] ? $volunteer['phone_number'] : '-' }}</td>
                                            <td>{{ $volunteer['street_address'] ? $volunteer['street_address'] : '-' }}</td>
                                            <td>{{ $volunteer['role'] }}</td>
                                            <td>{{ $volunteer['division'] }}</td>
                                            <td>{{ $volunteer['verified'] ? 'Confirmed' : 'Not Confirmed' }}</td>
                                            <td>{{ date('d M, Y', strtotime($volunteer['created_at'])) }}</td>
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

                            <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Street Address</th>
                                            <th>Role</th>
                                            <th>Division</th>
                                            <th>Verified</th>
                                            <th>Joined At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteers as $key => $volunteer)
                                        @if ($volunteer['division'] === 'Video Production')
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $volunteer['first_name'] }} {{ $volunteer['last_name'] }}</td>
                                            <td>{{ $volunteer['email_address'] }}</td>
                                            <td>{{ $volunteer['phone_number'] ? $volunteer['phone_number'] : '-' }}</td>
                                            <td>{{ $volunteer['street_address'] ? $volunteer['street_address'] : '-' }}</td>
                                            <td>{{ $volunteer['role'] }}</td>
                                            <td>{{ $volunteer['division'] }}</td>
                                            <td>{{ $volunteer['verified'] ? 'Confirmed' : 'Not Confirmed' }}</td>
                                            <td>{{ date('d M, Y', strtotime($volunteer['created_at'])) }}</td>
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
                            <div class="tab-pane fade" id="pills-desain" role="tabpanel" aria-labelledby="pills-desain-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Street Address</th>
                                            <th>Role</th>
                                            <th>Division</th>
                                            <th>Verified</th>
                                            <th>Joined At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteers as $key => $volunteer)
                                        @if ($volunteer['division'] === 'Design')
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $volunteer['first_name'] }} {{ $volunteer['last_name'] }}</td>
                                            <td>{{ $volunteer['email_address'] }}</td>
                                            <td>{{ $volunteer['phone_number'] ? $volunteer['phone_number'] : '-' }}</td>
                                            <td>{{ $volunteer['street_address'] ? $volunteer['street_address'] : '-' }}</td>
                                            <td>{{ $volunteer['role'] }}</td>
                                            <td>{{ $volunteer['division'] }}</td>
                                            <td>{{ $volunteer['verified'] ? 'Confirmed' : 'Not Confirmed' }}</td>
                                            <td>{{ date('d M, Y', strtotime($volunteer['created_at'])) }}</td>
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
                            <div class="tab-pane fade" id="pills-cem" role="tabpanel" aria-labelledby="pills-cem-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Street Address</th>
                                            <th>Role</th>
                                            <th>Division</th>
                                            <th>Verified</th>
                                            <th>Joined At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteers as $key => $volunteer)
                                        @if ($volunteer['division'] === 'CEM')
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $volunteer['first_name'] }} {{ $volunteer['last_name'] }}</td>
                                            <td>{{ $volunteer['email_address'] }}</td>
                                            <td>{{ $volunteer['phone_number'] ? $volunteer['phone_number'] : '-' }}</td>
                                            <td>{{ $volunteer['street_address'] ? $volunteer['street_address'] : '-' }}</td>
                                            <td>{{ $volunteer['role'] }}</td>
                                            <td>{{ $volunteer['division'] }}</td>
                                            <td>{{ $volunteer['verified'] ? 'Confirmed' : 'Not Confirmed' }}</td>
                                            <td>{{ date('d M, Y', strtotime($volunteer['created_at'])) }}</td>
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
                            <div class="tab-pane fade" id="pills-currator" role="tabpanel" aria-labelledby="pills-currator-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Street Address</th>
                                            <th>Role</th>
                                            <th>Division</th>
                                            <th>Verified</th>
                                            <th>Joined At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($volunteers as $key => $volunteer)
                                        @if ($volunteer['division'] === 'Curator')
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $volunteer['first_name'] }} {{ $volunteer['last_name'] }}</td>
                                            <td>{{ $volunteer['email_address'] }}</td>
                                            <td>{{ $volunteer['phone_number'] ? $volunteer['phone_number'] : '-' }}</td>
                                            <td>{{ $volunteer['street_address'] ? $volunteer['street_address'] : '-' }}</td>
                                            <td>{{ $volunteer['role'] }}</td>
                                            <td>{{ $volunteer['division'] }}</td>
                                            <td>{{ $volunteer['verified'] ? 'Confirmed' : 'Not Confirmed' }}</td>
                                            <td>{{ date('d M, Y', strtotime($volunteer['created_at'])) }}</td>
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