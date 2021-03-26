    <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"></script>

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                         <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            <ul class="nav navbar-nav navbar-right">
                            @if (!Auth::guest())
                                <li><a href="{{ route('reunion.index') }}">Reuniones</a></li>
                                <li><a href="{{ route('home') }}">Entrega</a></li>
                                <li><a href="{{ route('reporte') }}">Reporte</a></li>
                                <li><a href="{{ route('socio.create') }}">Socios</a></li>
                            @endif
                            </ul>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>

        <!-- Scripts -->

            <script type="text/javascript">
                listar();
                function buscar(){
                    var filter = $("#codigo").val();
                    $.ajax({
                    type:"GET",
                    dataType: 'json', // use json only, not jsonp
                    crossDomain: true,
                    url: "welp/"+filter,
                    success: function(data) {
                        if(data.alert == "void"){
                            var filter =  $("#codigo").val();
                            str = '<div class="alert alert-danger">';
                            str += '<strong>NO ENCONTRADO</strong> '+filter;
                            str += '</div>';
                            $("#res").html(str);
                             $("#codigo").val("");
                            $("#codigo").focus();
                        }
                        else{
                            if(data.estado == 0)
                                str = '<div class="col-md-12 alert alert-success">';
                            else
                                str = '<div class="col-md-12 alert alert-danger">';
                            str += '<div class="datos col-md-9">'
                                str += '<div class="form-group col-md-6">';
                                    str += '<label>Apellido Paterno</label>';
                                    str += '<input class="form-control input-lg" value="'+data.paterno+'" id="paterno" name="paterno" readonly>';
                                str += '</div>';
                                str += '<div class="form-group col-md-6">';
                                    str += '<label>Apellido Materno</label>';
                                    str += '<input class="form-control input-lg" value="'+data.materno+'"id="materno" name="materno" readonly>';
                                str += '</div>';
                                str += '<div class="form-group col-md-6">';
                                    str += '<label>Nombres</label>';
                                    str += '<input class="form-control input-lg" value="'+data.nombres+'" id="nombres" name="nombres" readonly>';
                                str += '</div>';
                                str += '<div class="form-group col-md-6">';
                                    str += '<label>Especialidad(es)</label>';
                                    str += '<input class="form-control input-lg" value="'+data.especialidad+'" id="esp" name="esp" readonly>';
                                str += '</div>';
                                str += '<div class="form-group col-md-6">';
                                    str += '<label>Reg. CIP</label>';
                                    str += '<input class="form-control input-lg" value="'+data.codigoCIP+'" id="cip" name="cip" readonly>';
                                str += '</div>';
                                str += '<div class="form-group col-md-6">';
                                    str += '<label>DNI</label>';
                                    str += '<input class="form-control input-lg" value="'+data.dni+'"id="dni" name="dni" readonly>';
                                str += '</div>';
                                str += '<div class="form-group col-md-6">';
                                    str += '<label>Ultimo Pago</label>';
                                    str += '<input class="form-control input-lg" value="'+data.ultimoPago+'" id="upago" name="upago" readonly>';
                                str += '</div>';
                                str += '<div class="form-group col-md-6">';
                                    str += '<label>Número</label>';
                                    str += '<input class="form-control input-lg" value="'+data.id+'" id="hhasta" name="hhasta" readonly>';
                                str += '</div>';
                                
                            str += '</div>';
                            str += '<div class="complementarios col-md-3">';
                                str += '<img class="img-thumbnail" alt="200x200" style="width: 250px;" src="http://cippuno.org.pe/'+data.nombreFoto+'">';
                                if(data.estado == 0){
                                    str += '<button class="form-control input-lg btn btn-success" onclick="javascript:entregarPresente('+data.id+')">Entregar Presente</button>';
                                }
                            str += '</div>';
                        str += '</div>';

                            $("#res").html(str);
                            $("#codigo").val("");
                            $("#codigo").focus();
                            listar();
                        }
                    }});
                }


                function entregarPresente(id){
                    $.ajax({
                    type:"GET",
                    dataType: 'json', // use json only, not jsonp
                    crossDomain: true,
                    url: "entregar/"+id,
                    success: function(data) {
                        if(data.alert == "OK"){
                            $("#res").html("");
                            alert("Marcado Entregado");
                            listar();
                            $("#codigo").focus();
                        }
                    }});
                }

                function listar(){
                    $.ajax({
                    type:"GET",
                    dataType: 'json', // use json only, not jsonp
                    url: "listar",
                    success: function(data) {
                        str = ""
                        for(i=0; i<data.length;i++){
                            str += "<div class='alert alert-success'>";
                            str += data[i].usuario+"<br>";
                            str += "CIP: <b>"+data[i].codigoCIP+"</b> - Nro. <b>"+data[i].id+"</b>";
                            str += "</div>";
                        }

                        $("#lista").html(str);
                    }});   
                }
            </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
