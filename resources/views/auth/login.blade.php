@extends('layouts.app')

@section('content')
<div class="valign">
  <div class="row">
      <div class="col s12 m6 l4 offset-l4 offset-m3">
          <div class="card white darken-1">
              <div class="card-content ">
                   <span class="card-title">Sign In</span>
                   <div class="row">
                       <form class="col s12" role="form" method="POST" action="{{ url('/login') }}" autocomplete="off">
                           {{ csrf_field() }}

                           <div class="input-field col s12">
                               <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                               <label for="email">Email</label>

                               @if ($errors->has('email'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('email') }}</strong>
                                   </span>
                               @endif
                           </div>

                           <div class="input-field col s12">
                               <input id="password" type="password" class="form-control" name="password" required>
                               <label for="password">Password</label>

                               @if ($errors->has('password'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('password') }}</strong>
                                   </span>
                               @endif
                           </div>

                           <div class="col s12">
                                 <input type="checkbox" class="filled-in"  id="remember" name="remember"/>
                                 <label for="remember">Remember Me</label>
                           </div>
                           &nbsp;

                           <div class="col s12 right-align m-t-sm">
                               <a class="center waves-effect waves-light btn grey" href="{{ url('/register') }}">
                                 Sign Up
                               </a>
                               <button type="submit" class="waves-effect waves-grey btn teal">
                                   Sign In
                               </button>
                               <hr />
                               <a class="center col s12 waves-effect waves-light btn-flat" href="{{ url('/password/reset') }}">
                                 <small>Forgot Your Password?</small>
                               </a>
                           </div>
                       </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
