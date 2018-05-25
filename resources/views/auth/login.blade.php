<!DOCTYPE html>
<html>
<head>
	<title>Ahsanullah University of science and Technology</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">

</head>

<body>
	<div class="login col-lg-4 col-md-4 col-sm-4">
		<div>
			<img class="form_logo" src="{{ asset('images/logo/aust_logo.jpg') }}">
		</div>

		<div class="login_form">
      <form method="POST" action="{{ route('login') }}">
      @csrf
			<label for="id"><b>User Id</b></label>
			<input class="user_id" type="text" name="id" placeholder="Enter your id" required>

			<label for="pass"><b>Password</b></label>
			<input class="pass" type="Password" name="password" placeholder="Enter your password" required>

			{{-- <label class="login_as"><b>login as a-</b></label>
			<div class="radio_button">
				<input class="input" type="radio" name="gender" value="male" checked>Student<br>
				<input class="input" type="radio" name="gender" value="female">Teaher<br>
				<input class="input" type="radio" name="gender" value="other">Administrator
      </div> --}}
			<button type="submit">Login</button>
			<label class="remember_label"><input class="remember" type="checkbox"  name="">Remember me</label>
    </form>
		</div>

		<div class="forgot">
			<span class="psw">Forgot <a class="link" href="{{ route('password.request') }}">password?</a></span>
		</div>

	</div>

	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
