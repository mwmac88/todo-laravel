<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do App - @yield('title')</title>

    <!-- Styles -->
    {{--<link rel="stylesheet" href="{{ elixir("css/app.css") }}">--}}

	<link href="./css/app.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>

	<!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

        @include('partials/_header')

        <main class="mdl-layout__content">
            @if (Session::has('message'))
                <div id="pageMessage" class="mdl-js-snackbar mdl-snackbar mdl-snackbar--active">
                    <div class="mdl-snackbar__text">
                        {{ Session::get('message') }}
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div id="pageErrors" class="mdl-js-snackbar mdl-snackbar mdl-snackbar--active">
                    <div class="mdl-snackbar__text">
                        @foreach ( $errors->all() as $error )
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            @endif

            @yield('content')
        </main>

	</div>

	<!-- Scripts -->
	<script src="./js/app.js"></script>


    {{--@block('scripts')--}}
    {{--<script src="{{ elixir('js/app.js') }}"></script>--}}
    {{--@stop--}}

	</body>
</html>
