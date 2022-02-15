@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row justify-content-center">
    <form method="post" action="{{ route('albums.select_push_photo', $album_id) }}" enctype="multipart/form-data" class="col-12">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="inputPhoto">写真を追加</label>
            <input id="inputPhoto" type="file" name="photos[]" class="form-control-file" multiple>
        </div>
        <div class="photo_preview_window">
            <output id="result" class="row"></output>
        </div>
        <div class="text-right">
            <input type="submit" value="写真を追加" class="btn btn-primary">
        </div>
    </form>
</div>

<script>
    let inputFiles = document.getElementById("inputPhoto");
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
                div.classList.add('col-3', 'col-sm-3', 'col-md-2', 'col-lg-2', 'photo_flame');
                div.innerHTML = "<div class='img_position'><img src='" + imageFile.result + "' class='album_photo'></div>";
                output.insertBefore(div, null);
                });
            fileReader.readAsDataURL(file);
            };
        });
</script>

@endsection