@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row">
    <div class="col-12">
        <h1><span class="text-truncate text-right follows_title_target_name">{{ $user->name }}</span><span class="follows_title">さんのフォロワー</span></h1>
    </div>
    @forelse($followers as $follower)
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 text-center">
        <a href="{{ route('users.show', $follower->id) }}" class="text-decoration-none">
            <div class="img_position">
                @if($follower->image !== '')
                <img src="{{ asset('storage/' . $follower->image) }}" class="user_image">
                @else
                <img src="{{ asset('images/no_image.png') }}" class="user_image">
                @endif
            </div>
            <p class="text-truncate w-75 mx-auto">{{ $follower->name }}</p>
        </a>
    </div>
    @empty
    <div class="col-12 text-center noting_comment">誰にもフォローされていません。</div>
    @endforelse
</div>

@endsection