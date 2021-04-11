@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Settings</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="col-md-12">
    <div class="card"">
        <div class="card-header">Table Settings</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                    <use xlink:href="{{asset('vendors/@coreui/icons/sprites/free.svg#cil-user')}}"></use>
                                </svg></span></div>
                        <input class="form-control" id="username" type="text" name="username" placeholder="Username" autocomplete="username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-envelope-open') }}"></use>
                                </svg></span></div>
                        <input class="form-control" id="email" type="email" name="email" placeholder="Email" autocomplete="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                    <use xlink:href="{{asset('vendors/@coreui/icons/sprites/free.svg#cil-lock-locked')}}"></use>
                                </svg></span></div>
                        <input class="form-control" id="password" type="password" name="password" placeholder="Password" autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                    <use xlink:href="{{asset('vendors/@coreui/icons/sprites/free.svg#cil-lock-locked')}}"></use>
                                </svg></span></div>
                        <input class="form-control" id="password" type="password" name="password" placeholder="Password" autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group form-actions">
                    <button class="btn btn-sm btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection