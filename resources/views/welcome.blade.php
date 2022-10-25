@extends('includes.default')
@section('content')
    <div class="conteiner text-center">
        
        <form class="form-signin-center">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal">Мой блог</h1>
            @if (Route::has('login'))
                @auth
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <a href="{{ url('/posts') }}" class="btn btn-lg btn-primary btn-block">Перейти в
                            блог</a>
                    </div>
                @else
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <a href="{{ route('login') }}" class="btn btn-primary">Вход</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Регистрация</a>
                        @endif
                    </div>
                @endauth
            @endif
        </form>
    </div>
@endsection
