@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row justify-content-center">
    <form method="post" action="{{ route('users.update', Auth::id()) }}" enctype="multipart/form-data" class="col-12 col-md-8 col-lg-6">
        @csrf
        @method('patch')
        <output id="result" class="row justify-content-center">
            <div>
                @if($user->image !== '')
                <img src="{{ asset('storage/' . $user->image) }}" class="image_preview">
                @else
                <img src="{{ asset('images/no_image.png') }}" class="image_preview">
                @endif
            </div>
        </output>
        <div class="form-group">
            <label for="input_file">プロフィール画像</label>
            <input id="input_file" type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="input_name">名前</label>
            <input id="input_name" type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="input_email">メールアドレス</label>
            <input id="input_email" type="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="input_profile">プロフィール</label>
            <textarea id="input_profile" name="profile" class="form-control">{{ $user->profile }}</textarea>
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
        output.innerHTML = "<div><img src='{{ asset('images/no_image.png') }}' class='image_preview'></div>";
        if(file.type.match('image')){
            let fileReader = new FileReader;
            fileReader.addEventListener("load", (event) => {
                let imageFile = event.target;
                let div = document.createElement("div");
                div.innerHTML = "<img src='" + imageFile.result + "' class='image_preview'>";
                output.innerHTML = "";
                output.insertBefore(div, null);
            });
            fileReader.readAsDataURL(file);
        };
    });
</script>

@endsection