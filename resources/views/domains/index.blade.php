@extends('layout')
@extends('blocks.nav')

@section('content')

<div class="flex-grow-1">

    @include('flash::message')

    <div class='jumbotron jumbotron-fluid bg-dark'>
        <div class='container-lg'>
            <div class='row'>
                <div class='col-12 col-md-10 col-lg-8 mx-auto text-white'>
                        <h1 class='display-3'>Page Analyzer</h1>
                        <p class='lead'>Check web pages for free</p>

                        <form class='d-flex justyfy-content-center' method="post" action="/domains">
                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name='domain[name]' placeholder="http://www.example.com" value="">
                                <button class="btn btn-primary ml-3 px-5 text-uppercase" type="submit">Check</button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('blocks.footer')
