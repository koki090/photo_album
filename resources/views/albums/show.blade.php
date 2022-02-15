@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row align-items-center">
    <div class="col-6 d-flex">
        <div>
            <h1 class="text-truncate">{{ $album->title }}</h1>
        </div>
        <div class="mt-2 ml-3">
            @if($album->user_id !== Auth::id())
            @if($album->isLikedBy(Auth::id()))
            <a class="click_action"><i class="fas fa-heart fa-2x like_btn"></i></a>
            @else
            <a class="click_action"><i class="fas fa-heart fa-2x not_like_btn"></i></a>
            @endif
            <form method="post" action="{{ route('likes.toggle_like', $album->id) }}">
                @csrf
                @method('patch')
            </form>
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ route('users.show', $album->user->id) }}" class="d-flex justify-content-end align-items-center text-decoration-none">
                <div>
                    @if($album->user->image !== '')
                    <img src="{{ asset('storage/' . $album->user->image) }}" class="user_image_min">
                    @else
                    <img src="{{ asset('images/no_image.png') }}" class="user_image_min">
                    @endif
                </div>
                <div class="text-truncate user_name_min">
                    {{ $album->user->name }}
                </div>
            </a>
            @if($album->user_id === Auth::id())
            <div class="dropdown">
                <a class="dropdown-toggle default_icon" href="#" id="albumMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="albumMenu">
                    <a class="dropdown-item" href="{{ route('albums.edit', $album->id) }}" class="nav-link">タイトル・コメントの編集</a>
                    <a class="dropdown-item" href="{{ route('albums.push_photo', $album->id) }}" class="nav-link">写真の追加</a>
                    <a class="dropdown-item" href="{{ route('albums.delete_photo', $album->id) }}" class="nav-link">写真の削除</a>
                    <a class="dropdown-item click_action" class="nav-link">アルバムの削除</a>
                    <form method="post" action="{{ route('albums.destroy', $album->id) }}">
                        @csrf
                        @method('delete')
                    </form>
                    @if($album->isReleased())
                    <a class="click_action dropdown-item" class="nav-link">非公開にする</a>
                    @else
                    <a class="click_action dropdown-item" class="nav-link">公開する</a>
                    @endif
                    <form method="post" action="{{ route('albums.toggle_release', $album->id) }}">
                        @csrf
                        @method('patch')
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="col-12 album_comment">
        {{ $album->comment }}
    </div>
</div>

<div class="row">
    @foreach($album->photos as $photo)
    <div class="col-3 col-sm-3 col-md-2 col-lg-2 p-2">
        <a data-toggle="modal" data-target="#modal{{ $photo->id }}">
            <div class="img_position">
                <img src="{{ asset('storage/' . $photo->path) }}" class="album_photo">
            </div>
        </a>
        <div class="modal fade" id="modal{{ $photo->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-body">
                    <img src="{{ asset('storage/' . $photo->path) }}" class="img-fluid">
                </div>
                <div class="modal-footer pt-0" style="border: none;">
                    <button class="btn btn-primary" data-dismiss="modal">戻る</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection