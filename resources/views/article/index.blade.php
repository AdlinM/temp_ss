@extends('layouts.admin')

@section('styles')
  <link href="/assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('scripts')
  <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
  <script src="/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="/assets/plugins/moment/moment.js"></script>
  <script src="/assets/js/pages/table-data.js"></script>
  <script>
  var updateIsPublished = function(obj, id, token){
    var valChecked = $(obj).prop('checked')?1:0;
    $.ajax({
      'type':'POST',
      'url':'/article/updatePublished',
      'data':{'isPublished':valChecked, 'id':id, '_token': token},
      'success':function(result){
        console.log(result);
        if(result.status == 0){
          alert("there something wrong. Message:" + result.message);
        } else {
          console.log(result.message);
        }
      },
      'error':function(x,y,z){
        alert(z);
      },
      'dataType':'json'
    })
  }
  </script>
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

                <h4> Artikel dan Kegiatan <a class="right waves-effect waves-light btn green m-b-xs" href="{{ url('/article/create') }}">+ Tambah</a></h4>
                <table id="example" class="display responsive-table datatable-example">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Tanggal Buat</th>
                            <th>Tanggal Ubah</th>
                            <th>Publish</th>
                            <th style="width:120px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $m)
                      <tr>
                        <td>{{ $m->judul }}</td>
                        <td>{{ date_format($m->created_at,"D, d M y - H:i") }}</td>
                        <td>{{ date_format($m->updated_at,"D, d M y - H:i") }}</td>
                        <td>
                          <div class="switch m-b-md">
                              <label>
                                  <input onclick="updateIsPublished(this, {{ $m->id }}, '{{ csrf_token() }}')" type="checkbox" {{ $m->isPublished ? 'checked="checked"' : '' }}>
                                  <span class="lever"></span>
                              </label>
                          </div>
                        </td>
                        <td>
                           <form action="article/{{ $m->id}}" method="post">
                              <a href="{{ route('article.edit', $m->id) }}" class="btn btn-small blue"><i class="material-icons">mode_edit</i></a>
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
