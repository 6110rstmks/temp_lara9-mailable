@if ( Session::has('email'))
<div>
    <p>{{session('email')}}へ送信完了しました。</p>
</div>
@endif

<form action="{{ url('contact2') }}" method="POST">
    @csrf

    <p>現在のメールアドレス：＊＊＊＊</p>
    <p>変更後のメールアドレス：<input type="email" name="email"></p>

    <input type="submit" value="送信">
</form>
