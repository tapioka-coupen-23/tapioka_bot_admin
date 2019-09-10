
<div class="container" style="background-color: white; margin-top: 100px; padding: 30px;">
    <div class="row" style="text-align: center;">
    <h1>クーポン詳細</h1>
        <p>クーポン名:{{ $coupon->name }}</p>
        <p>クーポン説明:{{ $coupon->description }}</p>
        <p>QRコード</p>
        <img src="data:image/png;base64, {{$coupon->qr_code  }}">
    </div>
</div>
