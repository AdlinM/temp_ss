@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col s12 m8 offset-m2">
          <div class="card white darken-1">
              <div class="card-content ">
                   <span class="card-title">Sign Up</span>
                   <div class="row">
                     <form class="col s12" role="form" method="POST" action="{{ url('/register') }}" autocomplete="off">
                         {{ csrf_field() }}

                         <div class="input-field col s12">
                             <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                             <label for="name">Name</label>

                             @if ($errors->has('name'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('name') }}</strong>
                                 </span>
                             @endif
                         </div>

                         <div class="input-field col s12">
                             <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                             <label for="email">E-Mail Address</label>

                             @if ($errors->has('email'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                             @endif
                         </div>

                         <div class="input-field col s12">
                             <input id="password" type="password" class="validate" name="password" required>
                             <label for="password">Password</label>

                             @if ($errors->has('password'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('password') }}</strong>
                                 </span>
                             @endif
                         </div>

                         <div class="input-field col s12">
                             <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                             <label for="password-confirm">Confirm Password</label>

                             @if ($errors->has('password'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('password') }}</strong>
                                 </span>
                             @endif
                         </div>

                         <div class="form-group">
                             <div class="col-md-6 col-md-offset-4">

                             </div>
                         </div>
                         &nbsp;

                         <div class="col s12 right-align m-t-sm">
                             <button type="submit" class="waves-effect waves-grey btn teal">
                                 Sign Up
                             </button>
                         </div>
                     </form>
                  </div>
              </div>
          </div>
      </div>


    </div>
</div>
@endsection
