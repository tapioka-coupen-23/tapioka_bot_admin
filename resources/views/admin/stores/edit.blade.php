

@extends('dashboard-layout')

@section('content')
    <div class="container" style="background-color: white; margin-top: 100px; padding: 30px;">
    <h1>店舗保存</h1>
    @if(!empty($store))
        <form action="{{ route('admin.stores.update', [$store->id]) }}" method="post">
        <input type="hidden" name="_method" id="_method" value="patch">
    @else
        <form action="{{ route('admin.stores.create.exec') }}" method="post">
        <input type="hidden" name="_method" id="_method" value="PUT">
    @endif
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-3 label label-primary">店名</label>
                <input type="text" class="form-control col-8" name="name" value="{{ !empty($store) ? old('name', $store->name) : old('name') }}" required>
            </div>
            <div class="form-group">
                <label class="col-3">店舗URL</label>
                <input type="url" class="form-control col-8" name="url" value="{{ !empty($store) ? old('url', $store->url) : old('url') }}" required>
            </div>
            <div class="form-group">
                <label class="col-3">説明</label>
                <textarea  name="description" class="form-control col-10" required>{{ !empty($store) ? old('description', $store->description) : old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">保存</button>
        </form>
    </div>
@endsection