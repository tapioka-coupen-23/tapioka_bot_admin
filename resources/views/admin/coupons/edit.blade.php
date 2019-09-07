

@extends('dashboard-layout')

@section('content')
    <div class="container" style="background-color: white; margin-top: 100px; padding: 30px;">
    <h1>クーポン保存</h1>
    @if(!empty($coupon))
        <form action="{{ route('admin.coupons.update', [$coupon->id]) }}" method="post">
        <input type="hidden" name="_method" id="_method" value="patch">
    @else
        <form action="{{ route('admin.coupons.create.exec') }}" method="post">
        <input type="hidden" name="_method" id="_method" value="PUT">
    @endif
            {{ csrf_field() }}
            <div>
                <label class="col-3 label label-primary">店舗</label>
                <select name="store_id" class="form-control col-8">
                    @foreach($stores as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="col-3 label label-primary">クーポン名</label>
                <input type="text" class="form-control col-8" name="name" value="{{ !empty($coupon) ? old('name', $coupon->name) : old('name') }}">
            </div>
            <div class="form-group">
                <label class="col-3">説明</label>
                <textarea class="form-control" name="description">{{ !empty($coupon) ? old('description', $coupon->description) : old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">保存</button>
        </form>
    </div>
@endsection