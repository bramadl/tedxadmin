@extends('layouts.app')

@section('breadcrumbs')
<!-- Breadcrumb-->
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Loka Hasta Karya</li>
</ol>
<!-- Breadcrumb Menu-->
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Table Loka Hasta Karya
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table
                          class="table table-responsive"
                          style="white-space: nowrap;"
                        >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nomor WhatsApp</th>
                                    <th>Asal Instansi / Komunitas</th>
                                    <th>Media Sosial</th>
                                    <th>Bentuk Karya</th>
                                    <th>Judul Karya</th>
                                    <th>Deskripsi Karya</th>
                                    <th>Tahun Pembuatan Karya</th>
                                    <th>File Karya</th>
                                    <th>Mengetahui Agenda Dari</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($files as $key => $file)
                              <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $file->nama_lengkap }}</td>
                                <td>
                                  <a href="https://api.whatsapp.com/send?phone=62{{ substr($file->nomor_wa, 1) }}">
                                    {{ $file->nomor_wa }}
                                  </a>
                                </td>
                                <td>{{ $file->instansi_komunitas }}</td>
                                <td>{{ $file->media_sosial }}</td>
                                <td>{{ $file->bentuk_karya }}</td>
                                <td>{{ $file->judul_karya }}</td>
                                <td>{{ $file->deskripsi_karya }}</td>
                                <td>{{ $file->tahun_pembuatan_karya }}</td>
                                <td>
                                  <a
                                    href="{{ asset('assets/file/' . $file->file_karya) }}"
                                    target="_blank"
                                  >
                                  Buka File
                                  </a>
                                </td>
                                <td>{{ $file->sumber_informasi }}</td>
                                <td>
                                  @if ($file->status === 'pending')
                                    <span class="btn btn-sm btn-warning text-white">
                                      {{ $file->status }}
                                    </span>
                                  @elseif ($file->status === 'declined')
                                    <span class="btn btn-sm btn-danger">
                                      {{ $file->status }}
                                    </span>
                                  @else
                                    <span class="btn btn-sm btn-success">
                                      {{ $file->status }}
                                    </span>
                                  @endif
                                </td>
                                <td>
                                    <form action="{{ url('/loka-hasta-karya/' . $file->id . '/confirm') }}" method="POST">
                                      @csrf
                                      <button class="btn btn-sm btn-success" type="submit">
                                          <i class="cil-lightbulb">Confirm</i>
                                      </button>
                                    </form>
                                    <form action="{{ url('/loka-hasta-karya/' . $file->id . '/decline') }}" method="POST">
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