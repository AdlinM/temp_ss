@extends('layouts.admin')

@section('styles')

@endsection

@section('scripts')
<script>
$(function(){
  $('#memberSelectAll').change(function(){
    if($('#memberSelectAll').is(':checked')){
      $('#modalMember > .modal-content input[type=checkbox]').prop('checked',true);
    } else {
      $('#modalMember > .modal-content input[type=checkbox]').prop('checked',false);
    }
  });

  $('#modalMember > .modal-content input[type=checkbox]').change(function(){
    if($('#modalMember > .modal-content input[type=checkbox]:checked').length == $('#modalMember > .modal-content input[type=checkbox]').length) {
      $('#memberSelectAll').prop('checked',true);
    } else {
      $('#memberSelectAll').prop('checked',false);
    }
  });

  selectMember = function(isAll){
    if(isAll){
      $('#memberSelectAll').prop('checked',true);
      $('#memberSelectAll').attr('disabled','disabled');
      $('#modalMember > .modal-content input[type=checkbox]').prop('checked',true);
      $('#modalMember > .modal-content input[type=checkbox]').attr('disabled','disabled');
    } else {
      $('#memberSelectAll').prop('checked',false);
      $('#memberSelectAll').removeAttr('disabled');
      $('#modalMember > .modal-content input[type=checkbox]').prop('checked',false);
      $('#modalMember > .modal-content input[type=checkbox]').removeAttr('disabled');
    }
  }
});
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

              <h4>Detail Event</h4>
              <section>
                    <div class="wizard-content">
                        <div class="row">
                            <div class="col m4">
                              <img style="width:100%" src="/assets/images/sample-poster.jpg" alt="sample-poster" />
                            </div>
                            <div class="col m8">
                                <p>
                                    <label class="col m4">Nama Acara </label>
                                    <span class="col m8">{{ $data->nama!=null ? $data->nama : '' }}</span>
                                </p>
                                &nbsp;
                                <p>
                                    <label class="col m4">Waktu Acara</label>
                                    <span class="col m8">{{ $data->waktuAcara!=null ? $data->waktuAcara : '' }}</span>
                                </p>
                                &nbsp;
                                <p>
                                    <label class="col m4">Kategori</label>
                                    <span class="col m8">{{ $data->kategori!=null ? $data->kategori : '' }}</span>
                                </p>
                                &nbsp;
                                <p>
                                    <label class="col m4">Deskripsi</label>
                                    <span class="col m8">{{ $data->deskripsi!=null ? $data->deskripsi : '' }}</span>
                                </p>
                            </div>
                            <div class="col m12" style="margin-top:40px">
                              <div class="col m6">
                                <!-- Dropdown Trigger -->
                                <a class='dropdown-button btn' href='#' data-activates='dropdown2'>Kirim ke Anggota</a>
                                <br/><small>klik untuk menginformasikan event ini ke anggota via SMS</small>
                                <!-- Dropdown Structure -->
                                <ul id='dropdown2' class='dropdown-content'>
                                  <li><a class="modal-trigger" href="#modalMember" onclick="selectMember(true);">ke Semua</a></li>
                                  <li><a class="modal-trigger" href="#modalMember" onclick="selectMember(false);">ke Beberapa</a></li>
                                </ul>
                              </div>
                              <div class="col m6">
                                <!-- Button Menu -->
                                <div class="right">
                                  <a href="{{ url('/event/') }}" class="waves-effect waves-grey btn white m-b-xs">Kembali</a>
                                  <a href="{{ route('event.edit', $data->id) }}" class="waves-effect waves-grey btn teal m-b-xs">Edit</a>
                                  <form action="event/{{ $data->id}}" method="post" style="display: inline;">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" class="form-control" id="token" name="_token" value="{{ csrf_token() }}">
                                    <a href="javascript:void(0)" onclick="$(this).closest('form').submit()" class="waves-effect waves-red btn red m-b-xs">Hapus</a>
                                  </form>
                                </div>
                              </div>
                            </div>
                         </div>
                    </div>
                </section>
          </div>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<form class="col s12" method="post" action="/message/sendBroadcast">
  {{ csrf_field() }}
<div id="modalMember" class="modal modal-fixed-footer">
    <div class="modal-header">
        <div class="right p-v-xs">
            <input type="checkbox" class="filled-in" id="memberSelectAll" />
            <label for="memberSelectAll">Select All</label>
        </div>
        <h4 style="margin-top: 5px;">Daftar Anggota</h4>
    </div>
    <div class="modal-content" style="top:20px;height: calc(100% - 200px);">
          <p>
            @foreach($member as $m)
              <div class="p-v-xs">
                  <input type="checkbox" class="filled-in" name="phoneNumber[]" id="member{{ $m->id }}" value="{{ $m->phone }}" />
                  <label for="member{{ $m->id }}">{{ $m->firstName }} {{ $m->lastName }}</label>
              </div>
            @endforeach
          </p>
    </div>
    <div class="modal-footer" style="height:auto !important">
      <h4 style="margin-bottom: -10px;">Pesan yang dikirim</h4>
        <div class="row">
          <div class="input-field col s12">
              <textarea id="message" name="message" class="" style="height:80px" length="160">Halo, kami dari organisasi XYZ akan mengadakan seminar bertajuk {{ $data->nama!=null ? $data->nama : '' }}. Pada {{ $data->waktuAcara!=null ? $data->waktuAcara : '' }}. Datang ya guys...!!</textarea>
          </div>
        </div>

        <a href="#" class="modal-action modal-close waves-effect waves-grey btn-flat">Batal</a>&nbsp;
        <button type="submit" class="modal-action modal-close waves-effect waves-grey teal btn">Kirim</button>
    </div>
</div>
</form>
@endsection
