@extends('dashboard-layout')

@section('content')
<h4 class="c-grey-900 mB-20">ホーム</h4>
<div class="mT-30">
    <div class="gap-10 peers">
        <div class="peer">
            <a href="admin/coupons/create">
                <button type="button" class="btn cur-p btn-success" style="margin:30px;">新規クーポン登録</button>
            </a>
        </div>

        <div class="peer">
            <a href="admin/stores/create">
                <button type="button" class="btn cur-p btn-warning" style="margin:30px;">店舗登録</button>
            </a>
        </div>
    </div>
</div>
@endsection