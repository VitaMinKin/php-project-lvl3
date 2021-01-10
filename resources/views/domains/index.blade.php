@extends('layout')

@section('navigation')
    <header>
        <nav class="nav bg-dark text-white">
            <a class="nav-link active text-white" href="/index.php">Home</a>
            <a class="nav-link text-white" href="/domains">Domains</a>
        </nav>
    </header>
@endsection

@section('content')

<div class="flex-grow-1">
    <div class='jumbotron jumbotron-fluid bg-dark'>
        <div class='container-lg'>
            <div class='row'>
                <div class='col-12 col-md-10 col-lg-8 mx-auto text-white'>
                        <h1 class='display-3'>Page Analyzer</h1>
                        <p class='lead'>Check web pages for free</p>

                        <form class='d-flex justyfy-content-center' type="post" actions="/domains">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name='domains[name]' placeholder="www.example.com" value="">
                                <button class="btn btn-primary ml-3 px-5 text-uppercase" type="submit">Check</button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')

    <footer class='border-top py-3 mt-5'>
        <div class='container'>
            <div class='text-center'>
                created by
                <a href="https://ru.hexlet.io/u/vitaminkin" target="_blank">VMk by Hexlet</a>
            </div>
        </div>
    </footer>

@endsection
