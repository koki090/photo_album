@extends('layouts.not_logged_in')

@section('title', $title)

@section('content')

<div class="row">
    @forelse($albums as $album)
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 pt-3">
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
                </div>
            </div>    
        </a>
    </div>
    @empty
    <div class="col-12">アルバムはありません。</div>
    @endforelse
</div>

@endsection