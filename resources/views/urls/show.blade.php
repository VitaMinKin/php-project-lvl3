@extends('layout')

@section('content')
    <div class='container-lg'>
        <h1 class="mt-5 mb-3">Сайт: <a href="http://{{ $url->name }}">{{ $url->name }}</a> </h1>
        <table class="table table-bordered table-hover text-nowrap">
            <tr>
                <td> ID </td>
                <td> {{$url->id}}
            </tr>
            <tr>
                <td> Имя </td>
                <td> {{$url->name}}
            </tr>
            <tr>
                <td> Дата создания </td>
                <td> {{$url->created_at}}
            </tr>
            <tr>
                <td> Дата обновления </td>
                <td> {{$url->updated_at}}
            </tr>
        </table>
    </div>

@endsection
