
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Roel's geweldige prokect</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/master.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

        <div class="masthead">

            <h3 class="text-muted">Laravel Project</h3>   
            @include('layouts.nav')
        </div>

        {{--  @include('layouts.header')  --}}
        @yield('header')
            <div class="row">

                @yield('content')
            </div>  

        @include('layouts.footer')

    </div> <!-- /container -->
    
  </body>
</html>
