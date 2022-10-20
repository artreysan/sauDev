@extends('layouts.app')

@section('titulo')

@endsection


@section('contenido')
<br>
<div class="container" >
    <br>
    <img width="300" height="40" src="{{URL('/img/logo.png')}}">
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6"><img src="{{asset('img/index.png')}}" style="width:100%; height:100%;" alt="Logo"></div>
        <div class="col-md-6">
            <div class="container">
                <h2>SAU</h2>
            </div>
            <br>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                @csrf
               @if (session('mensaje'))
                    <div class="alert alert-danger">{{session('mensaje')}}</div>
                @endif

            
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="email">Correo electrónico:</label>
                  <div class="col-sm-6">
                        <input
                            class="border border-success"
                            id="email"
                            name="email"
                            type="text"
                            placeholder=" nombre@ejemplo.com"
                            value="{{old ('email')}}"
                        />
                  </div>
                </div>
                        @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                <div class="form-group">
                  <label class="col-sm-3 control-label" for="password">Contraseña:</label>
                  <div class="col-sm-6">
                    <input
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Contraseña"
                        type="password"
                    />
                  </div>
                </div>
                    @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                <br>
                <br>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <input
                          type="submit"
                          class="btn btn-primary btn-md active"
                          value="Ingresar"
                      />
                    </div>
                  </div>
              </form>
    </div>
    </div>
</div>
<br>
<br>
<br>




@endsection
