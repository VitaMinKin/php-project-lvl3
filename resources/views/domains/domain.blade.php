@extends('layout')

@extends('blocks.nav')

@section('content')
    <div class='container-lg'>
        <h1 class="mt-5 mb-3">Сайт: <a href="http://{{ $domain->name }}">{{ $domain->name }}</a> </h1>
        <table class="table table-bordered table-hover text-nowrap">
            <tr>
                <td> ID </td>
                <td> {{$domain->id}}
            </tr>
            <tr>
                <td> Имя </td>
                <td> {{$domain->name}}
            </tr>
            <tr>
                <td> Дата создания </td>
                <td> {{$domain->created_at}}
            </tr>
            <tr>
                <td> Дата обновления </td>
                <td> {{$domain->updated_at}}
            </tr>
        </table>
    </div>

@endsection

@extends('blocks.footer')
