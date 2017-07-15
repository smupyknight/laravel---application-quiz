<!doctype html>
<html lang="{{ config('app.locale' , true) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Big Lou Insurance</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <link href="{{ asset('//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css', true)}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', true)}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css' , true) }}" media="all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/responsive.css' , true) }}" media="all" rel="stylesheet" type="text/css" />

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js' , false) }}"></script>
        <script type="text/javascript" src="{{ asset('//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js' , false) }}"></script>
        <script type="text/javascript" src="{{ asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' , false) }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.cookie.js' , true) }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.session.js' , true) }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.pjax.js' , true) }}"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js' , true) }}"></script>

        <script>
            var cur_slide = '{{$id}}';
        </script>
    </head>
    <body>
        <header>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-4'>
                        <div class='burger-menu'>
                            <a><div>MENU</div></a>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <a class='logo-link'><img src="{{ asset('image/logo.png' , true) }}" width='178' height='178' alt='logo' /></a>
                    </div>
                    <div class='col-md-4'>
                        <div class='contact'>800-301-6470</div>
                    </div>
                </div>
            </div>
            @if (isset($params))
                <input type='hidden' id='params' value="{{ json_encode($params) }}">
            @endif
        </header> 
        <div id='pjax-container' class='container-fluid'>
            @yield('pjax-content')
        </div>
    </body>
</html>