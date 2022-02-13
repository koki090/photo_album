@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
        <div id="photos" class="photo_preview_window row">
            @foreach($album_photos as $photo)
            <div class="col-lg-2 col-md-2 col-sm-3 col-3 photo_preview_flame align-items-center">
                <a onclick="selectPhoto({{ $photo->id }});"><img src="{{ asset('storage/' . $photo->path) }}" class="photo_preview"></a>
            </div>
            @endforeach
        </div>
        <form method="post" action="{{ route('albums.select_delete_photo', $album_id) }}" name="select_delete_photos">
            @csrf
            @method('patch')
            <output id="result"></output>
            <div class="text-right">
                <input type="submit" value="写真を削除" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<script>
    function selectPhoto(id){
        if(event.target.classList.contains("select")){
            event.target.classList.remove("select");
            let deleteDiv = document.getElementById(id);
            deleteDiv.parentNode.remove();
        }else{
            event.target.classList.add("select");
            let output = document.getElementById("result")
            let div = document.createElement("div");
            div.innerHTML = "<input id='" + id + "' type='hidden' name='photo_ids[]' value='" + id + "'>";
            output.insertBefore(div, null);
            let selectLength = output.childElementCount;
            let photosLength = document.getElementById("photos").childElementCount;
            if(selectLength === photosLength){
                alert("写真を全て削除すると、アルバムごとの削除になります。")
            }
        };
    }
</script>

@endsection