@extends('layouts.logged_in')

@section('title', $title)

@section('content')
<div class="row justify-coneten-center col-12" style="margin: 0 auto;">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
        <div>
            @if($user->image !== '')
            <img src="{{ asset('storage/' . $user->image) }}" class="image_preview">
            @else
            <img src="{{ asset('images/no_image.png') }}" class="image_preview">
            @endif
            <p class="text-truncate user_name">{{ $user->name }}</p>
        </div>
        <div class="user_menu">
            @if($user->id === Auth::id())
            <a href="{{ route('users.edit', Auth::user()) }}">アカウント編集</a>
            @else
            @if(Auth::user()->isFollowBy($user->id))
            <a class="click_action">フォロー中</a>
            @else
            <a class="click_action">フォローする</a>
            @endif
            <form method="post" action="{{ route('follows.toggle_follow', $user->id) }}">
                @csrf
                @method('patch')
            </form>
            @endif
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center row d-flex align-items-center" style="margin: 0 auto;">
        <div class="col-12">
            <ul class="list-group list-group-flush list-group-horizontal-md">
                <li class="list-group-item">
                    アルバム　 :　{{ $album_count }}
                </li>
                <li class="list-group-item">
                    <a href="{{ route('follows.follower' , $user->id) }}">
                        フォロワー :　{{ $follower_count }}
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('follows.index' , $user->id) }}">
                        フォロー　 :　{{ $follow_user_count }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="col-12">
    <ul class="nav nav-tabs">
        @if($user->id === Auth::id())
        <li class="nav-item">
            <a href="#albums" class="nav-link active" data-toggle="tab">全てのアルバム</a>
        </li>
        <li class="nav-item">
            <a href="#openAlbums" class="nav-link" data-toggle="tab">公開中</a>
        </li>
        <li class="nav-item">
            <a href="#closeAlbums" class="nav-link" data-toggle="tab">非公開</a>
        </li>
        @else
        <li class="nav-item">
            <a href="#openAlbums" class="nav-link active" data-toggle="tab">公開中のアルバム</a>
        </li>
        @endif
    </ul>
</div>

<div class="tab-content">
    @if($user->id === Auth::id())
    <div id="albums" class="tab-pane active">
    @else
    <div id="albums" class="tab-pane">
    @endif
        <div class="row">
            @forelse($albums as $album)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 d-flex flex-column album">
                <a href="{{ route('albums.show', $album->id) }}">
                    <div class="card h-100">
                        <div class="card-header text-center" style="padding: 1vh;">
                            <p class="text-dark text-truncate" style="margin: 0 3vh auto 3vh;">{{ $album->title }}</p>
                        </div>
                        <div class="card-body" style="padding: 1vh; position: relative;">
                            <div class="slick_photos">
                                @foreach($album->photos as $photo)
                                <img src="{{ asset('storage/' . $photo->path) }}" class="card-img-bottom card_img">
                                @endforeach
                            </div>
                            <div class="release_form">
                                @if($album->isReleased())
                                <a class="click_action"><i class="fa-solid fa-lock-open fa-2x release_btn"></i></a>
                                @else
                                <a class="click_action"><i class="fa-solid fa-lock fa-2x release_btn"></i></a>
                                @endif
                                <form method="post" action="{{ route('albums.toggle_release', $album->id) }}">
                                    @csrf
                                    @method('patch')
                                </form>
                            </div>
                        </div>
                    </div>    
                </a>
            </div>
            @empty
            <div class="col-12 text-center noting_comment">アルバムはありません。</div>
            @endforelse
        </div>
    </div>
    @if($user->id === Auth::id())
    <div id="openAlbums" class="tab-pane">
    @else
    <div id="openAlbums" class="tab-pane active">
    @endif
        <div class="row">
            @forelse($open_albums as $album)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 d-flex flex-column album">
                <a href="{{ route('albums.show', $album->id) }}">
                    <div class="card h-100">
                        <div class="card-header text-center" style="padding: 1vh;">
                            <p class="text-dark text-truncate" style="margin: 0 3vh auto 3vh;">{{ $album->title }}</p>
                        </div>
                        <div class="card-body" style="padding: 1vh; position: relative;">
                            <div class="slick_photos">
                                @foreach($album->photos as $photo)
                                <img src="{{ asset('storage/' . $photo->path) }}" class="card-img-bottom card_img">
                                @endforeach
                            </div>
                            @if($user->id === Auth::id())
                            <div class="release_form">
                                <a class="click_action"><i class="fa-solid fa-lock-open fa-2x release_btn"></i></a>
                                <form method="post" action="{{ route('albums.toggle_release', $album->id) }}">
                                    @csrf
                                    @method('patch')
                                </form>
                            </div>
                            @else
                            <div class="like_form">
                                @if($album->isLikedBy(Auth::id()))
                                <a class="click_action"><i class="fas fa-heart fa-2x like_btn"></i></a>
                                @else
                                <a class="click_action"><i class="fas fa-heart fa-2x not_like_btn"></i></a>
                                @endif
                                <form method="post" action="{{ route('likes.toggle_like', $album->id) }}">
                                    @csrf
                                    @method('patch')
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>    
                </a>
            </div>
            @empty
            <div class="col-12 text-center noting_comment">公開中のアルバムはありません。</div>
            @endforelse
        </div>
    </div>
    <div id="closeAlbums" class="tab-pane">
        <div class="row">
            @forelse($close_albums as $album)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 d-flex flex-column album">
                <a href="{{ route('albums.show', $album->id) }}">
                    <div class="card h-100">
                        <div class="card-header text-center" style="padding: 1vh;">
                            <p class="text-dark text-truncate" style="margin: 0 3vh auto 3vh;">{{ $album->title }}</p>
                        </div>
                        <div class="card-body" style="padding: 1vh; position: relative;">
                            <div class="slick_photos">
                                @foreach($album->photos as $photo)
                                <img src="{{ asset('storage/' . $photo->path) }}" class="card-img-bottom card_img">
                                @endforeach
                            </div>
                            <div class="release_form">
                                <a class="click_action"><i class="fa-solid fa-lock fa-2x release_btn"></i></a>
                                <form method="post" action="{{ route('albums.toggle_release', $album->id) }}">
                                    @csrf
                                    @method('patch')
                                </form>
                            </div>
                        </div>
                    </div>    
                </a>
            </div>
            @empty
            <div class="col-12 text-center noting_comment">非公開のアルバムはありません。</div>
            @endforelse
        </div>
    </div>
</div>


@endsection