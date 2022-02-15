@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row justify-content-center">
    <form method="post" action="{{ route('albums.update', $album->id) }}" class="col-12 col-md-8 col-lg-6">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="inputTitle">タイトル</label>
            <input id="inputTitle" type="text" name="title" value="{{ $album->title }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputComment">コメント</label>
            <textarea id="inputComment" name="comment" class="form-control">{{ $album->comment }}</textarea>
        </div>
        <div class="text-right">
            <input type="submit" value="編集を保存" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection

