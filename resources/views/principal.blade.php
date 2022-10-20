@extends('layouts.app')

@section('titulo')

@endsection


@section('contenido')


<div class="container">

</div>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6"><img src="{{asset('img/index.png')}}" style="width:100%;height:20%" alt="Logo"></div>
        <div class="col-md-6">
            <br>
            <br>
            <br>
            <div>
                <h2>SAU</h2>
            </div>
            <br>
            <a href="/login" class="btn btn-primary btn-md active">Ingresar</a>
            <a href="/crear" class="btn btn-default btn-md active">Crear cuenta</a>
            <br>
            <br>
        </div>
    </div>
</div>
<br>
<br>
<br>




@endsection
