@extends('layouts.admin')

@section('styles')
<link href="/assets/plugins/pickadate/pickadate.css" rel="stylesheet" />
@endsection

@section('scripts')
  <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
  <script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="/assets/plugins/jquery-steps/jquery.steps.min.js"></script>
  <script src="/assets/plugins/pickadate/pickadate.js"></script>
  <script src="/assets/js/pages/form_elements.js"></script>
@endsection

@section('content')
  <div class="row">
      <div class="col s12 m12 l12">
          <div class="card">
              <div class="card-content">
                  <form id="example-form" action="/event/{{$data->id}}" method="POST" autocomplete="off">
                      <div>
                          <h4>Edit Event</h4>
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
                                                  <input id="nama" name="nama" type="text" class="required validate" value="{{ $data->nama }}">
                                              </div>
                                              <div class="input-field col s12">
                                                  <label for="waktuAcara">Tanggal Acara</label>
                                                  <input id="waktuAcara" name="waktuAcara" type="text" class="validate floating-label" value="{{ $data->waktuAcara }}">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col m6 s12">
                                          <div class="row">
                                              <div class="input-field col s12">
                                                <select id="kategori" name="kategori" value = "{{ $data->kategori }}">
                                                    <option value="Harian" {{ $data->kategori=='Harian' ? 'selected="selected"' : '' }}>Event Harian</option>
                                                    <option value="Bulanan" {{ $data->kategori=='Bulanan' ? 'selected="selected"' : '' }}>Event Bulanan</option>
                                                    <option value="Seminar" {{ $data->kategori=='Seminar' ? 'selected="selected"' : '' }}>Seminar</option>
                                                </select>
                                              </div>
                                              <div class="input-field col s12">
                                                  <label for="deskripsi">Deskripsi</label>
                                                  <textarea id="deskripsi" name="deskripsi" class="materialize-textarea" rows="100">{{ $data->deskripsi }}</textarea>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col m12">
                                        <div class="right">
                                          <a href="{{ url('/event') }}" class="waves-effect waves-grey btn white m-b-xs">Kembali</a>
                                          {{ csrf_field() }}
                                          <input type="hidden" name="_method" value="put">
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
