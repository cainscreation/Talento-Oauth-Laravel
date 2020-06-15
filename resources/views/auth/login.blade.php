@extends('layouts.header')

@section('content')
<div class="container" style="margin-top:100px;">
   
    <div class="row justify-content-center">
        <div class="col-md-6 col-8">
            <div class="card-custom">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row justify-content-center my-4">
                            <div class="col-10 col-md-8">
                                <h2 class="text-center" style="font-weight: bold; color:#2b2b2b">Sign in</h2>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-10 col-md-8">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-10 col-md-8">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-10 col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
<div class="row justify-content-center">
    @if (Route::has('password.request'))
                                    <a style="font-size:80%;"class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
</div>
                        <div class="row justify-content-center button mb-4">
                            <div class="col-md-8 text-center">
                                <button type="submit" class="btn btn-primary">
                                    SIGN IN
                                </button>
                                
                            </div>

                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
