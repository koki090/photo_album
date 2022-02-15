@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row justify-content-center">
    <form method="post" action="{{ route('users.update', Auth::id()) }}" enctype="multipart/form-data" class="col-12 col-md-8 col-lg-6">
        @csrf
        @method('patch')
        <output id="result" class="row justify-content-center mx-auto w-50">
            <div class="img_position">
                @if($user->image !== '')
                <img src="{{ asset('storage/' . $user->image) }}" class="user_image">
                @else
                <img src="{{ asset('images/no_image.png') }}" class="user_image">
                @endif
            </div>
        </output>
        <div class="form-group">
            <label for="inputFile">プロフィール画像</label>
            <input id="inputFile" type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="inputName">名前</label>
            <input id="inputName" type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="inputEmail">メールアドレス</label>
            <input id="inputEmail" type="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="inputProfile">プロフィール</label>
            <textarea id="inputProfile" name="profile" class="form-control">{{ $user->profile }}</textarea>
        </div>
        <div class="text-right">
            <input type="submit" value="登録" class="btn btn-primary">
        </div>
    </form>
</div>

<script>
    
    let inputFile = document.getElementById("inputFile");
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