@extends('layout')
@extends('blocks.nav')

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

        @foreach ($domains as $domain)
		    <tr>
                <td>
                    {{ $domain->id }}
                </td>
                <td>
                    {{ $domain->name }}
                </td>
                <td>
                    {{ $domain->created_at }}
                </td>
                <td>
                    {{ $domain->updated_at }}
                </td>
            </tr>
        @endforeach

    </table>
</div>

<div class="container">
    {{ $domains->onEachSide(2)->links() }}
</div>

@endsection
