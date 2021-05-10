@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
  <li class="breadcrumb-item">Home</li>
  <li class="breadcrumb-item">Users</li>
  <li class="breadcrumb-item active">Talents</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <i class="fa fa-align-justify"></i> Table Talents
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
          Add New Talent
        </button>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <table class="table table-responsive-sm">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Full Name</th>
                  <th>Email Address</th>
                  <th>Phone Number</th>
                  <th>Street Address</th>
                </tr>
              </thead>
              <tbody>
                @if (!count($talents))
                <td colspan="100" style="text-align: center;">No data found.</td>
                @else
                @foreach ($talents as $key => $talent)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $talent['first_name'] }} {{ $talent['last_name'] }}</td>
                  <td>{{ $talent['email_address'] }}</td>
                  <td>{{ $talent['phone_number'] }}</td>
                  <td>{{ $talent['street_address'] }}</td>
                </tr>
                @endforeach
                @endif
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ action('TalentController@store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="first_name">First Name *</label>
            <input type="text" name="first_name" id="first_name" class="form-control">
            @error('first_name')
            <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control">
            @error('last_name')
            <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email_address">Email Address *</label>
            <input type="email" name="email_address" id="email_address" class="form-control">
            @error('email_address')
            <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="number" name="phone_number" id="phone_number" class="form-control">
            @error('phone_number')
            <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="street_address">Street Address</label>
            <input type="text" name="street_address" id="street_address" class="form-control">
            @error('street_address')
            <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  const addNewLinkButton = document.querySelector('.add-new-link')
  addNewLinkButton.addEventListener('click', function() {
    const socialMediaContainer = document.querySelector('.social-media')
    socialMediaContainer.insertAdjacentHTML('beforeend', `
      <div class="input-group my-3">
        <input type="text" name="tag[]" aria-label="First name" class="form-control" placeholder="Social Media">
        <input type="text" name="url[]" aria-label="Last name" class="form-control" placeholder="URL">
      </div>
    `)
  })
</script>
@endpush