@extends('layouts.not_logged_in')

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
                    <div class="slick_photos">
                        @foreach($album->photos as $photo)
                        <img src="{{ asset('storage/' . $photo->path) }}" class="card-img-bottom card_img">
                        @endforeach
                    </div>
                </div>
            </div>    
        </a>
    </div>
    @empty
    <div class="col-12">アルバムはありません。</div>
    @endforelse
</div>

@endsection