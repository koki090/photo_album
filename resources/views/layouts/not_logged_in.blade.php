@extends('layouts.default')

@section('title', $title)

@section('header')

<header>
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
        <a href="{{ route('albums.home') }}" class="navbar-brand"><img src="{{ asset('images/logo.png') }}"></a>
        <button data-toggle="collapse" data-target="#mainNav" class="navbar-toggler ml-auto">
            <span class="navar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"><i class="fas fa-user-check"></i>会員登録</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><i class="fas fa-sign-in-alt"></i>ログイン</a></li>
            </ul>
        </div>
    </nav>
</header>

@endsection