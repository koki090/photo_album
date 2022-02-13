@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row justify-content-center">
    <form method="post" action="{{ route('albums.store') }}" enctype="multipart/form-data" class="col-12 col-md-8 col-lg-6">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <div class="form-group">
            <label for="input_title">タイトル</label>
            <input id="input_title" type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="input_comment">コメント</label>
            <textarea id="input_comment" name="comment" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="input_photo">写真を選択</label>
            <input id="input_photo" type="file" name="photos[]" class="form-control-file" multiple>
        </div>
        <output id="result" class="photo_preview_window row"></output>
        <div class="form-group form-check">
            <input type="hidden" name="release" value="0">
            <input id="input_release" type="checkbox" name="release" value="1" class="form-check-input">
            <label for="input_release" class="form-check-label">公開する</label>
        </div>
        <div class="text-right">
            <input type="submit" value="アルバム作成" class="btn btn-primary">
        </div>
    </form>
</div>

<script>
    let inputFiles = document.getElementById("input_photo");
    inputFiles.addEventListener("change", (event) => {
        let files = event.target.files;
        let output = document.getElementById("result");
        output.innerHTML = "";
        for(let i = 0; i < files.length; i++){
            let file = files[i];
            if(!file.type.match('image')){
                continue;
            };
            let fileReader = new FileReader;
            fileReader.addEventListener("load", (event) => {
                let imageFile = event.target;
                let div = document.createElement("div");
                div.classList.add('col-lg-2', 'col-md-2', 'col-sm-3', 'col-3', 'photo_preview_flame', 'align-items-center');
                div.innerHTML = "<img src='" + imageFile.result + "' class='photo_preview'>";
                output.insertBefore(div, null);
            });
            fileReader.readAsDataURL(file);
            };
        });
</script>

@endsection

