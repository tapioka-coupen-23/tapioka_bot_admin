@extends('dashboard-layout')

@section('content')
    <a href="{{ route('admin.coupons.create') }}" class="btn btn-success">作成</a>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th>ユーザー名</th>
            {{--<th>クーポン</th>--}}
            <th>都道府県</th>
            <th class="text-right">年齢</th>
            <th class="text-right">性別</th>
        </tr>
        </thead>
        <tbody>
            @foreach($coupons as $coupon)
                <tr>
                    <td class="text-center">1</td>
                    <td>Andrew Mike</td>
                    {{--<td>Develop</td>--}}
                    <td>2013</td>
                    <td class="text-right">&euro; 99,225</td>
                    <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                            <i class="material-icons">person</i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                            <a href="{{ route('admin.coupons.edit', [$coupon->id]) }}" class="text-white"><i class="material-icons">edit</i></a>
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