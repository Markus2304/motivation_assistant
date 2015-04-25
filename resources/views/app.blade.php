<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Motivation Assistant</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../assets/css/styles.css">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="." class="navbar-brand">Domov</a>
        </div>
            @if (Auth::guest())
                <nav class="collapse navbar-collapse bs-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                        </li>
                        <li class="active">
                            <a href="http://www.fu.uni-lj.si/">Spletna stran fakultete</a>
                        </li>
                        <li>
                            <a href="https://estudent.fu.uni-lj.si/">E-Študent FU</a>
                        </li>
                        <li>
                            <a href="https://e-izobrazevanje.fu.uni-lj.si/">Spletna učilnica FU</a>
                        </li>
                        <li>
                            <a href="http://www.mizs.gov.si/">Ministrstvo za izobraževanje</a>
                        </li>
                    </ul>
            @else
                    <nav class="collapse navbar-collapse bs-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                            </li>
                            <li class="active">
                                <a href="{{ url('hierarchy') }}">Hierarhija organizacije</a>
                            </li>
                            <li>
                                <a href="{{ url('profile') }}">Profil</a>
                            </li>
                            <li>
                                <a href="{{ url('user') }}">Uporabniki</a>
                            </li>
                            <li>
                                <a href="{{ url('help') }}">Pomoč in vprašanja</a>
                            </li>
                            <li>
                                <a href="{{ url('suggest') }}">Mnenja in predlogi</a>
                            </li>
                        </ul>
            @endif
            @if (Auth::guest())
            @else
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->ime }} <span class="caret"></span></a>
                <a href="{{ url('/auth/logout') }}">Odjava</a>
            @endif
        </nav>
    </div>

    <div class="jumbotron" style="background-color:#428bca;">
        <div class="container">
            <h1 style="color:white;">Motivation assistant</h1>
            <p style="color:#c0c0c0;">Socialno omrežje Fakultete za upravo, namenjeno izboljševanju motivacije.</p>
        </div>
    </div>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="./../assets/js/script.js"></script>

</body>
</html>
