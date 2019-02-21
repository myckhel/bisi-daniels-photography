@extends('layouts.app')

@section('content')
<style>
input:invalid + span:after {
  content: '✖';
  color: #f00;
  padding-left: 5px;
}

input:valid + span:after {
  content: '✓';
  color: #26b72b;
  padding-left: 5px;
}
</style>
<section class="contact-area section_padding_100 mt-100">
    <div class="container">
        <div class="row justify-content-center">
<!-- register -->
@if (sizeof($errors) > 0)
{{print_r($errors)}}
@endif
              <h3>Register</h3>
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <input class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus type="text" placeholder="First Name">
          <span class="validity"></span>
          @if ($errors->has('firstname'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('firstname') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required type="text" placeholder="Last Name">
          <span class="validity"></span>
          @if ($errors->has('lastname'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('lastname') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required type="text" placeholder="Username">
          <span class="validity"></span>
          @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required type="email" placeholder="Email" pattern="{5,40}">
          <span class="validity"></span>
          @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required type="tel" placeholder="Phone e.g 08123456789" pattern="[0]{1}[0-9]{10}">
          <span class="validity"></span>
          @if ($errors->has('phone'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('phone') }}</strong>
              </span>
          @endif
          <select class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="gender" required style="display:block">
            <option value="Reader" disabled selected>Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <span class="validity"></span>
          @if ($errors->has('gender'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('gender') }}</strong>
              </span>
          @endif
          <select hidden class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" required style="display:block">
            <!-- <option value="Reader" disabled >Reader</option> -->
            <option value="Admin">Admin</option>
            <option value="Reader" selected>Reader</option>
          </select>
          <span class="validity"></span>
          @if ($errors->has('role'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('role') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required type="password" placeholder="password">
          <span class="validity"></span>
          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          <input class="form-control" name="password_confirmation" required type="password" placeholder="Confirm Password">
          <span class="validity"></span>
          @if ($errors->has('password_confirmation'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
          @endif
            <div class="info">
                <ul>
                    <li>
                        Have an account?
                        <a href="{{route('login')}}">Login</a>
                    </li>
                </ul>
            </div>
          <button type="submit" class="button">Register</button>
        </form>
<!-- end register -->
    </div>
  </div>
</div>
@endsection
