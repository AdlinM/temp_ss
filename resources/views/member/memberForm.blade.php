@extends('layouts.admin')

@section('styles')
@endsection

@section('scripts')
  <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
  <script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="/assets/plugins/jquery-steps/jquery.steps.min.js"></script>
  <script src="/assets/js/pages/form_elements.js"></script>
@endsection

@section('content')
  <div class="row">
      <div class="col s12 m12 l12">
          <div class="card">
              <div class="card-content">
                  <form id="example-form" action="#">
                      <div>
                          <h4>Personal Info</h4>
                          <section>
                              <div class="wizard-content">
                                  <div class="row">
                                      <div class="col m6">
                                          <div class="row">
                                              <div class="input-field col m6 s12">
                                                  <label for="firstName">Nama Depan</label>
                                                  <input id="firstName" name="firstName" type="text" class="required validate">
                                              </div>
                                              <div class="input-field col m6 s12">
                                                  <label for="lastName">Nama Terakhir</label>
                                                  <input id="lastName" name="lastName" type="text" class="required validate">
                                              </div>
                                              <div class="input-field col s12">
                                                  <label for="email">Email</label>
                                                  <input id="email" name="email" type="email" class="required validate">
                                              </div>
                                              <div class="input-field col s12">
                                                  <label for="confirm">Bio</label>
                                                  <textarea id="textarea1" class="materialize-textarea" length="190"></textarea>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col m6">
                                          <div class="row">
                                              <div class="input-field col m6 s12">
                                                <select id="countrySelect">
                                                    <option value="">Jurusan...</option>
                                                    <option value="AF">Teknik Informatika</option>
                                                    <option value="AF">Sistem Informasi</option>
                                                    <option value="AF">Manajemen Informatika</option>
                                                </select>
                                              </div>
                                              <div class="input-field col m6 s12">
                                                  <label for="address">Alamat</label>
                                                  <input id="address" name="address" type="text">
                                              </div>
                                              <div class="input-field col m6 s12">
                                                  <label for="birthdate">Tanggal Lahir</label>
                                                  <input id="birthdate" name="birthdate" type="date" class="datepicker required">
                                              </div>
                                              <div class="input-field col m6 s12">
                                                  <label for="city">Kota Asal</label>
                                                  <input id="city" name="city" type="text">
                                              </div>
                                              <div class="input-field col s12">
                                                  <label for="phone">Nomor Telepon</label>
                                                  <input id="phone" name="phone" type="tel" class="required validate">
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
                                          <a class="waves-effect waves-grey btn white m-b-xs">Kembali</a>
                                          <a class="waves-effect waves-light btn m-b-xs"><i class="material-icons right">done</i>Simpan</a>
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
