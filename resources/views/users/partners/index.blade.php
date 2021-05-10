@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
  <li class="breadcrumb-item">Home</li>
  <li class="breadcrumb-item">Pengguna</li>
  <li class="breadcrumb-item active">Partners</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <i class="fa fa-align-justify"></i> Table Partners
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
          Tambah Partner Baru
        </button>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <table class="table table-responsive-sm">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Image</th>
                  <th>Partner</th>
                  <th>Role</th>
                  <th>Social Media</th>
                </tr>
              </thead>
              <tbody>
                @if (!count($partners))
                <td colspan="100" style="text-align: center;">Tidak ada data.</td>
                @else
                @foreach ($partners as $key => $partner)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td><img src="{{ url('storage/brands/' . $partner['avatar']) }}" width="100" /></td>
                  <td>{{ $partner['name'] }}</td>
                  <td>{{ $partner['role'] }}</td>
                  <td>
                    @foreach ($partner['social_media'] as $socialMedia)
                      <ul><li><a target="_blank" href="{{ $socialMedia['url'] }}">{{ $socialMedia['tag'] }}</a></li></ul>
                    @endforeach
                  </td>
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
      <form action="{{ action('PartnerController@store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="avatar">Avatar</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="avatar" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
            @error('avatar')
            <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="name">Nama Partner</label>
            <input type="text" name="name" id="name" class="form-control">
            @error('name')
            <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email Partner</label>
            <input type="email" name="email" id="email" class="form-control">
            @error('email')
            <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="role">Role Partner</label>
            <select name="role" id="role" class="form-control">
              <option value="Sponsor">Sponsor</option>
              <option value="Media Partner">Media Partner</option>
              <option value="Community Partner">Community Partner</option>
            </select>
            @error('role')
            <span class="text-sm text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group social-media">
            <div class="mb-3 d-flex align-items-center justify-content-between">
              <span>Tambah Link Baru</span>
              <button type="button" class="add-new-link btn btn-sm btn-primary">+</button>
            </div>
            <div class="input-group">
              <input type="text" name="tag[]" aria-label="First name" class="form-control" placeholder="Social Media">
              <input type="text" name="url[]" aria-label="Last name" class="form-control" placeholder="URL">
            </div>
            @error('tag.*')
            <p class="text-sm text-danger">{{ $message }}</p>
            @enderror
            @error('url.*')
            <p class="text-sm text-danger">{{ $message }}</p>
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