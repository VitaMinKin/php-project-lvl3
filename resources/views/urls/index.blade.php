@extends('layout')

@section('content')


<div class="container">
    <h1 class="mt-5 mb-3"> Сохраненные домены: </h1>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>
                    Идентификатор
                </th>
                <th>
                    Адрес
                </th>
                <th>
                    Дата создания
                </th>
                <th>
                    Дата обновления
                </th>
            </tr>
        </thead>

        @foreach ($urls as $url)
		    <tr>
                <td>
                    {{ $url->id }}
                </td>
                <td>
                    {{ $url->name }}
                </td>
                <td>
                    {{ $url->created_at }}
                </td>
                <td>
                    {{ $url->updated_at }}
                </td>
            </tr>
        @endforeach

    </table>
</div>

<div class="container">
    {{ $urls->onEachSide(2)->links() }}
</div>

@endsection
