@extends('layouts.admin')

@section('styles')
  <link href="/assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
  <link href="/assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">
@endsection

@section('scripts')
  <script src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
  <script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="/assets/plugins/chart.js/chart.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.time.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.resize.min.js"></script>
  <script src="/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
  <script src="/assets/plugins/curvedlines/curvedLines.js"></script>
  <script src="/assets/plugins/peity/jquery.peity.min.js"></script>
  <script src="/assets/js/alpha.min.js"></script>
  <script src="/assets/js/pages/dashboard.js"></script>
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
                    <span class="stats-counter"><span class="counter">83710</span><small>This month</small></span>
                </div>
                <div id="sparkline-line"></div>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card stats-card">
                <div class="card-content">
                    <span class="card-title">Reports</span>
                    <span class="stats-counter"><span class="counter">23230</span><small>Last week</small></span>
                    <div class="percent-info green-text">8% <i class="material-icons">trending_up</i></div>
                </div>
                <div class="progress stats-card-progress">
                    <div class="determinate" style="width: 70%"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-m-t no-m-b">
    <div class="col s12 m12 l8">
      <div class="card invoices-card">
          <div class="card-content">
              <div class="card-options">
                  <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
              </div>
              <span class="card-title">Article Overview</span>
          <table class="responsive-table bordered">
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
                  <tr>
                      <td>#203</td>
                      <td>PayPal</td>
                      <td>Curabitur Libero Corp</td>
                      <td>Dec 16, 18:12</td>
                      <td><span class="pie">3/8</span></td>
                      <td>5430</td>
                  </tr>
                  <tr>
                      <td>#202</td>
                      <td>American Express</td>
                      <td>Integer Mattis Ltd</td>
                      <td>Nov 29, 13:56</td>
                      <td><span class="pie">5/8</span></td>
                      <td>1400</td>
                  </tr>
                  <tr>
                      <td>#200</td>
                      <td>Discover</td>
                      <td>Pellentesque Inc</td>
                      <td>Nov 17, 19:14</td>
                      <td><span class="pie">3/8</span></td>
                      <td>1250</td>
                  </tr>
                  <tr>
                      <td>#199</td>
                      <td>MasterCard</td>
                      <td>Curabitur Libero Corp</td>
                      <td>Oct 21, 12:16</td>
                      <td><span class="pie">5/8</span></td>
                      <td>1349</td>
                  </tr>
                  <tr>
                      <td>#198</td>
                      <td>Amex</td>
                      <td>Integer Mattis Ltd</td>
                      <td>Oct 14, 22:43</td>
                      <td><span class="pie">3/8</span></td>
                      <td>980</td>
                  </tr>
                  <tr>
                      <td>#197</td>
                      <td>PayPal</td>
                      <td>Pellentesque Inc</td>
                      <td>Sept 29, 10:33</td>
                      <td><span class="pie">5/8</span></td>
                      <td>679</td>
                  </tr>
              </tbody>
          </table>
          </div>
      </div>
    </div>
          <div class="col s12 m12 l4">
              <div class="card visitors-card">
                  <div class="card-content">
                      <div class="card-options">
                          <ul>
                              <li><a href="javascript:void(0)" class="card-refresh"><i class="material-icons">refresh</i></a></li>
                          </ul>
                      </div>
                      <span class="card-title">Visitors<span class="secondary-title">Showing stats from the last week</span></span>
                              <div id="flotchart1"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
