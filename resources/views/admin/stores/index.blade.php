@extends('dashboard-layout')

@section('content')
<h4 class="c-grey-900 mB-20">店舗一覧</h4>
<a href="{{ route('admin.stores.create') }}" class="btn btn-success">作成</a>
<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>店舗名</th>
            {{--<th>クーポン</th>--}}
            <th>url</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stores as $store)
        <tr>
            <td class="text-center">{{ $store->id }}</td>
            <td>{{ $store->name }}</td>
            {{--<td>Develop</td>--}}
            <td><a href="{{ $store->url }}" target="_blank">{{ $store->url }}</a></td>
            <td class="td-actions text-right">
                {{--<button type="button" rel="tooltip" class="btn btn-info">--}}
                    {{--<i class="material-icons">person</i>--}}
                    {{--</button>--}}
                <button type="button" rel="tooltip" class="btn btn-success">
                    <a href="{{ route('admin.stores.edit', [$store->id]) }}" class="text-white"><i
                            class="material-icons">edit</i></a>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger">
                    <i class="material-icons">close</i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection