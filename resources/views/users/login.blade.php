@extends('layouts.login')

@section('content')
    <div class="content">
        <div class="jumbotron">
            <img src="/images/logo.png">
            {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu email'])!!}
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
                </div>
              </div>
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
              <div class="form-group recovery-pass">
                {!!link_to('password/email',$title='¿Has olvidado tu usuario o contraseña?',$attributes = null, $secure = null)!!}
              </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection