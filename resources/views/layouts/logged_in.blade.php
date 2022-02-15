@extends('layouts.default')

@section('header')

<header>
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
        <a href="{{ route('albums.index') }}" class="navbar-brand"><img src="{{ asset('images/logo.png') }}"></a>
        <button data-toggle="collapse" data-target="#mainNav" class="navbar-toggler ml-auto">
            <span class="navar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ml-auto text-right">
                <li class="nav-item">
                    <form method="get" action="{{ route('albums.index') }}">
                        <div class="input-group">
                            <select name="range" class="form-control">
                                <option value="comment">コメント内容</option>
                                <option value="user">ユーザー名</option>
                            </select>
                            <input type="text" name="search_word" placeholder="検索ワードを入力" class="form-control">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li class="nav-item"><a href="{{ route('albums.create') }}" class="nav-link"><span class="d-none d-lg-block d-xl-none"><i class="far fa-plus-square"></i></span><span class="d-block d-lg-none d-xl-block"><i class="far fa-plus-square"></i> 新規作成</span></a></li>
                <li class="nav-item"><a href="{{ route('likes.index') }}" class="nav-link"><span class="d-none d-lg-block d-xl-none"><i class="far fa-images"></i></span><span class="d-block d-lg-none d-xl-block"><i class="far far fa-images"></i> お気に入り</span></a></li>
                <li class="nav-item"><a href="{{ route('follows.index', Auth::id()) }}" class="nav-link"><span class="d-none d-lg-block d-xl-none"><i class="fas fa-kiss-wink-heart"></i></span><span class="d-block d-lg-none d-xl-block"><i class="fas fa-kiss-wink-heart"></i> フォロー</span></a></li>
                <li class="nav-item"><a href="{{ route('follows.follower', Auth::id()) }}" class="nav-link"><span class="d-none d-lg-block d-xl-none"><i class="far fa-kiss-wink-heart"></i></span><span class="d-block d-lg-none d-xl-block"><i class="far fa-kiss-wink-heart"></i> フォロワー</span></a></li>
                <li class="nav-item"><a href="{{ route('users.show', Auth::id()) }}" class="nav-link"><span class="d-none d-lg-block d-xl-none text-truncate nav_user_name"><i class="far fa-user"></i> {{ Auth::user()->name }}</span><span class="d-block d-lg-none d-xl-block text-truncate nav_user_name"><i class="far fa-user"></i> {{ Auth::user()->name }}</span></a></li>
                <li class="nav-item">
                    <a class="nav-link click_action" href="#"><span class="d-none d-lg-block d-xl-none"><i class="fas fa-sign-out-alt"></i></span><span class="d-block d-lg-none d-xl-block"><i class="fas fa-sign-out-alt"></i> サインアウト</span></a>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>

@endsection

