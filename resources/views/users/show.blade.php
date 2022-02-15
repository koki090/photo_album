@extends('layouts.logged_in')

@section('title', $title)

@section('content')
<div class="row col-11 justify-coneten-center mx-auto">
    <div class="col-8 col-sm-8 col-md-5 col-lg-5 text-center mx-auto">
        <div class="w-75 mx-auto">
            <div class="img_position">
                @if($user->image !== '')
                <img src="{{ asset('storage/' . $user->image) }}" class="user_image">
                @else
                <img src="{{ asset('images/no_image.png') }}" class="user_image">
                @endif
            </div>
            <div class="text-truncate w-75 mx-auto">{{ $user->name }}</div>
            <div>
                @if($user->id === Auth::id())
                <a href="{{ route('users.edit', Auth::user()) }}" class="text-decoration-none">アカウント編集</a>
                @else
                @if(Auth::user()->isFollowBy($user->id))
                <a href="#" class="click_action text-decoration-none">フォロー中</a>
                @else
                <a href="#" class="click_action text-decoration-none">フォローする</a>
                @endif
                <form method="post" action="{{ route('follows.toggle_follow', $user->id) }}">
                    @csrf
                    @method('patch')
                </form>
                @endif
            </div>
        </div>
    </div>
    <div class="row col-12 col-sm-12 col-md-5 col-lg-5 text-center d-flex align-items-center" style="margin: 0 auto;">
        <div class="col-12">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    アルバム　 :　{{ $album_count }}
                </li>
                <li class="list-group-item">
                    <a href="{{ route('follows.follower' , $user->id) }}" class="text-decoration-none">
                        フォロワー :　{{ $follower_count }}
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('follows.index' , $user->id) }}" class="text-decoration-none">
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
            <a href="#albums" data-toggle="tab" class="nav-link active">全てのアルバム</a>
        </li>
        <li class="nav-item">
            <a href="#openAlbums" data-toggle="tab" class="nav-link">公開中</a>
        </li>
        <li class="nav-item">
            <a href="#closeAlbums" data-toggle="tab" class="nav-link">非公開</a>
        </li>
        @else
        <li class="nav-item">
            <a href="#openAlbums" data-toggle="tab" class="nav-link" active>公開中のアルバム</a>
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
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 d-flex flex-column pt-3">
                <a href="{{ route('albums.show', $album->id) }}" class="text-decoration-none">
                    <div class="card h-100">
                        <div class="card-header text-center p-2">
                            <p class="text-dark text-truncate mx-3 my-0">{{ $album->title }}</p>
                        </div>
                        <div class="card-body album_body">
                            <div class="img_position">
                                @foreach($album->photos as $photo)
                                @if($loop->first)
                                    <img src="{{ asset('storage/' . $photo->path) }}" class="card-img-bottom album_photo">
                                @endif
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
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 d-flex flex-column pt-3">
                <a href="{{ route('albums.show', $album->id) }}" class="text-decoration-none">
                    <div class="card h-100">
                        <div class="card-header text-center p-2">
                            <p class="text-dark text-truncate mx-3 my-0">{{ $album->title }}</p>
                        </div>
                        <div class="card-body album_body">
                            <div class="img_position">
                                @foreach($album->photos as $photo)
                                @if($loop->first)
                                <img src="{{ asset('storage/' . $photo->path) }}" class="card-img-bottom album_photo">
                                @endif
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
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 d-flex flex-column pt-3">
                <a href="{{ route('albums.show', $album->id) }}" class="text-decoration-none">
                    <div class="card h-100">
                        <div class="card-header text-center p-2">
                            <p class="text-dark text-truncate mx-3 my-0">{{ $album->title }}</p>
                        </div>
                        <div class="card-body album_body">
                            <div class="img_position">
                                @foreach($album->photos as $photo)
                                @if($loop->first)
                                <img src="{{ asset('storage/' . $photo->path) }}" class="card-img-bottom album_photo">
                                @endif
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