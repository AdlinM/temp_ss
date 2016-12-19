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
                <h4>Detail Event</h4>
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
                            </div>
                            <div class="col m12">
                              <div class="right">
                                <a href="{{ url('/event/') }}" class="waves-effect waves-grey btn white m-b-xs">Kembali</a>
                                <a href="{{ route('event.edit', $data->id) }}" class="waves-effect waves-grey btn teal m-b-xs">Edit</a>
                                <form action="event/{{ $data->id}}" method="post" style="display: inline;">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" class="form-control" id="token" name="_token" value="{{ csrf_token() }}">
                                  <a href="javascript:void(0)" onclick="$(this).closest('form').submit()" class="waves-effect waves-red btn red m-b-xs">Delete</a>
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
