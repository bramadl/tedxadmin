@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Profile</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="col-sm-6 col-md-12">
    <div class="card card-accent-info">
        <div class="card-header">Card Profile</div>
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header"><strong>Profile</strong></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" type="text" value="Iqbal Maulana" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" id="email" type="text" value="miqblmaulana@gmail.com" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <input class="form-control" id="role" type="text" value="Admin" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="tx-profile-image">
                        <h1>IM</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection