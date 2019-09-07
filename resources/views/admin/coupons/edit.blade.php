

@extends('dashboard-layout')

@section('content')
    <h1>店舗保存</h1>
    @if(!empty($coupon))
        <form action="{{ route('admin.coupons.update', [$coupon->id]) }}" method="post">
        <input type="hidden" name="_method" id="_method" value="patch">
    @else
        <form action="{{ route('admin.coupons.create.exec') }}" method="post">
        <input type="hidden" name="_method" id="_method" value="PUT">
    @endif
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-3 label label-primary">店名</label>
                <input type="text" class="form-control col-8" name="name" value="{{ !empty($coupon) ? old('name', $coupon->name) : old('name') }}">
            </div>
            <div class="form-group">
                <label class="col-3">店舗URL</label>
                <input type="text" class="form-control col-8" name="url" value="{{ !empty($coupon) ? old('url', $coupon->url) : old('url') }}">
            </div>
            <div class="form-group">
                <label class="col-3">説明</label>
                <textarea class="form-control" name="description">{{ !empty($coupon) ? old('description', $coupon->description) : old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">保存</button>
        </form>
@endsection