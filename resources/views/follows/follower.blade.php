@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row">
    <div class="col-12">
        <h1><span class="text-truncate text-right follows_title" style="vertical-align: top;">{{ $user->name }}</span><span class="follows_title" style="overflow: hidden;">さんのフォロワー</span></h1>
    </div>
    @forelse($followers as $follower)
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 text-center">
        <a href="{{ route('users.show', $follower->id) }}">
            <div style="width: 100%; padding-top: 100%; position: relative;">
                @if($follower->image !== '')
                <img src="{{ asset('storage/' . $follower->image) }}" class="image_preview" style="top: 0; right: 0; bottom: 0; left: 0; position: absolute;">
                @else
                <img src="{{ asset('images/no_image.png') }}" class="image_preview" style="top: 0; right: 0; bottom: 0; left: 0; position: absolute;">
                @endif
            </div>
            <p class="text-truncate user_name">{{ $follower->name }}</p>
        </a>
    </div>
    @empty
    <div class="col-12 text-center noting_comment">誰にもフォローされていません。</div>
    @endforelse
</div>

@endsection