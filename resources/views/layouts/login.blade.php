<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <title>Prenatal Puebla - Consultas</title>

    <!-- Bootstrap -->
    {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')!!}

    {!!Html::style('css/login.css')!!}
  </head>
    <body>
        <div class="container">
            @include('alerts.errors')
            @include('alerts.request')
            @yield('content')
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')!!}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')!!}
  </body>
</html>