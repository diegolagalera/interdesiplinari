@extends('layouts.layoutf')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6 offset-md-3">
                              <div class="input-group">
                                  <i class="material-icons">face</i>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="Diego" required autofocus>
                              </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cognom" class="col-md-5 col-form-label text-md-right">Cognom</label>

                            <div class="col-md-6 offset-md-3">
                              <div class="input-group">
                                  <i class="material-icons">face</i>
                                <input id="cognom" type="text" class="form-control" name="cognom" value="Martinez" required autofocus>
                              </div>
                                    <span class="invalid-feedback">
                                        <strong>Cognom</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-5 col-form-label text-md-right">DNI</label>

                            <div class="col-md-6 offset-md-3">
                              <div class="input-group">
                                  <i class="material-icons">face</i>
                                <input id="dni" type="text" class="form-control" name="dni" value="47484339b" required autofocus>
                              </div>
                                    <span class="invalid-feedback">
                                        <strong>DNI</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-5 col-form-label text-md-right">Tel</label>

                            <div class="col-md-6 offset-md-3">
                              <div class="input-group">
                                  <i class="material-icons">face</i>
                                <input id="tel" type="text" class="form-control" name="tel" value="977719343" required autofocus>
                              </div>
                                    <span class="invalid-feedback">
                                        <strong>Tel</strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="localitat" class="col-md-5 col-form-label text-md-right">Localitat</label>

                            <div class="col-md-6 offset-md-3">
                              <div class="input-group">
                                  <i class="material-icons">face</i>
                                <input id="localitat" type="text" class="form-control" name="localitat" value="{{ old('localitat') }}" required autofocus>
                              </div>
                                    <span class="invalid-feedback">
                                        <strong>Localitat</strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6 offset-md-3">
                              <div class="input-group">
                                  <i class="material-icons">email</i>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="diegolagalera_@hotmail.com" required>
                              </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for=" password" style="margin-left:4%;" class="col-md-5 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6 offset-md-3">
                              <div class="input-group">
                                  <i class="material-icons">lock_outline</i>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                              </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" style="margin-left:3%;" class="col-md-6 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6 offset-md-3 ">
                              <div class="input-group">
                                  <i class="material-icons">lock_outline</i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
