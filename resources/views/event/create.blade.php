@extends('layouts.admin')

@section('styles')
<link href="/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
@endsection

@section('scripts')
  <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
  <script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="/assets/plugins/jquery-steps/jquery.steps.min.js"></script>
  <script src="/assets/plugins/moment/moment.js"></script>
  <script src="/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
  <script src="/assets/js/pages/form_elements.js"></script>
  <script>
  $(function(){
    $('#waktuAcara').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm' });
  });
  </script>
@endsection

@section('content')
  <div class="row">
      <div class="col s12 m12 l12">
          <div class="card">
              <div class="card-content">
                  <form id="example-form" action="{{ url('/event') }}" method="POST" autocomplete="off">
                      <div>
                          <h4>Tambah Event</h4>
                          <section>
                              <div class="wizard-content">
                                  @if($errors->any())
                                  <div class="row">
                                    <div class="alert alert-danger text-red" style="color:red">
                                        @foreach($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                  </div>
                                  @endif

                                  @if(Session::has('flash_message'))
                                      <div class="alert alert-success text-green" style="color:green">
                                          {!!Session::get('flash_message')!!}
                                      </div>
                                  @endif

                                  <div class="row">
                                      <div class="col m6 s12">
                                          <div class="row">
                                              <div class="input-field col s12">
                                                  <label for="nama">Nama Event</label>
                                                  <input id="nama" name="nama" type="text" class="required validate" value="{{ old('nama') }}">
                                              </div>
                                              <div class="input-field col s12">
                                                  <label for="waktuAcara">Tanggal Acara</label>\
                                                  <input id="waktuAcara" name="waktuAcara" type="text" class="validate floating-label" value="{{ old('eventDate') }}">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col m6 s12">
                                          <div class="row">
                                              <div class="input-field col s12">
                                                <select id="kategori" name="kategori">
                                                    <option value="">Kategori...</option>
                                                    <option value="H">Event Harian</option>
                                                    <option value="B">Event Bulanan</option>
                                                    <option value="S">Seminar</option>
                                                </select>
                                              </div>
                                              <div class="input-field col s12">
                                                  <label for="deskripsi">Deskripsi</label>
                                                  <textarea id="deskripsi" class="materialize-textarea" rows="100">{{ old('deskripsi') }}</textarea>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col m12">
                                        <div class="right">
                                          <a href="{{ url('/member') }}" class="waves-effect waves-grey btn white m-b-xs">Kembali</a>
                                          {{ csrf_field() }}
                                          <button type="submit" class="waves-effect waves-light btn m-b-xs"><i class="material-icons right">done</i>Simpan</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                          </section>
                      </div>
                  </form>
              </div>
          </div>
      </div>
   </div>
@endsection
