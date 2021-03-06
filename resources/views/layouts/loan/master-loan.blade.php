
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/master.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <div class="masthead">

        @include('layouts.nav')  

        @include('layouts.admin.sidebar')
          <main class="col-sm-9 col-md-10 " role="main">
         
          <h2>Loan Classes</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                  @include('layouts.loan.catogories')
                    <tbody>
                      @yield('content-loan')
                    </tbody>
                </table>
            </div>
            @yield('below-table')
            </main>
        </div>
        @include('layouts.footer')
      </div>
    </div>
  </body>
</html>
