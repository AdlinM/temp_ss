@extends('layouts.admin')

@section('styles')
<link href="/assets/plugins/pickadate/pickadate.css" rel="stylesheet"></script>
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
                  <form id="example-form" action="{{ url('/member') }}" method="POST" autocomplete="off">
                      <div>
                          <h4>Personal Info</h4>
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
                                      <div class="col m6">
                                          <div class="row">
                                              <div class="input-field col m6 s12">
                                                  <label for="firstName">Nama Depan</label>
                                                  <input id="firstName" name="firstName" type="text" class="required validate" value="{{ old('firstName') }}">
                                              </div>
                                              <div class="input-field col m6 s12">
                                                  <label for="lastName">Nama Terakhir</label>
                                                  <input id="lastName" name="lastName" type="text" class="required validate" value="{{ old('lastName') }}">
                                              </div>
                                              <div class="input-field col s12">
                                                  <label for="email">Email</label>
                                                  <input id="email" name="email" type="email" class="required validate" value="{{ old('email') }}">
                                              </div>
                                              <div class="input-field col s12">
                                                  <label for="bio">Bio</label>
                                                  <textarea id="bio" class="materialize-textarea" length="190">{{ old('bio') }}</textarea>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col m6">
                                          <div class="row">
                                              <div class="input-field col m6 s12">
                                                <select id="jurusan" name="jurusan">
                                                    <option value="">Jurusan...</option>
                                                    <option value="AF">Teknik Informatika</option>
                                                    <option value="SI">Sistem Informasi</option>
                                                    <option value="MI">Manajemen Informatika</option>
                                                </select>
                                              </div>
                                              <div class="input-field col m6 s12">
                                                  <label for="phone">Nomor Telepon</label>
                                                  <input id="phone" name="phone" type="tel" class="required validate" value="{{ old('phone') }}">
                                              </div>
                                              <!--<div class="input-field col m6 s12">
                                                  <label for="POB">Kota Asal</label>
                                                  <input id="POB" name="POB" type="text">
                                              </div>
                                              <div class="input-field col m6 s12">
                                                  <label for="DOB">Tanggal Lahir</label>
                                                  <input id="DOB" name="DOB" type="date" class="datepicker required">
                                              </div>-->
                                              <div class="input-field col s12">
                                                  <label for="address">Alamat</label>
                                                  <textarea id="address" name="address" cols="4" class="materialize-textarea">{{ old('address') }}</textarea>
                                              </div>
                                              <!--<div class="input-field col s12">
                                                  <div class="switch m-b-md">
                                                      <label>
                                                          <input type="checkbox">
                                                          <span class="lever"></span>
                                                          Get news and updates from Alpha
                                                      </label>
                                                  </div>-->
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col m12">
                                        <br />
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
