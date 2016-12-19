@extends('layouts.admin')

@section('styles')
  <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('scripts')
  <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/pages/table-data.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">

                    @if(Session::has('flash_message'))
                      <div class="alert alert-success text-green" style="color:green">
                          {{ Session::get('flash_message') }}
                      </div>
                    @endif

                    <h4>Data Anggota <a class="right waves-effect waves-light btn green m-b-xs" href="{{ url('/member/create') }}">+ Tambah</a></h4>
                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Waktu Pendaftaran</th>
                                <th>No Telp</th>
                                <th style="width:120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $m)
                          <tr>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->firstName }} {{ $m->lastName }}</td>
                            <td>{{ $m->jurusan }}</td>
                            <td>{{ $m->created_at }}</td>
                            <td>{{ $m->phone}}</td>
                            <td>
                                <form action="member/{{ $m->id}}" method="post">
                                  <a href="{{ route('member.show', $m->id) }}" class="btn btn-small teal"><i class="material-icons dp48">library_books</i></a>
                                  <a href="{{ route('member.edit', $m->id) }}" class="btn btn-small blue"><i class="material-icons">mode_edit</i></a>
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" class="form-control" id="token" name="_token" value="{{ csrf_token() }}">
                                  <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-small red"><i class="material-icons">delete</i></a>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
