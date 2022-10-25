@extends('includes.default')
@section('content')
    @include('includes.header')
    <main role="main" class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-post">
                    <h2 class="blog-post-title">{{ $Post->title }}</h2>
                    <p class="blog-post-meta">{{ $Post->created_at }} <a
                            href="{{ route('users.user', $Post->userId) }}">{{ $Post->name }}</a></p>
                    <p>{{ $Post->body }}</p>
                </div><!-- /.blog-post -->
            </div>
        </div>
        @include('posts.commetnsPost')
    </main>
    @include('includes.footer')
@endsection
