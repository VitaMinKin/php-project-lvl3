<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ URL::asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ URL::asset("css/main.css") }}">

    <title>Page Analyzer!</title>
  </head>
  <body>

  <header>
        <nav class="nav bg-dark text-white">
            <a class="nav-link active text-white" href="/index.php">Home</a>
            <a class="nav-link text-white" href="/urls">URL's</a>
        </nav>
  </header>

        @yield('content')

    <footer class='border-top py-3 mt-5'>
        <div class='container'>
            <div class='text-center'>
                created:
                <a href="https://ru.hexlet.io/u/vitaminkin" target="_blank">VMk by Hexlet</a>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="{{ URL::asset("js/app.js") }}"></script>
    <script type="text/javascript" src="{{ URL::asset("js/main.js") }}"></script>
  </body>
</html>
