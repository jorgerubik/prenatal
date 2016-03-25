<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Prenatal Puebla - Consultas</title>

    <!-- Bootstrap -->
    {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')!!}

    {!!Html::style('css/custom.css')!!}
    {!!Html::style('css/sb-admin.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
  </head>
  <body>

    <div id="wrapper">

      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{!!URL::to('/')!!}"><img src="images/logo.png" /></a>
        </div>
           
        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              {!!Auth::user()->name!!} <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
              </li>
              <li class="divider"></li>
              <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

              <li>
                <a href="{!!URL::to('/')!!}"><i class='fa fa-home fa-fw'></i> Inicio</a>
              </li>

              <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Pacientes<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar Paciente</a>
                  </li>
                  <li>
                    <a href="#"><i class='fa fa-th-list fa-fw'></i> Lista de Pacientes</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#"><i class="fa fa-plus-square fa-fw"></i> Obstetricia<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar Consulta</a>
                  </li>
                  <li>
                    <a href="#"><i class='fa fa-th-list fa-fw'></i> Lista de Consultas</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#"><i class="fa fa-plus-square fa-fw"></i> Ginecología<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar Consulta</a>
                  </li>
                  <li>
                    <a href="#"><i class='fa fa-th-list fa-fw'></i> Lista de Consultas</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#"><i class="fa fa-pencil fa-fw"></i> Recetas<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar Receta</a>
                  </li>
                  <li>
                    <a href="#"><i class='fa fa-th-list fa-fw'></i> Lista de Recetas</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#"><i class='fa fa-pencil fa-fw'></i> Cirugías</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div id="page-wrapper">
        @yield('content')
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')!!}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')!!}

    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
  </body>
</html>