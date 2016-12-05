@extends('layouts.admin')

@section('styles')
<link href="/assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet">
@endsection

@section('scripts')
  <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
  <script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="/assets/plugins/fullcalendar/moment.min.js"></script>
  <script src="/assets/plugins/fullcalendar/fullcalendar.min.js"></script>
  <script src="/assets/js/pages/calendar.js"></script>
@endsection

@section('content')
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card">
            <div class="card-content">
                <h4>Kalender Acara <a class="right waves-effect waves-light btn green m-b-xs">+ Tambah</a></h4>
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>
@endsection
