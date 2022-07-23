<form action="post" method="post">
{{--    <input type="hidden"n name="_token" value="<?php  echo csrf_token() ?>">--}}
    @csrf

    Nhap gi do di
    <input type="text" name="a">
    <button>Nhap</button>
</form>
