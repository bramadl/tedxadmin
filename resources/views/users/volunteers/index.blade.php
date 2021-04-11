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
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Samppa Nori</td>
                                            <td>blabla@me.com</td>
                                            <td>All</td>
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

                            <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-bundle-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Samppa Nokia</td>
                                            <td>siapakek@me.com</td>
                                            <td>Web Manager</td>
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

                            <div class="tab-pane fade" id="pills-event" role="tabpanel" aria-labelledby="pills-event-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>anak EM</td>
                                            <td>em@me.com</td>
                                            <td>Event Manager</td>
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

                            <div class="tab-pane fade" id="pills-executive" role="tabpanel" aria-labelledby="pills-executive-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role<th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>anak EP</td>
                                            <td>ep@me.com</td>
                                            <td>Executive Producer</td>
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

                            <div class="tab-pane fade" id="pills-sponsor" role="tabpanel" aria-labelledby="pills-sponsor-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Anak Sponsor</td>
                                            <td>sponsor@me.com</td>
                                            <td>Sponsorship</td>
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

                            <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Anak VP</td>
                                            <td>vp@me.com</td>
                                            <td>Video Production</td>
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
                            <div class="tab-pane fade" id="pills-desain" role="tabpanel" aria-labelledby="pills-desain-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Anak Desain</td>
                                            <td>desain@me.com/td>
                                            <td>Desain</td>
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
                            <div class="tab-pane fade" id="pills-cem" role="tabpanel" aria-labelledby="pills-cem-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Anak CEM</td>
                                            <td>cem@gmail.com</td>
                                            <td>Content, Editorial, and Marketing</td>
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
                            <div class="tab-pane fade" id="pills-currator" role="tabpanel" aria-labelledby="pills-currator-tab">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role/th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>Anak Currator</td>
                                            <td>cur@me.com</td>
                                            <td>Currator</td>
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