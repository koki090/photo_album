@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row">
    @forelse($albums as $album)
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 album">
        <a href="{{ route('albums.show', $album->id) }}">
            <div class="card h-100">
                <div class="card-header text-center" style="padding: 1vh;">
                    <p class="text-dark text-truncate" style="margin: 0 3vh auto 3vh;">{{ $album->title }}</p>
                </div>
                <div class="card-body" style="padding: 1vh; position: relative;">
                    <div style="width: 100%; padding-top: 100%; position: relative;">
                        @foreach($album->photos as $photo)
                        @if($loop->first)
                        <img src="{{ asset('storage/' . $photo->path) }}" class="card-img-bottom card_img" style="top: 0; right: 0; bottom: 0; left: 0; position: absolute;">
                        @endif
                        @endforeach
                    </div>
                    <div class="like_form">
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
            </div>    
        </a>
    </div>
    @empty
    <div class="col-12 text-center noting_comment">アルバムはありません。</div>
    @endforelse
</div>


@endsection