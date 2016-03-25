@extends('layouts.login')

@section('content')
    <div class="content">
        <div class="jumbotron">
            <img src="/images/logo.png">
            {!!Form::open(['url'=>'password/email'])!!}
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu email'])!!}
                </div>
              </div>
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Enviar Link</button>
            {!!Form::close()!!}
        </div>
    </div>
@endsection