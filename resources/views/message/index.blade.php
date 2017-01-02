@extends('layouts.admin')

@section('styles')
  <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('scripts')
  <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
  <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/pages/table-data.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <h4>Histori Pesan</h4>
                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                          <tr>
                              <th>Nama Anggota</th>
                              <th>Status</th>
                              <th>Waktu Kirim</th>
                          </tr>

                        </thead>
                        <tbody>
                              @foreach ($result as $d)
                                  <tr>
                                      <td>{{ $d['name'] }}</td>
                                      <td>{{ $d['status'] }}</td>
                                      <td>{{ $d['sent_at'] }}</td>
                                  </tr>
                              @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
