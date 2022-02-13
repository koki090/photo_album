@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row justify-content-center">
    <form method="post" action="{{ route('albums.select_push_photo', $album_id) }}" enctype="multipart/form-data" class="col-12 col-md-8 col-lg-6">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="input_photo">写真を追加</label>
            <input id="input_photo" type="file" name="photos[]" class="form-control-file" multiple>
        </div>
        <output id="result" class="photo_preview_window row"></output>
        <div class="text-right">
            <input type="submit" value="写真を追加" class="btn btn-primary">
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

