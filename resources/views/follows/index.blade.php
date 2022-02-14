@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row">
    <div class="col-12">
        <h1><span class="text-truncate text-right follows_title" style="vertical-align: top;">{{ $user->name }}</span><span class="follows_title" style="overflow: hidden;">さんのフォロー</span></h1>
    </div>
    @forelse($follow_users as $follow_user)
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 text-center">
        <a href="{{ route('users.show', $follow_user->id) }}">
            <div style="width: 100%; padding-top: 100%; position: relative;">
                @if($follow_user->image !== '')
                <img src="{{ asset('storage/' . $follow_user->image) }}" class="image_preview" style="top: 0; right: 0; bottom: 0; left: 0; position: absolute;">
                @else
                <img src="{{ asset('images/no_image.png') }}" class="image_preview" style="top: 0; right: 0; bottom: 0; left: 0; position: absolute;">
                @endif
            </div>
            <p class="text-truncate user_name">{{ $follow_user->name }}</p>
        </a>
    </div>
    @empty
    <div class="col-12 text-center noting_comment">フォローしている人はいません</div>
    @endforelse
</div>

@endsection