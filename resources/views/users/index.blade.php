@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data dari tabel: users</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    @foreach($data->first()?->getAttributes() ?? [] as $key => $value)
                        <th>{{ $key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        @foreach($item->getAttributes() as $val)
                            <td>{{ $val }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection