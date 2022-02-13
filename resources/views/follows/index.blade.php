@extends('layouts.logged_in')

@section('title', $title)

@section('content')

<div class="row">
    <div class="col-12 row d-flex justify-content-end align-items-end">
        <h1 class="col-6 text-truncate text-right" style="padding-right: 0;">{{ $user->name }}</h1>
        <h1 class="col-6 text-left">さんのフォロー一覧</h1>
    </div>
    @forelse($follow_users as $follow_user)
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 text-center">
        <a href="{{ route('users.show', $follow_user->id) }}">
            @if($user->image !== '')
            <img src="{{ asset('storage/' . $follow_user->image) }}" class="image_preview">
            @else
            <img src="{{ asset('images/no_image.png') }}" class="image_preview">
            @endif
            <p class="text-truncate user_name">{{ $follow_user->name }}</p>
        </a>
    </div>
    @empty
    <div class="col-12 text-center noting_comment">フォローしている人はいません</div>
    @endforelse
</div>

@endsection