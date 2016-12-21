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
                                <p>
                                    <label class="col m4">NIM</label>
                                    <span class="col m8">{{ $data->nim!=null ? $data->nim : '' }}</span>
                                </p>
                                &nbsp;
                                <p>
                                    <label class="col m4">Nama Lengkap</label>
                                    <span class="col m8">{{ $data->firstName!=null ? $data->firstName : '' }} {{ $data->lastName!=null ? $data->lastName : '' }}</span>
                                </p>
                                &nbsp;
                                <p>
                                    <label class="col m4">Email</label>
                                    <span class="col m8">{{ $data->email!=null ? $data->email : '' }}</span>
                                </p>
                                &nbsp;
                                <p>
                                    <label class="col m4">Bio</label>
                                    <span class="col m8">{{ $data->bio!=null ? $data->bio : '' }}</span>
                                </p>
                            </div>
                            <div class="col m6">
                                <p>
                                    <label class="col m4">Jurusan</label>
                                    <span class="col m8">{{ $data->jurusan!=null ? $data->jurusan : '' }}</span>
                                </p>
                                &nbsp;
                                <p>
                                    <label class="col m4">No. Hp</label>
                                    <span class="col m8">{{ $data->phone!=null ? $data->phone : '' }}</span>
                                </p>
                                &nbsp;
                                <p>
                                    <label class="col m4">Alamat</label>
                                    <span class="col m8">{{ $data->address!=null ? $data->address : '' }}</span>
                                </p>
                            </div>
                            <div class="col m12" style="margin-top:40px">
                              <div class="right">
                                <a href="{{ url('/member/') }}" class="waves-effect waves-grey btn white m-b-xs">Kembali</a>
                                <a href="{{ route('member.edit', $data->id) }}" class="waves-effect waves-grey btn teal m-b-xs">Edit</a>
                                <form action="member/{{ $data->id}}" method="post" style="display: inline;">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" class="form-control" id="token" name="_token" value="{{ csrf_token() }}">
                                  <a href="javascript:void(0)" onclick="$(this).closest('form').submit()" class="waves-effect waves-red btn red m-b-xs">Hapus</a>
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
