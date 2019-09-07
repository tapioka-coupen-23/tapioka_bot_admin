
<div class="container" style="background-color: white; margin-top: 100px; padding: 30px;">
    <div class="row" style="text-align: center;">
    <h1>クーポン詳細</h1>
        <p>名前:{{ $coupon->name }}</p>
        <p>url:{{ $coupon->url }}</p>
        <p>qrコード</p>
        <img src="data:image/png;base64, {{$coupon->qr_code  }}">
    </div>
</div>
