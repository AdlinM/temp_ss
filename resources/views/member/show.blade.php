@extends('layouts.admin')

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card">
            <div class="card-content">
              <div>
                <h4>Detail Data Anggota</h4>
                <section>
                    <div class="wizard-content">
                        @if(Session::has('flash_message'))
                          <div class="alert alert-success text-green" style="color:green">
                              {{ Session::get('flash_message') }}
                          </div>
                        @endif

                        <div class="row">
                            <div class="col m6">
                                <div class="row">
                                    <div class="input-field col m6 s12">
                                        <label for="firstName">Nama Depan</label>
                                        <input id="firstName" type="text" class="validate" value="{{ $data->firstName!=null ? $data->firstName : '' }}" disabled>
                                    </div>
                                    <div class="input-field col m6 s12">
                                        <label for="lastName">Nama Belankang</label>
                                        <input id="lastName" type="text" class="required validate" value="{{ $data->lastName!=null ? $data->lastName : ''}}" disabled>
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="required validate" value="{{ $data->email!=null ? $data->email : '' }}" disabled>
                                    </div>
                                     <div class="input-field col s12">
                                        <label for="nim">Nim</label>
                                        <input id="nim" type="text" class="required validate" value="{{ $data->nim!=null ? $data->nim : '' }}" disabled>
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="bio">Bio</label>
                                        <textarea id="bio" class="materialize-textarea" length="190" disabled>{{ $data->bio!=null ? $data->bio : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col m6">
                                <div class="row">
                                    <div class="input-field col m6 s12">
                                      <select id="jurusan" disabled>
                                          <option value="">Jurusan...</option>
                                          <option value="AF" {{ $data->jurusan=='AF' ? 'selected="selected"' : '' }} >Teknik Informatika</option>
                                          <option value="SI" {{ $data->jurusan=='SI' ? 'selected="selected"' : '' }} >Sistem Informasi</option>
                                          <option value="MI" {{ $data->jurusan=='MI' ? 'selected="selected"' : '' }} >Manajemen Informatika</option>
                                      </select>
                                    </div>
                                    <div class="input-field col m6 s12">
                                        <label for="phone">Nomor Telepon</label>
                                        <input id="phone" type="tel" class="required validate" value="{{ $data->phone!=null ? $data->phone : '' }}" disabled>
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="address">Alamat</label>
                                        <textarea id="address" name="address" cols="4" class="materialize-textarea" disabled>{{ $data->address!=null ? $data->address : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col m12">
                              <div class="right">
                                <a href="{{ url('/member/') }}" class="waves-effect waves-grey btn white m-b-xs">Kembali</a>
                                {{ csrf_field() }}
                                <a href="{{ route('member.edit', $data->id) }}" class="btn btn-primary">Edit Task</a>
                                <form action="member/{{ $data->id}}" method="post">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" class="form-control" id="token" name="_token" value="{{ csrf_token() }}">
                                  <a href="javascript:void(0)" onclick="$(this).closest('form').submit()" class="btn btn-danger">Delete this task</a>
                                </form>
                              </div>
                            </div>
                         </div>
                    </div>
                </section>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
