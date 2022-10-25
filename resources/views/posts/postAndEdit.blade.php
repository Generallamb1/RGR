@extends('includes.default')
@section('content')
    @include('includes.header')
    <main role="main" class="container">
        <div сlass="row">
            <button class="col-3 btn btn-outline-secondary" onclick="showMessage()" id="editButton">Редактировать</button>
            <form style="display:none" action="{{ route('posts.delite', $Post->postId) }}" method="POST" id="delete-form">
                @csrf
                @method('DELETE')
            </form>
            <button class="btn btn-outline-secondary" type="submit" id="submitDelite" formaction="{{ route('posts.delite', $Post->postId) }}"
                formmethod="POST" form="delete-form">Удалить</button>

        </div>
        <div class="border-bottom my-4"></div>


        <div class="row" id="viewPost">
            <div class="col-md-12 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title" id="titlePost">{{ $Post->title }}</h2>
                    <p class="blog-post-meta">{{ $Post->created_at }} <a href="{{ route('users.myUser') }}">{{ $Post->name }}</a></p>
                    <p id="bodyPost">{{ $Post->body }}</p>
                </div><!-- /.blog-post -->
            </div>
        </div>

        <div class="row visibilityEdit" id="editPost">
            <div class="col-md-12 blog-main">
                <div class="blog-post">
                    <h3>Редактирование поста</h3>
                    <form action="{{ route('posts.edit', $Post->postId) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <p>
                            <label for="input">Название</label>
                            <input class="form-control" type="text" id="titleEditPost" name="title" placeholder="Название">
                            @error('title')
                            <div class="text-danger">Ошибка в заполнении названия</div>
                        @enderror
                        </p>
                        <p>
                            <label for="textarea">Содержание</label>
                            <textarea class="form-control" id="bodyEditPost" name="body" rows="3" placeholder="Содержание"></textarea>
                            @error('body')
                            <div class="text-danger">Ошибка в заполнении содержания</div>
                        @enderror
                        </p>
                        <p>
                            <button class="btn btn-outline-secondary" type="submit" name="submit" id="submitEdit">Заменить</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        @include('posts.commetnsPost')
    </main>
    @include('includes.footer')
@endsection
