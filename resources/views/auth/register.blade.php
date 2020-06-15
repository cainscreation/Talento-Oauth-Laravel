@extends('layouts.header')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-6 col-8">
            <div class="card-custom">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row justify-content-center my-4">
                            <div class="col-10 col-md-8">
                                <h2 class="text-center" style="font-weight: bold; color:#2b2b2b">Sign up</h2>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-10 col-md-8">
                                <input id="name" placeholder="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-10 col-md-8">
                                <input id="email" placeholder="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-10 col-md-8">
                                <input id="password" placeholder="password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-10 col-md-8">
                                <input id="password-confirm"  placeholder="confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    SIGN UP
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
