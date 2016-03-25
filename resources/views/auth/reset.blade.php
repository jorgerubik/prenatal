@extends('layouts.login')

@section('content')
    <div class="content">
        <div class="jumbotron">
            <img src="/images/logo.png">
            {!!Form::open(['url'=>'/password/reset'])!!}
              {!!Form::hidden('token',$token,null)!!}
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                    {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Email','value'=>"{{old('email')}}"])!!}
                </div>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu nuevo password'])!!}
                </div>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                    {!!Form::password('password_confirmation',['class'=>'form-control', 'placeholder'=>'Confirma tu nuevo password'])!!}
                </div>
              </div>
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Restablecer contraseña</button>
            {!!Form::close()!!}
        </div>
    </div>
@endsection