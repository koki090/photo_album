<?php
$title = 'ログイン画面';
?>

@extends('layouts.not_logged_in')

@section('content')

<div class="row justify-content-center">
    <form method="post" action="{{ route('login') }}" class="col-12 col-md-8 col-lg-6">
        @csrf
        <div class="form-group">
            <label for="input_email">メールアドレス</label>
            <input id="input_email" type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="input_password">パスワード</label>
            <input id="input_password" type="password" name="password" class="form-control">
        </div>
        <div class="text-right">
            <input type="submit" value="ログイン" class="btn btn-primary">
        </div>
    </form>    
</div>

@endsection