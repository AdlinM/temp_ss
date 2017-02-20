@extends('layouts.admin')

@section('styles')
  <link href="/assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
  <link href="/assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">
  <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="assets/plugins/tableexport/css/tableexport.min.css" rel="stylesheet">
@endsection

@section('scripts')
  <script src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
  <script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="/assets/plugins/moment/moment.js"></script>
  <script src="/assets/plugins/chart.js/chart.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.time.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.resize.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
  <script src="/assets/plugins/curvedlines/curvedLines.js"></script>
  <script src="/assets/plugins/peity/jquery.peity.min.js"></script>
  <script src="/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="/assets/plugins/TableExport/js/FileSaver.min.js"></script>
  <script src="/assets/plugins/TableExport/js/tableexport.min.js"></script>
  <script src="/assets/js/alpha.min.js"></script>
  <script src="/assets/js/pages/dashboard.js"></script>
  <script>
  $(function(){
    $('#materialPreloader').hide();

      $(".datatable-article").tableExport({
          bootstrap: true
      });

      $(".datatable-message").tableExport({
          bootstrap: true
      });
  });
  </script>
@endsection

@section('content')
  <div class="">
    <div class="row no-m-t no-m-b">
        <div class="col s12 m12 l6">
            <div class="card stats-card">
                <div class="card-content">
                    <div class="card-options">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                        </ul>
                    </div>
                    <span class="card-title">Page views</span>
                    <span class="stats-counter"><span class="counter">83710</span><small>Bulan ini</small></span>
                </div>
                <div id="sparkline-line"></div>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card stats-card">
                <div class="card-content">
                    <span class="card-title">Laporan</span>
                    <span class="stats-counter"><span class="counter">23230</span><small>Minggu Terakhir</small></span>
                    <div class="percent-info green-text">8% <i class="material-icons">trending_up</i></div>
                </div>
                <div class="progress stats-card-progress">
                    <div class="determinate" style="width: 70%"></div>
                </div>
            </div>
        </div>
    </div>
    <!--<div id="flotchart1"></div>-->
    <div class="row no-m-t no-m-b">
      <div class="col s12 m12">
        <div class="card invoices-card">
            <div class="card-content">
                <div class="card-options">
                    <input type="text" class="expand-search" placeholder="Search" autocomplete="off" />
                </div>
                <span class="card-title">Review Artikel</span>
                <table class="responsive-table bordered datatable-article">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
                            <th data-field="number">Penulis</th>
                            <th data-field="company">Judul Artikel</th>
                            <th data-field="date">Date</th>
                            <th data-field="progress"></th>
                            <th data-field="total">Total Viewer</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($article as $a)
                        <tr>
                            <td>#{{ $a->id }}</td>
                            <td>Administrator</td>
                            <td>{{ $a->judul }}</td>
                            <td>{{ $a->created_at }}</td>
                            <td><span class="pie">3/8</span></td>
                            <td>1249</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>


    <div class="row no-m-t no-m-b">
      <div class="col s12 m12">
        <div class="card invoices-card">
            <div class="card-content">
                <div class="card-options">
                    <input type="text" class="expand-search" placeholder="Search" autocomplete="off" />
                    <button class="exp-msg">Export</button>
                </div>
                <span class="card-title">Histori Pesan</span>
                <table id="" class="display responsive-table datatable-message bordered">
                    <thead>
                      <tr>
                          <th>Nama Anggota</th>
                          <th>Status</th>
                          <th>Pesan</th>
                          <th>Waktu Kirim</th>
                      </tr>

                    </thead>
                    <tbody>
                          @foreach ($message as $d)
                              <tr>
                                  <td>{{ $d['name'] }}</td>
                                  <td><span class="text-success">{{ $d['status'] }}</span></td>
                                  <td><span class="trucate">{{ $d['message'] }}</span></td>
                                  <td class="messSendTime">
                                    {{ $d['sent_at'] }}
                                  </td>
                              </tr>
                          @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
