@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4" >
                <div class="card" style="background: #dadae4">
                    <img alt="image" class=" rounded mx-auto d-block" style="max-width: 80px; margin-top: 10px"
                         src="{{asset('img/icon.png')}}">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group" style="box-shadow:0 0 1px #666;">
                                <div class="input-group-prepend"><span class="input-group-addon"  style="background: #cacabd"><i
                                            class="fa fa-at"></i></span></div>
                                <input id="email" type="email" placeholder="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email" value=""
                                       required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group" style="margin-top: 15px;box-shadow:0 0 1px #666;">
                                <div class="input-group-prepend">
                                    <span class="input-group-addon"  style="background: #cacabd"><i class="fa fa-lock"></i></span>
                                </div>
                                <input id="password" type="password" placeholder="password"
                                       class="form-control  @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group" style=" margin-top:15px;box-shadow:0 0 1px #666;">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="input-group" style=" margin-top:15px;box-shadow:0 0 1px #666;">
                                <input type="button" class="btn btn-success btn-block"
                                       onclick="location.href='{{route("register")}}';" value="Register"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
