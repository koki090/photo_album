<?php
$title = '会員登録';
?>

@extends('layouts.not_logged_in')

@section('content')

<div class="row justify-content-center">
    <form method="post" action="{{ route('register') }}" enctype="multipart/form-data" class="col-12 col-md-8 col-lg-6">
        @csrf
        <output id="result" class="row justify-content-center w-50 mx-auto">
            <div class="img_position">
                <img src="{{ asset('images/no_image.png') }}" class="user_image">
            </div>
        </output>
        <div class="form-group">
            <label for="input_file">プロフィール画像</label>
            <input id="input_file" type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="input_name">名前</label>
            <input id="input_name" type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="input_email">メールアドレス</label>
            <input id="input_email" type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="input_password">パスワード</label>
            <input id="input_password" type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="input_password_confirmation">パスワード（再確認）</label>
            <input id="input_password_confirmation" type="password" name="password_confirmation" class="form-control">
        </div>
        <div class="text-right">
            <input type="submit" value="登録" class="btn btn-primary">
        </div>
    </form>
</div>

<script>
    
    let inputFile = document.getElementById("input_file");
    inputFile.addEventListener("change", (event) => {
        let file = event.target.files[0];
        let output = document.getElementById("result");
        output.innerHTML = "<div class='img_position'><img src='{{ asset('images/no_image.png') }}' class='user_image'></div>";
        if(file.type.match('image')){
            let fileReader = new FileReader;
            fileReader.addEventListener("load", (event) => {
                let imageFile = event.target;
                let div = document.createElement("div");
                div.classList.add('img_position');
                div.innerHTML = "<img src='" + imageFile.result + "' class='user_image'>";
                output.innerHTML = "";
                output.insertBefore(div, null);
            });
            fileReader.readAsDataURL(file);
        };
    });
</script>

@endsection